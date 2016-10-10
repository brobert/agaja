<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () { return view('techedu/pages/index'); });

Route::get('/about', function () { return view('techedu/pages/about'); });

Route::get('/class/grid', function () { return view('techedu/pages/class/grid'); })->name('class_grid');
Route::get('/class/list', function () { return view('techedu/pages/class/list'); })->name('class_list');
Route::get('/class/detail', function () { return view('techedu/pages/class/detail'); })->name('class_detail');

Route::get('/contact', function () { return view('techedu/pages/contact'); })->name('contact');