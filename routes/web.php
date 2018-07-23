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
    return View::make('front_end/home');
});

Route::get('/profile', function () {
    return View::make('front_end/profile');
});

Route::get('/portfolio', function () {
    return View::make('front_end/portfolio');
});


Route::get('/resume', function () {
    return View::make('front_end/resume');
});

Route::get('/contact', function () {
    return View::make('front_end/contact');
});