<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('home');
});

$router->get('projects', function () use ($router) {
    return view('projects');
});

$router->get('project_images', function () use ($router) {
    return view('images');
});

$router->get('photoscan', function () use ($router) {
    return view('photoscan');
});



$router->group(['prefix' => 'selfie/v1'], function($router)
{
  	/*
  	|--------------------------------------------------------------------------
  	| Projects related routes
  	|--------------------------------------------------------------------------
  	|
  	| Create, Read, Update and Delete routes for projects
  	|
  	*/

  	// Display all projects saved in the database
  	$router->get('projects','ProjectsController@index');

  	// Display the details of one specific project
  	$router->get('projects/{project_ID}','ProjectsController@getProject');

  	// Create a new project
  	$router->post('projects','ProjectsController@createProject');

  	// Update project details
  	$router->put('projects/{project_ID}','ProjectsController@updateProject');

  	// Delete a specific project by ID
  	$router->delete('projects/{project_ID}','ProjectsController@deleteProject');


  	/*
  	|--------------------------------------------------------------------------
  	| Images and PhotoScan related routes
  	|--------------------------------------------------------------------------
  	|
  	| Registration of all routes related to image processing and queues for
  	| Agisoft model processing
  	|
  	*/

  	// Get all the images for a particular project
  	$router->get('projects/{project_ID}/images','ImagesController@index');

  	// Include a new image
  	$router->post('{project_ID}/image','ImagesController@createImage'); // Id for project

  	// All projects registered to be processes by Agisoft Photoscan
  	$router->get('photoscan_queues', 'StatusController@index');

  	// Upated the queuing status
  	$router->put('photoscan_queues/update/{project_ID}', 'StatusController@updateStatus');
});
