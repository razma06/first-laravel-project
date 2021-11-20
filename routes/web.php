<?php

use Illuminate\Support\Facades\Route;

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
    return view("start");
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/successful', function () {
    return json_encode(array("POST MESSAGE" => "SUCCESSFULLY UPDATED"));
});

Route::put('/successful', function () {
    return json_encode(array("PUT MESSAGE" => "SUCCESSFULLY ADDED"));
});

Route::delete('/successful', function () {
    return json_encode(array("DEL MESSAGE" => "SUCCESSFULLY ADDED"));
});

Route::get('/name', function () {
    return view('info', ['info' => 'GIORGI']);
});

Route::get('/surname', function () {
    return view('info', ['info' => 'RAZMADZE']);
});

Route::get('/hobby', function () {
    return view('info', ['info' => 'BASKETBALL']);
});

Route::get('/favorite-food', function () {
    return view('info', ['info' => 'KHINKALI']);
});

Route::get('/age', function () {
    return view('info', ['info' => '19']);
});
