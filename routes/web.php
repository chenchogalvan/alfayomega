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

use App\Proveedor;

Route::get('/', function () {
    $proveedores = Proveedor::where('show', 'yes')->get();
    return view('layouts.inicio', compact('proveedores'));
});

Route::get('/servicios', function(){
    return view('layouts.servicios');
})->name('servicios');

Route::get('/equipo-de-demolicion', function () {
    return view('layouts.equipo');
})->name('equipo');

Route::group(['prefix' => '/equipo-de-demolicion'], function () {

    Route::get('/', function () {
        $proveedores = Proveedor::where('show', 'yes')->get();

        return view('layouts.equipo', compact('proveedores'));
    })->name('equipo');

    Route::get('/{proveedor}', function (Proveedor $proveedor) {
        $prov = Proveedor::where('show', 'yes')->get();
        return view('layouts.rammer', compact(['proveedor', 'prov']));
    })->name('proveedores');

});

Route::get('/contacto', function () {
    return view('layouts.contacto');
})->name('contacto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'nebula'], function () {
    Route::get('/', 'HomeController@index')->name('nebula.dashboard');

    Route::get('/agregar-proveedores','HomeController@agregarProveedor')->name('nebula.proveedores');
    Route::resource('/addProveedors', 'ProveedorController');


    Route::get('/agregar-productos', 'HomeController@agregarProductos')->name('nebula.productos');
    Route::resource('/addProducts', 'ProductController');
});
