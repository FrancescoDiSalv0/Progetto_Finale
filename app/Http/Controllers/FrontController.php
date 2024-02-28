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
        $announcements = $category->announcements()->where('is_accepted', true)->paginate(12);
        return view('categoryShow', compact("category", "announcements"));
    }

    public function searchAnnouncements (Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(12);
        return view('announcements.index', compact('announcements'));
        
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
