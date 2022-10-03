<?php

namespace App\Http\Controllers;

use App\Models\Ayurveda;
use Illuminate\Http\Request;

class AyurvedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ayurveda.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ayurveda= new   Ayurveda;
        $ayurveda->description=$request->l_desc;
        $ayurveda->save();
        return view('backend.ayurveda.edit',compact('ayurveda'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ayurveda  $ayurveda
     * @return \Illuminate\Http\Response
     */
    public function show(Ayurveda $ayurveda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ayurveda  $ayurveda
     * @return \Illuminate\Http\Response
     */
    public function edit(Ayurveda $ayurveda)
    {
        return view('backend.ayurveda.edit',compact('ayurveda'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ayurveda  $ayurveda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ayurveda $ayurveda)
    {
        $ayurveda->description=$request->l_desc;
        $ayurveda->save();
        return view('backend.ayurveda.edit',compact('ayurveda'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ayurveda  $ayurveda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ayurveda $ayurveda)
    {
        //
    }
}
