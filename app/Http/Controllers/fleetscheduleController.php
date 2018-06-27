<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newschedule;
use App\Gantt;
use App\Link;
use App\Task;
use DB;

class fleetscheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $mainshedule = newschedule::all();
        $mainGantt = Gantt::all();
        return view('configurator.fleetschedule',['id' => $id], compact('mainshedule', 'mainGantt'));
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
      $link = new Link();

      $newschedule = newschedule::all();
      foreach ($newschedule as $que) {
      $task = new Task();

      $task->text = 'Рейс ' . $que['number'] . ' действителен c ' . $que['beginning'] . ' - ' . $que['ending'] . ' ' . $que['airportOfDeparture'] . ' ' . $que['airportOfArriving'];
      $task->start_date = $que['beginning'];
      $task->duration = '4';
      $task->progress = '0';//$request->has("progress") ? $request->progress : 0;
      $task->parent = '0';
      //$task->text = $que['type'] . ' ' . $que['timeOfDeparture'];
      //$task->parent = $que['id'];
      //$task->text = $que['type'] . ' ' . $que['timeOfArriving'];
      $task->gantt_id = $request->idGantt;

      $task->save();
}

      foreach ($newschedule as $que) {
      $task = new Task();

      $task->text = $que['type'] . ' ' . $que['timeOfDeparture'];
      $task->start_date = $que['beginning'];
      $task->duration = '1';
      $task->progress = '0';//$request->has("progress") ? $request->progress : 0;
      $task->parent = $task->id;
      //$task->text = $que['type'] . ' ' . $que['timeOfDeparture'];
      //$task->parent = $que['id'];
      //$task->text = $que['type'] . ' ' . $que['timeOfArriving'];
      $task->gantt_id = $request->idGantt;

      $task->save();
      }

      return redirect('/list/');
      // $link->type = $request->type;
      // $link->source = $request->source;
      // $link->target = $request->target;
      // $link->gantt_id = $request->idGantt;
      //
      // $link->save();

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
