<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|   GET /projects (index - display list of the records)
|   GET /projects/1 (show - display single record)
|   GET /projects/create (create - display the create new record form)
|   GET /projects/1/edit (edit - display the edit record form)
|   POST /projects (store - write in a new record)
|   PATCH /projects/1 (update - update a record)
|   DELETE /projects/1 (destroy - delete a record)
|
*/

Route::get('/', 'PagesController@home');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', 'ProjectController@index');
Route::get('/projects/create', 'ProjectController@create');
Route::get('/projects/{project}', 'ProjectController@show');
Route::get('/projects/{project}/edit', 'ProjectController@edit');
Route::post('/projects', 'ProjectController@store');
Route::patch('/projects/{project}', 'ProjectController@update');
Route::delete('/projects/{project}', 'ProjectController@destroy');

Route::patch('/tasks/{task}', 'ProjectTaskController@update');