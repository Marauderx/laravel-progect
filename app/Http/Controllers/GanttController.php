<?php
namespace App\Http\Controllers;
use App\Task;
use App\Link;

class GanttController extends Controller
{
    public function get($id){
        $tasks = new Task();
        $links = new Link();

        return response()->json([
            "data" => $tasks->where('gantt_id', $id)->orderBy('sortorder')->get(),
            "links" => $links->where('gantt_id', $id)->get()
        ]);

    }
}
