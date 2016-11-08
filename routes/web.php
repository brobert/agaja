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
    Route::get( '/', 'AboutUsController@index')->name('agaja');
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

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('get_logout');

Route::get('/home', 'HomeController@index');

Route::group( [ 'prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin' ], function() {
    Route::get( '/', 'AdminController@index')->name('admin');

    Route::get( '/setting', 'SettingController@index')->name('setting');
    Route::get( '/account', 'AccountController@index')->name('account');

});
