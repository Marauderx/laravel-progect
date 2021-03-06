<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function store($gantt, Request $request){

        $task = new Task();

        $task->text = $request->text;
        $task->start_date = $request->start_date;
        $task->duration = $request->duration;
        $task->progress = $request->has("progress") ? $request->progress : 0;
        $task->parent = $request->parent;
        $task->gantt_id = $gantt;

        $task->save();

        return response()->json([
            "action"=> "inserted",
            "tid" => $task->id
        ]);
    }

    public function update($gantt, $id, Request $request){
        $task = Task::find($id);

        $task->text = $request->text;
        $task->start_date = $request->start_date;
        $task->duration = $request->duration;
        $task->progress = $request->has("progress") ? $request->progress : 0;
        $task->parent = $request->parent;
        $task->sortorder = Task::max("sortorder") + 1;

        $task->save();

        if($request->has("target")){
        $this->updateOrder($id, $request->target);
    }

        return response()->json([
            "action"=> "updated"
        ]);
    }

    public function destroy($gantt, $id){
        $task = Task::find($id);
        $task->delete();

        return response()->json([
            "action"=> "deleted"
        ]);
    }
}
