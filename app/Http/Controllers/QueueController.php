<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getIndex() {
        // Get all the projects saved to the database
        $projects = Project::where('queue', '=', "register")->get();
        return response()->json($projects);
    }

    public function updateProjectQueue(Request $request, $id) {
        // Change details of the project and updated the record in the database
        $Project  = Project::find($id);
        $Project->queue = $request->input('queue');
        // return $Project->in_queue;
        $Project->save();
  
        return response()->json($Project);
    }
}
