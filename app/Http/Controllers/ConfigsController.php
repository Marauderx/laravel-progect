<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\schedule;
use DB;
use Input;

class ConfigsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        return view('configurator.config', ['id' => $id]);
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
    public function store($id, Request $request)
    {
      $req = json_decode($request->getContent());
      $flights = $req->flights;
      foreach ($flights as $key => $elem) {
        $schedule = new schedule();

        $schedule->number = $elem->number;
        $schedule->beginning = $elem->beginning;
        $schedule->ending = $elem->ending;
        $schedule->type = $elem->type;
        $schedule->configuration = $elem->configuration;
        $schedule->airportOfDeparture = $elem->airportOfDeparture;
        $schedule->timeOfDeparture = $elem->timeOfDeparture;
        $schedule->airportOfArriving = $elem->airportOfArriving;
        $schedule->timeOfArriving = $elem->timeOfArriving;

        $schedule->schedules_id = $id;

        $schedule->save();

      }





      /*
      $name = new schedule;
      $name->title = $input['number'];

      $name->title = $input['beginning'];
      $name->title = $input['ending'];
      $name->title = $input['type'];
      $name->title = $input['configuration'];
      $name->title = $input['airportOfDeparture'];
      $name->title = $input['timeOfDeparture'];
      $name->title = $input['airportOfArriving'];
      $name->title = $input['timeOfArriving'];
      $name->schedules_id = $id;

      $name->save();
      return redirect('configurator.config');
      //$name = schedule::create($request->all());

      dump($name);
*/


      //$schedules_id = $request->input('schedules_id');
      //$table = new schedule;
      //$table = schedule::find($id);

      /*$table = schedule::create([(
        'number' ->request('required');
        'beginning' -> request('required');
        'ending' -> request('required');
        'type' -> request('required');
        'configuration' -> request('required');
        'airportOfDeparture' -> request('required');
        'timeOfDeparture' -> request('required');
        'airportOfArriving' -> request('required');
        'timeOfArriving' -> request('required');
        'schedules_id' -> auth()->id()
  );

*/

        //$table = schedule::create($request->all());
/*
      $table->number = $request->number;
      $table->beginning = $request->beginning;
      $table->ending = $request->ending;
      $table->type = $request->type;
      $table->configuration = $request->configuration;
      $table->airportOfDeparture = $request->airportOfDeparture;
      $table->timeOfDeparture = $request->timeOfDeparture;
      $table->airportOfArriving = $request->airportOfArriving;
      $table->timeOfArriving = $request->timeOfArriving;

      $link->save();
*/
/*
      $res = schedule::create([
        'number' => $request->number,
        'beginning' => $request->beginning,
        'ending' => $request->ending,
        'type' => $request->type,
        'configuration' => $request->configuration,
        'airportOfDeparture' => $request->airportOfDeparture,
        'timeOfDeparture' => $request->timeOfDeparture,
        'airportOfArriving' => $request->airportOfArriving,
        'timeOfArriving' => $request->timeOfArriving
        ]);

*/
      //$data = ['id' => $res->id, 'name' => $request->name];
      //return $data;
      //$name = allschedule::create($request->all());
      //$table = schedule::create($request->all());

      //$table = schedule::all();
      //$table = new schedule();
        //$table = new schedule;
      //dd($table);
/*
      $table = [
      $table->number = $request->number,
      $table->beginning = $request->beginning,
      $table->ending = $request->ending,
      $table->type = $request->type,
      $table->configuration = $request->configuration,
      $table->airportOfDeparture = $request->airportOfDeparture,
      $table->timeOfDeparture = $request->timeOfDeparture,
      $table->airportOfArriving = $request->airportOfArriving,
      $table->timeOfArriving = $request->timeOfArriving,
    ];
      $table = schedule::where("schedules_id", $request->input('schedules_id'))->first();

      //$table->schedules_id = $schedule;

      //return $table->toArray();
      $table->save();

      return response()->json([
          "action"=> "inserted",
          "tid" => $table->id,
          "number" =>$table->number,
          "beginning" =>$table->beginning,
          "ending" =>$table->ending,
          "type" =>$table->type,
          "configuration" =>$table->configuration,
          "airportOfDeparture" =>$table->airportOfDeparture,
          "timeOfDeparture" =>$table->timeOfDeparture,
          "airportOfArriving" =>$table->airportOfArriving,
          "timeOfArriving" =>$table->timeOfArriving

      ]);
*/

/*
      $table->number = $request->number['number'];
      $table->beginning = $request->beginning['beginning'];
      $table->ending = $request->ending['ending'];
      $table->type = $request->type['type'];
      $table->configuration = $request->configuration['configuration'];
      $table->airportOfDeparture = $request->airportOfDeparture['airportOfDeparture'];
      $table->timeOfDeparture = $request->timeOfDeparture['timeOfDeparture'];
      $table->airportOfArriving = $request->airportOfArriving['airportOfArriving'];
      $table->timeOfArriving = $request->timeOfArriving['timeOfArriving'];
      $table->schedules_id = $schedule;
      //$name = schedule::create($request->all());
*/

      //return response()->json([
        //"tid" => $name->id,
        //"name" => $name->name

    //]);


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
