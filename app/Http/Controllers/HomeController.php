<?php

namespace App\Http\Controllers;

use App\Product;
use App\Proveedor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('nebula.dashboard');
    }

    public function agregarProveedor()
    {
        return view('nebula.proveedor');
    }


    public function agregarProductos()
    {
        $productos = Product::where('show', 'yes')->get();
        $proveedores = Proveedor::where('show', 'yes')->get();
        return view ('nebula.productos', compact(['productos', 'proveedores']));
    }
}
