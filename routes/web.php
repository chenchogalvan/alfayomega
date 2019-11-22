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
    return view('layouts.inicio');
});

Route::get('/servicios', function(){
    return view('layouts.servicios');
})->name('servicios');

Route::get('/equipo-de-demolicion', function () {
    return view('layouts.equipo');
})->name('equipo');

Route::group(['prefix' => '/equipo-de-demolicion'], function () {

    Route::get('/', function () {
        return view('layouts.equipo');
    })->name('equipo');

    Route::get('/rammer', function () {
        return view('layouts.rammer');
    })->name('rammer');

});

Route::get('/contacto', function () {
    return view('layouts.contacto');
})->name('contacto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
