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

// Réecriture des routes avec le controller

Route::get('welcome','PagesController@home');
Route::get('contact', 'PagesController@contact');
Route::get('about','PagesController@about');