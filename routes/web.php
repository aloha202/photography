<?php

use Illuminate\Support\Facades\Route;

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
    return view('app.welcome', ['wrapper_class' => 'orb-home-1', 'current' => 'home']);
});

Route::get('/contacts', function () {
    return view('app.contacts', ['wrapper_class' => 'orb-contact-1', 'current' => 'contact']);
});


Route::get('/discount', function (){
    return view('app.comming', ['wrapper_class' => 'orb-contact-1', 'current' => 'discount']);
});

Route::get('/reserve', function (){
    return view('app.comming', ['wrapper_class' => 'orb-contact-1', 'current' => 'reserve']);
});

Route::get('/portfolio', function (){
    return view('app.comming', ['wrapper_class' => 'orb-contact-1', 'current' => 'portfolio']);
});
