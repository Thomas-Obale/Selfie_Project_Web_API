<?php

namespace App\Http\Controllers;

use App\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImagesController extends Controller {

    /**
     * Get all which belongs to the Project ID
     * 
     * @param type $id Project ID
     * @return JSON
     */
    public function index($id) {
        // Get images for a particular project
        $Images = Image::where('project_id', '=', $id)->get();
        return response()->json($Images);
    }

    /**
     * Get information for a particular image
     * @param type $id image
     * @return JSON
     */
    public function getImage($id) {

        // Find an image to display
        $Image = Image::find($id);
        return response()->json($Image);
    }

    /**
     * Save image to the local directory and store the url into the database 
     * @param Request $request input data
     * @param type $id project id which the image should belong to
     * @return JSON
     */
    public function createImage(Request $request, $id) {

       if ($request->file('url')->isValid()) {

            // Set the name of the image to be stored
            $picName = $request->file('url')->getClientOriginalName();
            $picName = date('d_m_y_h_i') . $picName;

            // Save to the image directory in the public folder
            $destinationPath = public_path('images' . DIRECTORY_SEPARATOR);
            $request->file('url')->move($destinationPath, $picName);

            // Save image record to the database
            $image = new Image();
            $image->url = 'images' . DIRECTORY_SEPARATOR . $picName;
            $image->project_id = $id;
            $image->save();
		
            // Return a confirmation message
           return response()->json('Done');

       } else {
            return response()->json('No Valid');
            //return response()->json($request);
       }
    }

    /**
     * Delete image with specified id
     * @param type $id
     * @return type
     */
    public function deleteImage($id) {

        // Find an image and deleted it from the database
        $Image = Image::find($id);
        $Image->delete();

        return response()->json('deleted');
    }


    public function updateImage(Request $request, $id) {

        // Change field data in the database and save changes
        $Image = Image::find($id);
        $Image->title = $request->input('name');
        $Book->save();

        // Return what has been changed to the user
        return response()->json($Book);
    }

}
