<?php

namespace App\Http\Controllers;
use App\Models\Ourteam;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Blog;
use App\Models\About;
use App\Models\Banner;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function comming(){
        $banner= Banner :: where('status',1)->first();
        $about = About::where('delete_status', 0) ->where('status', 1)->first();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.index',compact('setting','about','banner'));
    }
    public function home(){
        // $team=Ourteam::where('delete_status',0)->get();
        // $feedback=Feedback::where('delete_status',0)->get();
        $banner= Banner :: where('status',1)->first();
        $about = About::where('delete_status', 0) ->where('status', 1)->first();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.index',compact('setting','about','banner'));
    }
    public function about(){
        $banner= Banner :: where('status',1)->first();
        // $feedback=Feedback::where('delete_status',0)->get();
        // $image= Gallery::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        $about = About::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.about',compact('setting','about','banner'));
    }

    public function gallery(){
        $banner= Banner :: where('status',1)->first();
        // $feedback=Feedback::where('delete_status',0)->get();
        $image= Gallery::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.gallery',compact('setting','image','banner'));
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
        $banner= Banner :: where('status',1)->first();
        // $feedback=Feedback::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.contact',compact('setting','banner'));
    }
   
    public function service(){
        $banner= Banner :: where('status',1)->first();
        // $feedback=Feedback::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.services',compact('setting','banner'));
    }

    public function service_detail($id){
        $service =Service ::find($id);
        $banner= Banner :: where('status',1)->first();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.services',compact('setting','banner','service'));
    }

    public function doctors(){
        $banner= Banner :: where('status',1)->first();
        // $feedback=Feedback::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0)->where('status', 1)->first();
        $ourteam =Ourteam::where('delete_status', 0)->where('status', 1)->get();
        return view('frontend.doctors',compact('setting','ourteam','banner'));
    }

    public function faq(){
        $banner= Banner :: where('status',1)->first();
        $setting = Setting::where('delete_status', 0)->where('status', 1)->first();
        return view('frontend.faq',compact('setting','banner'));
    }
}
