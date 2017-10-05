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
    // return $router->app->version();
    return view('home');
});

$router->group(['prefix' => 'selfie/v1'], function($router)
{
	// Requests for the project
	// {id} is id of the project which the user must type into the url to execute the 
	// function given in the second paramater
	$router->get('projects','ProjectsController@index');
	$router->get('projects/{id}','ProjectsController@getProject');
	$router->post('projects','ProjectsController@createProject');
	$router->put('projects/{id}','ProjectsController@updateProject');
	$router->delete('projects/{id}','ProjectsController@deleteProject');

	// Request for images
	// {id} is id of the image which the user must type into the url to execute the 
	// function given in the second paramater
	$router->get('projects/{id}/images','ImagesController@index');
	$router->post('{id}/image','ImagesController@createImage'); // Id for project


	// Queue Handling
	$router->get('photoscan_queues', 'QueueController@getIndex');
	$router->put('photoscan_queues/update/{id}', 'QueueController@updateProjectQueue');
});