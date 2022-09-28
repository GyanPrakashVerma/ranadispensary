<?php

namespace App\Http\Controllers;
use App\Models\Ourteam;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Faq;
use App\Models\About;
use App\Models\Banner;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function comming(){
        $banner= Banner :: where('status',1)->first();
        $service= Service ::where('delete_status', 0) -> where('status',1)->get();
        $about = About::where('delete_status', 0) ->where('status', 1)->first();
        $ourteam =Ourteam::where('delete_status', 0)->where('status', 1)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.index',compact('setting','about','banner','service','ourteam'));
    }
    public function home(){
        $banner= Banner :: where('status',1)->first();
        $service= Service ::where('delete_status', 0) -> where('status',1)->get();
        $about = About::where('delete_status', 0) ->where('status', 1)->first();
        $ourteam =Ourteam::where('delete_status', 0)->where('status', 1)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.index',compact('setting','about','banner','service','ourteam'));
    }
    public function about(){
        $banner= Banner :: where('status',1)->first();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        $about = About::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.about',compact('setting','about','banner'));
    }


    public function doctors(){
        $banner= Banner :: where('status',1)->first();
        $setting = Setting::where('delete_status', 0)->where('status', 1)->first();
        $ourteam =Ourteam::where('delete_status', 0)->where('status', 1)->get();
        return view('frontend.doctors',compact('setting','ourteam','banner'));
    }

    public function service(){
        $banner= Banner :: where('status',1)->first();
        $service= Service ::where('delete_status', 0) -> where('status',1)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.services',compact('setting','banner','service'));
    }

    public function service_detail($id){
        $ser =Service ::find($id);
        $banner= Banner :: where('status',1)->first();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.service_detail',compact('setting','banner','ser'));
    }


    public function contact(){
        $banner= Banner :: where('status',1)->first();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.contact',compact('setting','banner'));
    }
   

    public function gallery(){
        $banner= Banner :: where('status',1)->first();
        $image= Gallery::where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.gallery',compact('setting','image','banner'));
    }
    
    public function faq(){
        $banner= Banner :: where('status',1)->first();
        $faq= Faq :: where('delete_status',0)->get();
        $setting = Setting::where('delete_status', 0)->where('status', 1)->first();
        return view('frontend.faq',compact('setting','banner','faq'));
    }

    public function faq_detail($id){
        $faq =Faq ::find($id);
        $banner= Banner :: where('status',1)->first();
        $setting = Setting::where('delete_status', 0) ->where('status', 1)->first();
        return view('frontend.faq_detail',compact('setting','banner','faq'));
    }


    // public function blogs(){
    //     $blog = Blog::where('status',1)->where('delete_status',0)->get();
    //     $setting = Setting::where('delete_status', 0) ->where('status', 1)->get();
    //     return view('frontend.blogs',compact('setting','blog'));
    // }
    // public function blog($id){
    //     $blogg=Blog::find($id);
    //     $blog = Blog::where('status',1)->where('delete_status',0)->get()->take(8);
    //     $setting = Setting::where('delete_status', 0) ->where('status', 1)->get();
    //     return view('frontend.blog',compact('setting','blogg','blog'));
    // }
}
