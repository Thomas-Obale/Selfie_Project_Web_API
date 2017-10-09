<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller {

    /**
     * Display all existing projects into a JSON formatted object
     * 
     * @return JSON formatted Data
     */
    public function index() {
        // Get all the projects saved to the database
        $projects = Project::all();
        return response()->json($projects, 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_PRETTY_PRINT);
    }

    /**
     * Display all information about a specific project into a JSON formatted object
     * 
     * @param type $project_id ID of existing project
     * @return JSON Formatted data
     */
    public function getProject($project_id) {
        // Get details for a single project
        $Project = Project::find($project_id);
        return response()->json($Project, 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_PRETTY_PRINT);
    }

    /**
     * Create a new project with database credentials
     * 
     * @param Request $request HTTP Data
     * @return JSON Formatted data
     */
    public function createProject(Request $request) {
        // Create a new project
        $Project = Project::create($request->all());
        return response()->json($Project, 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_PRETTY_PRINT);
    }

    /**
     * Delete project from database
     * 
     * @param Integer $project_id ID of the project to be deleted
     * @return JSON Formatted data
     */
    public function deleteProject($project_id) {
        // Remove a project from the database
        $Project = Project::find($project_id);
        $Project->delete();
        return response()->json('deleted', 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_PRETTY_PRINT);
    }

    /**
     * Update project details
     * 
     * @param Request $request
     * @param Integer $project_id ID of the project to be updated
     * @return JSON Formatted data
     */
    public function updateProject(Request $request, $project_id) {

        // Change details of the project and updated the record in the database
        $Project = Project::find($project_id);
        $Project->name = $request->input('name');
        $Project->queue = $request->input('queue');
        $Project->save();

        return response()->json($Project, 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_PRETTY_PRINT);
    }

}
