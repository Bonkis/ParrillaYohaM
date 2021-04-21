<?php

namespace App\Http\Controllers;

use App\Models\ProductoP;
use Illuminate\Http\Request;

class ProductoPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productosP = ProductoP::all();
        return view('ProductosP.index', compact('productosP'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ProductosP.create');
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
  $productoP = ProductoP::create($request->all());
    return redirect()->route('ProductosPEditar',$productoP);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductoP  $productoP
     * @return \Illuminate\Http\Response
     */
    public function show(ProductoP $productoP)
    {
        return view('ProductosP.index', compact('productoP'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductoP  $productoP
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productoP = ProductoP::find($id);
        return view('ProductosP/edit',compact('productoP'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductoP  $productoP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductoP $productoP)
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
     * @param  \App\Models\ProductoP  $productoP
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductoP $productoP)
    {
        $productoP->delete();
        return redirect()->route('ProductoPlistar');
    }
}
