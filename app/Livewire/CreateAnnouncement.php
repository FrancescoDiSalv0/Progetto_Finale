<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    public $title;
    public $description;
    public $price;
    public $category;
    
    protected $rules = [
        'title' =>'required|min:4',
        'description' =>'required|min:8',
        'category' =>'required',
        'price' =>'required|numeric',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo :attribute deve essere lungo almeno :min caratteri',
        'numeric' => 'Il campo :attribute deve essere numerico',
    ];

    public function store()
    {
        $category = Category::find($this->category);

        $announcement = $category->announcements()->create([
            "title" => $this->title,
            "description" => $this->description,
            "price" => $this->price,
        ]);
        Auth::user()->announcements()->save($announcement);


        session()->flash('message', 'Annuncio creato con successo');
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
    }
   

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
