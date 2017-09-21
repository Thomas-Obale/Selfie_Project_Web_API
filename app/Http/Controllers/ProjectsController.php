<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    
    public function index() {
        // Get all the projects saved to the database
        $projects = Project::all();
        return response()->json($projects);
    }

    public function getProject($id){
        // Get details for a single project
        $Project  = Project::find($id);
        return response()->json($Project);
    }

    public function createProject(Request $request){
        // Create a new project
        $Project = Project::create($request->all());
        return response()->json($Project);
    }

    public function deleteProject($id){
        // Remove a project from the database
        $Project  = Project::find($id);
        $Project->delete();
        return response()->json('deleted');
    }

    public function updateProject(Request $request,$id){
       
        // Change details of the project and updated the record in the database
        $Project  = Project::find($id);
        $Project->title = $request->input('name');
        $Book->save();
  
        return response()->json($Book);
    }

}
