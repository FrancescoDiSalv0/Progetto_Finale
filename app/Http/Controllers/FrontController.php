<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome() {
        $announcements=Announcement::where('is_accepted', true)->take(6)->get()->sortByDesc("created_at");
        return view('welcome', compact("announcements"));
    }

    public function categoryShow(Category $category) {
        return view('categoryShow', compact("category"));
    }

    public function searchAnnouncements (Request $request){
        $announcements =  Announcement::search($request->searched)->paginate(10);
        return view('announcements.index', compact('announcements'));
        // where('is_accepted', true)
    }
}
