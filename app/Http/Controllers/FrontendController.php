<?php

namespace App\Http\Controllers;
use App\Models\Ourteam;
use App\Models\Feedback;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Blog;
use App\Models\About;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function comming(){
        return view('frontend.index');
    }
    public function home(){
        // $team=Ourteam::where('delete_status',0)->get();
        // $feedback=Feedback::where('delete_status',0)->get();
        $about = About::where('delete_status', 0) ->where('status', 1)->first();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.index',compact('setting','about'));
    }
    public function about(){
        // $feedback=Feedback::where('delete_status',0)->get();
        // $image= Gallery::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        $about = About::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.about',compact('setting','about'));
    }

    public function gallery(){
        // $feedback=Feedback::where('delete_status',0)->get();
        $image= Gallery::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.gallery',compact('setting','image'));
    }
    public function blogs(){
        $blog = Blog::where('status',1)->where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->get();
        return view('frontend.blogs',compact('setting','blog'));
    }
    // public function blog($id){
    //     $blogg=Blog::find($id);
    //     $blog = Blog::where('status',1)->where('delete_status',0)->get()->take(8);
    //     $setting = Setting::where('delete_status', 0) ->where('status', 1)->get();
    //     return view('frontend.blog',compact('setting','blogg','blog'));
    // }
    public function contact(){
        // $feedback=Feedback::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.contact',compact('setting'));
    }
   
    public function service(){


        
        // $feedback=Feedback::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.services',compact('setting'));
    }

    public function doctors(){
        // $feedback=Feedback::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0)->where('status', 1)->first();
        $ourteam =Ourteam::where('delete_status', 0)->where('status', 1)->get();
        return view('frontend.doctors',compact('setting','ourteam'));
    }
}
