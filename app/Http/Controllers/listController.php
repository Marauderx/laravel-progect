<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Gantt;
use DB;

class listController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mainGantts = Gantt::all();
      return view('list', compact('mainGantts'));
    }

    public function addName(Request $request)
    {
      //$res = Gantt::create(['name' => $request->name]);
      //$data = ['id' => $res->id, 'name' => $request->name];

      //return $data;
      $name = Gantt::create($request->all());


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
    public function insert(Request $request)
    {
      //$name = $request->input('name');

      //$data = array('name'=>$name);

      //DB::table('gantts')->insert($data);
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

      Gantt::destroy($id);

      return response()->json([
          'success' => 'Record has been deleted successfully!'
        ]);
    }
}
