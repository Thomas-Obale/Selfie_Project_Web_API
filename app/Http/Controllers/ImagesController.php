<?php

namespace App\Http\Controllers;

use App\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImagesController extends Controller {

    /**
     * Get all which belongs to the Project ID
     * 
     * @param type $project_id ID on an existing project
     * @return JSON
     */
    public function index($project_id) {
        // Get images for a particular project
        $Images = Image::where('project_id', '=', $project_id)->get();
        return response()->json($Images, 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_PRETTY_PRINT);
    }

    /**
     * Get information for a particular image
     * @param type $project_id ID on an existing project
     * @return JSON
     */
    public function getImage($project_id) {

        // Find an image to display
        $Image = Image::find($project_id);
        return response()->json($Image, 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_PRETTY_PRINT);
    }

    /**
     * Save image to the local directory and store the url into the database 
     * 
     * @param Request $request input data
     * @param Integer $project_id project id which the image should belong to
     * @return JSON
     */
    public function createImage(Request $request, $project_id) {

        if ($request->file('url')->isValid()) {

            // Set the name of the image to be stored
            $picName = $request->file('url')->getClientOriginalName();

            // Save to the image directory in the public folder
            $destinationPath = public_path('images' . DIRECTORY_SEPARATOR);
            $request->file('url')->move($destinationPath, $picName);

            // Save image record to the database
            $image = new Image();
            $image->url = 'images' . DIRECTORY_SEPARATOR . $picName;
            $image->category = $request->input('category');
            $image->project_id = $project_id;
            $image->save();

            // Return a confirmation message
            return response()->json('Image has been added successfully');
        } else {
            // Return friendly error message
            return response()->json('Image Sent is not Valid');
        }
    }

    /**
     * Delete image with specified id
     * @param type $project_id
     * @return type
     */
    public function deleteImage($project_id) {

        // Find an image and deleted it from the database
        $Image = Image::find($project_id);
        $Image->delete();

        return response()->json('deleted');
    }

    public function updateImage(Request $request, $project_id) {

        // Change field data in the database and save changes
        $Image = Image::find($project_id);
        $Image->title = $request->input('name');
        $Image->save();

        // Return what has been changed to the user
        return response()->json($Image);
    }

}
