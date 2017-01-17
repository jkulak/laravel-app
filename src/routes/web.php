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

// Using database and RESTful design
Route::get('cards', 'CardsController@index');
Route::get('cards/create', 'CardsController@create');
Route::post('cards', 'CardsController@store');

Route::post('cards/{id}/edit', 'CardsController@edit');
Route::put('cards/{id}', 'CardsController@update');

Route::delete('cards/{id}', 'CardsController@destroy');



// Other examples
Route::get('/controller', 'PagesController@home');
Route::get('/second', 'PagesController@second');

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
    return View::make(); //a faced, same as return view();
});
