<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class StatusController extends Controller {

    /**
     * Get all projects ready for processing
     *
     * @return void
     */
    public function index() {
        // Get all the projects saved to the database
        $projects = Project::where('status', '=', "ready_for_processing")->get();
        return response()->json($projects, 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_PRETTY_PRINT);
    }

    /**
     * Update Queued Project either by removing or including
     *
     * @param Request $request HTTP requested Data
     * @param Integer $project_id ID of queued projected to queued
     * @return JSON Formatted Data
     */
    public function updateStatus(Request $request, $project_id) {

        // Change details of the project and updated the record in the database
        $Project = Project::find($project_id);
        $Project->status = $request->input('status');
        $Project->save();

        return response()->json($Project, 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_PRETTY_PRINT);
    }

}
