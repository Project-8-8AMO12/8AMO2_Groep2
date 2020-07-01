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

// Main Routes
Route::get('/', function () {
    return view('index');
});
Route::get('/bijenstal', function () {
    return view('bijenstal');
});
Route::get('/lid-worden', function () {
    return view('lidworden');
});
Route::get('/activiteiten', function () {
    return view('activiteiten');
});
Route::get('/winkel', function () {
    return view('winkel');
});
Route::get('/test', function () {
    return view('welcome');
});
Route::get('/cursussen', function () {
    return view('cursussen');
});
Route::get('/zwermgezien', function () {
    return view('zwermgezien');
});
Route::get('/vereniging', function () {
    return view('vereniging');
});
Route::get('/foto', function () {
    return view('foto');
});

// Login Routes
Route::get('/login', 'UserController@index');
Route::post('/login/checklogin', 'UserController@checklogin');
Route::get('login/succeslogin', 'UserController@succeslogin');
Route::get('login/logout', 'UserController@logout');

Route::view('/register', 'register');
Route::post('/register/store', 'UserController@store');

// CRUD Routes
Route::get('/items', 'ItemsController@show');
Route::post('/items', 'ItemsController@create');
Route::put('/items/{id}', 'ItemsController@update');
Route::delete('/items/{id}', 'ItemsController@delete');
