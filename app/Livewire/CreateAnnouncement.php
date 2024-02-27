<?php

namespace App\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
// use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateAnnouncement extends Component
{
    // public $title;
    // public $description;
    // public $price;
    // public $category;
    
    use WithFileUploads;

    #[Validate]
    public $title = "";
    #[Validate]
    public $description = "";
    #[Validate]
    public $price ="";
    #[Validate]
    public $category ="";
    #[Validate]
    public $images = [];
    #[Validate]
    public $temporary_images;
    
    public $announcement;



    protected $rules = [
        'title' =>'required|min:4',
        'description' =>'required|min:8',
        'category' =>'required',
        'price' =>'required|max:8',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'required|image|max:1024',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo :attribute deve essere lungo almeno :min caratteri',
        'max' => 'Il campo :attribute può essere lungo massimo :max caratteri',
        'numeric' => 'Il campo :attribute deve essere numerico',
        'temporary_images.required' => 'Devi selezionare almeno un\'immagine',
        'temporary_images.*.image' => 'I file devono essere immagini',  
        'temporary_images.*.max' => 'Le immagini devono essere di massimo 1024kb',
        'images.image' => 'I file devono essere immagini',
        'images.max' => 'Le immagini devono essere di massimo 1024kb',
    ];

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])) 
        {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }

    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function store()
    {

        $this->validate();
        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        if(count($this->images)){
            foreach ($this->images as $image) {
                // $this->announcement->images()->create([
                //     'path'=>$image->store('public/images')]);
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create([
                    'path' => $image->store($newFileName, 'public')]);

                dispatch(new ResizeImage($newImage->path, 400, 300));
                dispatch(new GoogleVisionSafeSearch($newImage->id));
                dispatch(new GoogleVisionLabelImage($newImage->id));
            }

            File::deleteDirectory(storage_path("/app/livewire-tmp"));
        }

        // $this->announcement->user()->associate(Auth::user());
        // $this->announcement->save();

        // $category = Category::find($this->category);
        // $announcement = $category->announcements()->create([
        //     "title" => $this->title,
        //     "description" => $this->description,
        //     "price" => $this->price,
        // ]);
        // Auth::user()->announcements()->save($announcement);

        session()->flash('message', 'Annuncio creato con successo, sarà pubblicato dopo la revisione ');
        $this->cleanForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm(){
        $this->title = "";
        $this->description = "";
        $this->price = "";
        $this->category = "";
        $this->images = [];
        $this->temporary_images = [];
    }
   

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
