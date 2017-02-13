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

Route::get('/','Index1Controller@index')->name('home');

Route::get('about','Index1Controller@showadministratia')->name('despre');
Route::get('events','Index1Controller@show')->name('events');
Route::get('contact','Index1Controller@contact')->name('contact');
Route::get('more/{id}','Index1Controller@showarticle')->name('ShowArticle');

Route::get('specialities/{id}','Index1Controller@showspecialities')->name('ShowSpecialities');
    
Route::get('specialities','Index1Controller@specs')->name('specs');
Route::get('specialities2','Index1Controller@specs2')->name('specs2');
Route::get('specialities3','Index1Controller@specs3')->name('specs3');
Route::get('specialities4','Index1Controller@specs4')->name('specs4');

