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
    return "Lumen RESTFUL API by Thomas Obale";
});

$router->group(['prefix' => 'selfie/v1'], function($router)
{
	// Requests for the project
	// {id} is id of the project which the user must type into the url to execute the 
	// function given in the second paramater
	$router->get('project','ProjectsController@index');
	$router->get('project/{id}','ProjectsController@getProject');
	$router->post('project','ProjectsController@createProject');
	$router->put('project/{id}','ProjectsController@updateProject');
	$router->delete('project/{id}','ProjectsController@deleteProject');

	// Request for images
	// {id} is id of the image which the user must type into the url to execute the 
	// function given in the second paramater
	$router->get('project/{id}/images','ImagesController@index');
	$router->post('{id}/image','ImagesController@createImage'); // Id for project
});