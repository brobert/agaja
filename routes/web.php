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
Route::get( '/about', 'AboutUsController@index')->name('about');
Route::get( '/contact', 'ContactController@index')->name('contact');

Route::group( ['prefix' => 'agaja'], function() {
    Route::get( '/', 'AgajaController@index')->name('agaja');
});

Route::group( ['prefix' => 'teacher'], function() {
    Route::get( '/', 'TeacherController@index')->name('teacher');
    Route::get( '/{id}', 'TeacherController@show')->name('teacher_show');
});

Route::group( ['prefix' => 'therapy'], function() {
    Route::get( '/', 'TherapyController@index')->name('therapy');
    Route::get( '/{id}', 'TherapyController@show')->name('therapy_show');
});

// Route::group( ['prefix' => 'events'], function() {
//     Route::get( '/', 'EventController@index')->name('event');
//     Route::get( '/{id}', 'EventController@show')->name('event_show');
// });
