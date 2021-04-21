<?php

namespace App\Http\Controllers;

use App\Models\ProductoP;
use App\Models\ProductosC;
use Illuminate\Http\Request;

class ProductoCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productosC = ProductosC::all();
        return view('ProductosC.index', compact('productosC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ProductosC.create');
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
        'name'=>'required' ,
        'precio'=>'required',
        'estado'=>'required',
        'Descripcion'=>'required'
    ]);
  $productoC = ProductosC::create($request->all());
    return redirect()->route('ProductosCEditar',$productoC);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductosC  $productoC
     * @return \Illuminate\Http\Response
     */
    public function show(ProductosC $productoC)
    {
        return view('ProductosP.index', compact('productoC'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductosC  $productoC
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductoC $productoC)
    {
        return view('ProductosP.edit',compact('productoC'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductosC  $productoC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductosC $productoC)
    {
        $request->validate([
            'name'=>'required' ,
            'precio'=>'required',
            'estado'=>'required',
            'Descripcion'=>'required'
        ]);
        $productoP->update($request->all());
        return redirect()->route('ProductosPEditar',$productoP);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductosC  $productoC
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductosC  $productoC)
    {
        $productoP->delete();
        return redirect()->route('ProductoPlistar');
    }
}
