<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class AnnouncementController extends Controller {   

    public function createAnnouncement()
    {
        return view("announcements.create");
    }

    public function showAnnouncement(Announcement $announcement)
    {
        return view("announcements.show", compact("announcement"));
    }

    public function indexAnnouncement()
    {
        $announcements = Announcement::where('is_accepted', true)->orderBy("created_at","desc")->paginate(12);
        return view("announcements.index", compact("announcements"));
    }

    // public function submitAnnouncement(Request $request){
    //     // dd($request);
    //     $announcement= Announcement::create([
    //         "title" => $request->input("title"),
    //         "description" => $request->input("description"),
    //         "price" => $request->input("price"),
    //     ]);

    // }

}
