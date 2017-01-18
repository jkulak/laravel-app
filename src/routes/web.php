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

// Cards
Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

// Notes
Route::get('notes/{note}/edit', 'NotesController@edit');
Route::post('cards/{card}/notes', 'NotesController@store');
Route::patch('notes/{note}', 'NotesController@update');

// Users
Route::get('users', 'UsersController@index');
Route::get('users/{user}', 'UsersController@show');



// Other examples
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/about', function () {
    $people = ['Tomek', 'Kuba', 'Andrzej'];
    $tasks = ['Add', 'Remove', 'Buy'];
    // return view('pages.about', ['people' => $people]);
    // return view('pages.about', compact('people', 'tasks'));
    // return view('pages.about')->with('people', $people)->with('tasks', $tasks);
    // return view('pages.about')->withPeople($people)->withTasks($tasks);
    return view('pages.about', [
        'people' => $people,
        'tasks' => $tasks,
    ]);
});

// Using a facade
Route::get('/info', function () {
    $people = ['Tomek', 'Kuba', 'Andrzej'];
    return View::make(); //a facade, same as return view();
});
