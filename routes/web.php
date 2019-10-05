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
    return view('app');
});

Route::get('/support_content', function () {
    return view('home');
});
Route::get('/sale_content', function () {
    return view('sale');
});
Route::get('/report_content', function () {
    return view('report');
});

Route::post('/postSubmit',"PostController@store");