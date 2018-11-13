<?php

namespace App\Http\Controllers;

use App\training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TrainingController extends Controller
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
        
        return view('/training/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'hos_no' => 'required|unique:trainings|max:255',
            'subject' => 'required',
            'cat' => 'required',
        ]);

        $training = new training();
        $training->hos_no = Input::post('hos');
        $training->cat = Input::post('cat');
        $training->subject = Input::post('subject');
        $training->description = Input::post('description');
        $training->from = Input::post('from');
        $training->to = Input::post('to');
        $training->place_of_training = Input::post('place');
        $training->save();
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(training $training)
    {
        //
    }
}
