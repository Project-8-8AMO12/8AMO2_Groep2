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
Route::get('/cursussen', function () {
    return view('cursussen');
});
Route::get('/zwermgezien', function () {
    return view('zwermgezien');
});
Route::get('/login', 'usercontroller@index');
Route::post('/login/checklogin', 'usercontroller@checklogin');
Route::get('login/succeslogin', 'usercontroller@succeslogin');
Route::get('login/logout', 'usercontroller@logout');

Route::view('/register', 'register');
Route::post('/register/store', 'usercontroller@store');