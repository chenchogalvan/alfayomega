<?php

namespace App\Http\Controllers;

use App\Catalogo;
use App\Proveedor;
use Illuminate\Http\Request;

class CatalogoController extends Controller
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
            'proveedor_id'  => 'required',
            'title' => 'required|unique:catalogos',
            'url' => 'required'
        ]);

        $proveedor = Proveedor::where('id', $request->get('proveedor_id'))->first();

        $catalogo = Catalogo::create($request->all());
        $catalogo->url = $request->file('url')->store('public/catalogo/'.$proveedor->name);
        $catalogo->save();

        return redirect()->back()->with('success', " ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogo $catalogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalogo $catalogo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogo $catalogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalogo $catalogo)
    {
        //
    }
}
