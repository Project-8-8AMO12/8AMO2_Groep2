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
    return view('index');
});
Route::get('/bijenstal', function () {
    return view('bijenstal');
});
Route::get('/lid-worden', function () {
    return view('lidworden');
});
Route::get('/winkel', function () {
    return view('winkel');
});
Route::get('/test', function () {
    return view('welcome');
});

