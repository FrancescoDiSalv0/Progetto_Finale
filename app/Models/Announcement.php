<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Announcement extends Model {
    use HasFactory, Searchable;


    protected $fillable = [
        "title",
        "description",
        "price",
    ];

    public $asYouType = true;

    public function toSearchableArray()
    {
        $category = $this->category;
        $array=$this->toArray();
        $array = [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "category" => $category,
        ];
        return $array;
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function setAccepted($value) 
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount()
    {
        return Announcement::where('is_accepted', null)->count();
    }
}
