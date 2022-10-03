<?php

namespace App\Http\Controllers;

use App\Models\Unani;
use Illuminate\Http\Request;

class UnaniController extends Controller
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
        return view('backend.unani.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unani = new Unani;
        $unani->description=$request->l_desc;
        $unani->save();
        return view('backend.unani.edit',compact('unani'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unani  $unani
     * @return \Illuminate\Http\Response
     */
    public function show(Unani $unani)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unani  $unani
     * @return \Illuminate\Http\Response
     */
    public function edit(Unani $unani)
    {
        return view('backend.unani.edit',compact('unani'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unani  $unani
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unani $unani)
    {
        $unani->description=$request->l_desc;
        $unani->save();
        return view('backend.unani.edit',compact('unani'));
    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unani  $unani
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Unani $unani)
    // {
    //     // $unani->delete();
    //     // return view('backend.unani.edit',compact('unani'));
    // }
}

