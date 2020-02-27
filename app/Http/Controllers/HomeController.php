<?php

namespace App\Http\Controllers;

use App\Product;
use App\Proveedor;
use App\Service;
use App\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
        $proveedores = Proveedor::all()->count();
        $productos = Product::all()->count();
        $servicios = Service::all()->count();
        return view('nebula.dashboard', compact(['proveedores', 'productos', 'servicios']));

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

    public function agregarServicios()
    {
        $productos = Service::where('show', 'yes')->get();
        $proveedores = Proveedor::where('show', 'yes')->get();
        return view ('nebula.servicios', compact(['productos', 'proveedores']));
    }


    public function agregarGaleria()
    {
        $proveedores = Proveedor::where('show', 'yes')->get();
        return view('nebula.galeria', compact('proveedores'));
    }

    public function editarGaleria($id)
    {
        $proveedor = Proveedor::find($id);
        $galeria = Galeria::where('proveedor_id', $proveedor->id)->get();
        return view('nebula.galeriaEditar', compact(['proveedor', 'galeria']));

    }

    public function agregarCAtalogos()
    {
        $proveedores = Proveedor::where('show', 'yes')->get();
        return view('nebula.catalogos', compact('proveedores'));
    }

    public function verGaleria()
    {
        $proveedor = Proveedor::all();

        return view('nebula.galeriaVer', compact('proveedor'));
    }

    public function eliminarGaleria(Request $request)
    {
        $g = Galeria::where('id', $request->id)->first();
        Storage::delete($g->img);
        $g->delete();
        return redirect()->back()->with('flash', '');
    }
}
