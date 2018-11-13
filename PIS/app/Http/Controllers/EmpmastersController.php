<?php

namespace App\Http\Controllers;

use App\empmasters;
use Illuminate\Http\Request;
use DB;

class EmpmastersController extends Controller
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
        $states = DB::table('states')->get();
        //return $states;
        return view('index')->with('states',$states);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empmasters  $empmasters
     * @return \Illuminate\Http\Response
     */
    public function show(empmasters $empmasters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empmasters  $empmasters
     * @return \Illuminate\Http\Response
     */
    public function edit(empmasters $empmasters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empmasters  $empmasters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empmasters $empmasters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empmasters  $empmasters
     * @return \Illuminate\Http\Response
     */
    public function destroy(empmasters $empmasters)
    {
        //
    }
}
