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
    return view('index');
});


Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/services/plombier', function () {
    return view('plombier');
});

Route::get('/services/electricien', function () {
    return view('electricien');
});

Route::get('/services/jardinier', function () {
    return view('jardinier');
});


Route::get('/services/netoyagemaison', function () {
    return view('netoyagemaison');
});



Route::get('/services/gardiennage-et-surveillance', function () {
    return view('gardiennage-et-surveillance');
});


Route::get('/services/peinture', function () {
    return view('peinture');
});

Route::get('/services/profile', function () {
    return view('profile');
});