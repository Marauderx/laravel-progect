<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\allnewschedule;
use DB;

class ListfleetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainFleet = allnewschedule::all();
        return view('configurator.listfleet', compact('mainFleet'));
    }

    public function addName(Request $request)
    {
      //$res = Gantt::create(['name' => $request->name]);
      //$data = ['id' => $res->id, 'name' => $request->name];

      //return $data;
      $name = allnewschedule::create($request->all());


      return response()->json([
          "tid" => $name->id,
          "name" => $name->name

      ]);
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

            allnewschedule::destroy($id);

            return response()->json([
                'success' => 'Record has been deleted successfully!'
              ]);
    }
}
