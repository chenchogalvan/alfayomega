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

use App\Catalogo;
use App\Galeria;
use App\Product;
use App\Proveedor;
use App\Service;

Route::get('/', function () {
    $proveedores = Proveedor::where([['show', 'yes'],['principal', 'SI']])->get();
    return view('layouts.inicio', compact('proveedores'));
    //return view('welcome');
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
        $productos = Product::where('show', 'yes')->where('proveedor_id', $proveedor->id)->get();
        $servicios = Service::where('show', 'yes')->where('proveedor_id', $proveedor->id)->get();
        $galeria = Galeria::where('proveedor_id', $proveedor->id)->get();
        $catalogo = Catalogo::where('show', 'yes')->where('proveedor_id', $proveedor->id)->get();
        return view('layouts.rammer', compact(['proveedor', 'prov', 'productos', 'servicios', 'galeria', 'catalogo']));
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

    Route::get('/agregar-servicios', 'HomeController@agregarServicios')->name('nebula.servicios');
    Route::resource('/addServices', 'ServiceController');

    Route::get('/agregar-galeria', 'HomeController@agregarGaleria')->name('nebula.galeria');
    Route::get('/editar-galeria/{id}', 'HomeController@editarGaleria')->name('nebula.galeria.editar');
    Route::resource('/addGallery', 'GaleriaController');

    Route::get('/agregar-catalogos', 'HomeController@agregarCatalogos')->name('nebula.catalogo');
    Route::resource('/addCatalogo', 'CatalogoController');
});
