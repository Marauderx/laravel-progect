<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\aircraft;
use DB;

class aircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('configurator.aircraft');
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
      $req = json_decode($request->getContent());
      $flights = $req->flights;
      foreach ($flights as $key => $elem) {
        $aircraft = new aircraft();

        $aircraft->nameAircraft = $elem->nameAircraft;
        $aircraft->aircraftType = $elem->aircraftType;
        $aircraft->wingspan = $elem->wingspan;
        $aircraft->arrangementSalon = $elem->arrangementSalon;
        $aircraft->takeoffWeight = $elem->takeoffWeight;
        $aircraft->engineType = $elem->engineType;
        $aircraft->cruisingSpeed = $elem->cruisingSpeed;
        $aircraft->flightAltitude = $elem->flightAltitude;
        $aircraft->flightRange = $elem->flightRange;
        $aircraft->flightTime = $elem->flightTime;

        $aircraft->save();
      }
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
    public function update(Request $request, $id)
    {
        //
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
