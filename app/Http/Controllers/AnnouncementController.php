<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller {   

    public function createAnnouncement()
    {
        return view("announcements.create");
    }

    public function submitAnnouncement(Request $request){
        // dd($request);
        $announcement= Announcement::create([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "price" => $request->input("price"),
        ]);

       
    }



}
