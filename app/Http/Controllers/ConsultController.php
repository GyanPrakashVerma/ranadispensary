<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use Illuminate\Http\Request;

class ConsultController extends Controller
{
    public function store(Request $request)
    {

        //    return $request;


        // $request->validate([
        //     'name' => 'required|max:255',
        //     'age' => 'required|numeric',
        //     'gender' => 'required',
        //     'm_status' => 'required',
        //     'phone' => 'required|min:10',
        //     'email' => 'required|email|max:255',
        //     'weight' => 'required',
        //     'height' => 'required',
        //     'city' => 'required',
        //     'country' => 'required',
        //     'food_type' => 'required',
        //     'appetite' => 'required',
        //     'physique' => 'required',
        //     'constipation' => 'required',
        //     'sleeplessness' => 'required',
        //     'height' => 'required',
        //     'hypertension' => 'required',
        //     'diabetic' => 'required',
        //     'ex_urination' => 'required',
        //     'noc_emission' => 'required',
        //     'permature_ejaculation' => 'required',
        //     's_weakness' => 'required',
        //     'v_diseases' => 'required',
        //     'intoxicant' => 'required',
        //     'message' => 'required|max:500',

        // ]);

        // Consult::create($input);

        $consult = new Consult;
        $consult->name=$request->name;
        $consult->age=$request->age;
        $consult->gender=$request->gender;
        $consult->m_status=$request->mstatus;
        $consult->phone=$request->phone;
        $consult->email=$request->email;
        $consult->weight=$request->weight;
        $consult->height=$request->height;
        $consult->city=$request->city;
        $consult->country=$request->country;
        $consult->foodtype=$request->foodtype;
        $consult->appetite=$request->appetite;
        $consult->physique=$request->physique;
        $consult->constipation=$request->constipation;
        $consult->sleeplessness=$request->sleeplessness;
        $consult->hypertension=$request->hypertension;
        $consult->diabetic=$request->diabetic;
        $consult->ex_urination=$request->ex_urination;
        $consult->noc_emission=$request->noc_emission;
        $consult->premature_ejaculation=$request->premature_ejaculation;
        $consult->s_weakness=$request->s_weakness;
        $consult->v_diseases=$request->v_diseases;
        $consult->intoxicant=$request->intoxicant;
        $consult->message=$request->message;
        $consult->save();
        return back()->with('success', 'Successfully  recieved your message!');
    }
}
