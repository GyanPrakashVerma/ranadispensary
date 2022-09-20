<?php

namespace App\Http\Controllers;
use App\Models\Ourteam;
use App\Models\Feedback;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Blog;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function comming(){
        return view('frontend.index');
    }
    public function home(){
        // $team=Ourteam::where('delete_status',0)->get();
        // $dir=Ceo::where('delete_status',0)->get();
        // $feedback=Feedback::where('delete_status',0)->get();
        // $plot=Plotmodel::where('status',1)->get();
        // $duplex=Contactsale::where('status',1)->get()->take(3);
        // $setting = Setting::where('delete_status', 0) ->where('status', 1)->get()->take(3);
        return view('frontend.index');
    }
    public function about(){
        // $feedback=Feedback::where('delete_status',0)->get();
        // $image= Gallery::where('delete_status',0)->get();
        // $setting = Setting::where('delete_status', 0) ->where('status', 1)->get();
        return view('frontend.about');
    }

    public function gallery(){
        // $feedback=Feedback::where('delete_status',0)->get();
        // $image= Gallery::where('delete_status',0)->get();
        // $setting = Setting::where('delete_status', 0) ->where('status', 1)->get();
        return view('frontend.gallery');
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
        // $setting = Setting::where('delete_status', 0) ->where('status', 1)->get();
        return view('frontend.contact');
    }
   
    public function service(){
        // $feedback=Feedback::where('delete_status',0)->get();
        // $setting = Setting::where('delete_status', 0) ->where('status', 1)->get();
        return view('frontend.services');
    }

    public function doctors(){
        // $feedback=Feedback::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0)->where('status', 1)->get();
        $ourteam =Ourteam::where('delete_status', 0)->where('status', 1)->get();
        return view('frontend.doctors',compact('setting','ourteam'));
    }
}
