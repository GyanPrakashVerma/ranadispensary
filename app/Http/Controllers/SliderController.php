<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider= Slider :: where('status',1)->get();
        return view('backend.slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider=New Slider;
        if($request->image!=null){
            $slider_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(('slider'),$slider_photo);
            $slider->slider=$slider_photo;
    }
    $slider->save();
    return redirect()->route('slider.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit',compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        // $slider=New Slider;
        if($request->image!=null){
            $slider_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(('slider'),$slider_photo);
            $slider->slider=$slider_photo;
    }
    $slider->status=$request->status;
    $slider->save();
    // return view('backend.slider.edit',compact('slider'));

    return redirect()->route('slider.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
      $slider->delete();
      return redirect()->route('slider.index'); 

    }
    public function updateStatus(Request $request)
{
    $user = Slider::findOrFail($request->user_id);
    $user->status = $request->status;
    $user->save();

    return response()->json(['message' => 'User status updated successfully.',]);
    return  $request;
}
}
