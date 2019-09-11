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
    // Donnez des paramètres à la view, plusieurs façon de le faire
    $coachs = [
        'Lucas',
        'Zak',
        'Sami'
    ];
    /*
    return view('welcome',compact('coachs'))
    */
    return view('welcome',[
        'coachs'=> $coachs
    ]);
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
