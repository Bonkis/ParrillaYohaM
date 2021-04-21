<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:vistaCrearVenta')->only('ventaCrearVista');
    }
    public function ventaCrearVista(){

        return view('ventas/crear' );
    }
    public function Index(){

        return view('ventas/Listar' );
    }

}
