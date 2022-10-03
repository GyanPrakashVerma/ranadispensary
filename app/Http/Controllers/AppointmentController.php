<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // public function list(){
    //     $appw =Appointment::where('delete_status',0)->get();
    //     return view('backend.dashboard',compact('appw'));
    // }
   public function store(Request $req){
            $app = new Appointment;
            $app->name=$req->name;
            $app->age=$req->age;
            $app->mobile=$req->mobile;
            $app->email=$req->email;
            $app->message=$req->msg;
            $app->save();
            return redirect()->back();
            
   }
}
