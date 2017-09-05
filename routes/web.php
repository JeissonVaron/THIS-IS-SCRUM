<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
	Route::get('users',[
		'as'	=>	'users.index',
		'uses'	=>	'Auth\UserController@index'
	]);

	Route::get('users/{id_user}/edit',[
		'as'	=>	'users',
		'uses'	=>	'Auth\UserController@edit'
	]);
	Route::get('users/{id_user}',[
		'PUT',
		'as'	=>	'users.update',
		'uses'	=>	'Auth\UserController@update'

	]);
Route::group(['prefix' => 'Administrador'], function(){
	Route::get('Admi/projects/{id_user}',[
		'as'	=>	'Admi.projects.view',
		'uses'	=>	'ProjectsController@searchProjects'
	]);
	Route::resource('projects', 'ProjectsController');
	Route::resource('Criterias', 'CriteriasController');
	Route::resource('Historys', 'HistoryController');
	Route::resource('Sprints', 'SprintController');
	Route::resource('Tasks', 'TasksController'); 
});
