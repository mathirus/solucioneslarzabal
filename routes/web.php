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

Route::view('/','layouts/dashboard')->name('home');

Route::post('/','MailController@store')->name('home');


Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');


