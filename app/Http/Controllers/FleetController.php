<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\aircraft;
use App\schedule;
use App\newschedule;
use App\allschedule;
use App\allnewschedule;

use DB;

class FleetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainAircraft = aircraft::all();
        $mainschedule = allschedule::all();
        return view('configurator.fleet', compact('mainschedule', 'mainAircraft'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $schedule = schedule::where('configuration',$request['configuration'])->where('type', $request['type'])->take($request['numbort'])->get();
        //$allshedules = allschedule::all();
      //  $newallshedules = newallschedule::all();
      foreach($schedule as $a)
      {
        $main["number"] = $a["number"];
        $main["beginning"] = $a["beginning"];
        $main["ending"] = $a["ending"];
        $main["type"] = $a["type"];
        $main["configuration"] = $a["configuration"];
        $main["airportOfDeparture"] = $a["airportOfDeparture"];
        $main["timeOfDeparture"] = $a["timeOfDeparture"];
        $main["airportOfArriving"] = $a["airportOfArriving"];
        $main["timeOfArriving"] = $a["timeOfArriving"];
          $c= allnewschedule::where("name",$request["allshedule"])->get();
          foreach($c as $d)
          {
            $main["newschedules_id"] = $d['id'];
            newschedule::create($main);
          }



      }
      $newschedules = allnewschedule::where('name',$request["allshedule"])->get();
      foreach($newschedules as $b){
        $e['id']=$b['id'];
      return redirect('/listfleet/');
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
