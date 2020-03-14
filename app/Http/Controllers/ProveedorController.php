<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'name'  => 'required|unique:proveedors',
                'imgLogo'   => 'required',
                'imgPortada'    => 'required',
                'shortDesc' => 'required|max:60',
                'longDesc'  => 'required',
        ]);

        $proveedor = Proveedor::create($request->all());
        $proveedor->imgLogo = $request->file('imgLogo')->store('public/logosProveedores');
        $proveedor->imgPortada = $request->file('imgPortada')->store('public/portadaProveedores');
        $proveedor->save();


        return redirect()->back()->with('success', " ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        return $proveedor;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedor::find($id);
        return view('nebula.proveedorEdit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::find($id);

        $request->validate([
            'name'  => 'required|unique:proveedors,url,'.$proveedor->id,
            'shortDesc' => 'required|max:60',
            'longDesc'  => 'required',
        ]);

        $proveedor->name = $request->get('name');
        $proveedor->shortDesc = $request->get('shortDesc');
        $proveedor->longDesc = $request->get('longDesc');

        if ($request->hasFile('imgLogo')) {
            $proveedor->imgLogo = $request->file('imgLogo')->store('public/logosProveedores');
        }

        if ($request->hasFile('imgPortada')) {
            $proveedor->imgPortada = $request->file('imgPortada')->store('public/portadaProveedores');
        }

        $proveedor->save();


        return redirect()->back()->with('success', " ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        //
    }
}
