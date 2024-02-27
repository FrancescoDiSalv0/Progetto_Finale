<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient;

class GoogleVisionLabelImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    /**
    * Create a new job instance.
    */
    private $announcement_image_id;
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }
    
    /**
    * Execute the job.
    */
    public function handle() {

        $i = Image::find($this->announcement_image_id);
        if (!$i) {
            return;
        }
        $image = file_get_contents(storage_path('app/public/'.$i->path));
        // Imposta La variabile di ambiente GOOGLE_APPLICATION_CREDENTIALS
        // al path del credentials file
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->labelDetection($image);
        $labels = $response->getLabelAnnotations();

        if ($labels) {
            $result = [];
            foreach ($labels as $label) {
                $result[] = $label->getDescription();
            }
            // echo json_encode($result);
            $i->labels = $result;
            $i->save();
        }
        
        $imageAnnotator->close();
    }
    
}
