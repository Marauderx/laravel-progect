<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Gantt;

class MainGanttsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainGantts = Gantt::all();
        //return view('/gantt', ['mainGantts' => $Gantt]);
        //return view::make('/gantt')->with(compact('gantts'));
        return view('gantt', compact('mainGantts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Gantts  $gantts
     * @return \Illuminate\Http\Response
     */
    public function show(Gantts $gantts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gantts  $gantts
     * @return \Illuminate\Http\Response
     */
    public function edit(Gantts $gantts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gantts  $gantts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gantts $gantts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gantts  $gantts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gantts $gantts)
    {
        //
    }
}
