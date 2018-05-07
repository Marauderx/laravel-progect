<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
    public function store($gantt, Request $request){
        $link = new Link();

        $link->type = $request->type;
        $link->source = $request->source;
        $link->target = $request->target;
        $link->gantt_id = $gantt;

        $link->save();

        return response()->json([
            "action"=> "inserted",
            "tid" => $link->id
        ]);
    }

    public function update($gantt, $id, Request $request){
        $link = Link::find($id);

        $link->type = $request->type;
        $link->source = $request->source;
        $link->target = $request->target;

        $link->save();

        return response()->json([
            "action"=> "updated"
        ]);
    }

    public function destroy($gantt, $id){
        $link = Link::find($id);
        $link->delete();

        return response()->json([
            "action"=> "deleted"
        ]);
    }
}
