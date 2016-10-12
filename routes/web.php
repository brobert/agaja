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

Route::get( '/', 'HomeController@index')->name('home');

Route::get('/about', function () { return view('techedu/pages/about'); });

Route::get('/class/grid', function () { return view('techedu/pages/class/grid'); })->name('class_grid');
Route::get('/class/list', function () { return view('techedu/pages/class/list'); })->name('class_list');
Route::get('/class/detail', function () { return view('techedu/pages/class/detail'); })->name('class_detail');

Route::get('/contact', function () { return view('techedu/pages/contact'); })->name('contact');

Route::group( ['prefix' => 'teacher'], function() {
    Route::get( '/', 'TeacherController@index')->name('teacher');
    Route::get( '/{id}', 'TeacherController@show')->name('teacher_show');
});

Route::group( ['prefix' => 'therapy'], function() {
    Route::get( '/', 'TherapyController@index')->name('therapy');
    Route::get( '/{id}', 'TherapyController@show')->name('therapy_show');
});

    Route::group( ['prefix' => 'events'], function() {
        Route::get( '/', 'EventController@index')->name('event');
        Route::get( '/{id}', 'EventController@show')->name('event_show');
    });
