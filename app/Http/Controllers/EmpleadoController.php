<?php

namespace App\Http\Controllers;


use App\Models\Empleado\Cargo;
use App\Models\Empleado\Empleado;
use Illuminate\Http\Request;


class EmpleadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:empleadoIndex')->only('Listar');
        $this->middleware('can:empleadoEliminar')->only('eliminar');
        $this->middleware('can:empleadocrear')->only('crear');
        $this->middleware('can:empleadoFormulario')->only('formulario');
        $this->middleware('can:empleadoEditar')->only('formularioEditar');
        $this->middleware('can:empleadoActualizar')->only('actualizar');

    }
    public function Listar(){
        $titulo = "CrudEmpleados";
        $empleados = empleado::orderBy('id','DESC')->paginate();
        $cargos = Cargo::all();
        return view('empleados.Listar', compact('titulo','empleados','cargos'));
    }
    public function eliminar(Empleado $empleado){
        $empleado->delete();
        return redirect('empleados/Listar')->with('mensaje','empleado eliminado');
    }
    public function crear(){
        $campos=request()->validate([
            'nombre'=>'required|min:3',
            'edad'=>'required',
            'direccion' => 'required',
            'email'=>'required|email',
            'idCargo'=>'required',
        ]);
        Empleado::create($campos);
        return redirect('empleados/Listar')->with('mensaje','Empleado guardado');
    }
    public function formulario(){
        $cargos = Cargo::all();
        return view('empleados/crear', compact('cargos') );
    }

    public function formularioEditar($id){
        $empleado = Empleado::find($id);
        $cargos = Cargo::all();
        return view('empleados/editar', compact('cargos','empleado') );
    }

    public function actualizar(Empleado $empleado){
        $campos=request()->validate([
            'nombre'=>'required|min:3',
            'edad'=>'required',
            'direccion' => 'required',
            'email'=>'required|email',
            'idCargo'=>'required',
        ]);
        $empleado->update($campos);
        return redirect('empleados/Listar')->with('mensaje', 'Empleado actualizado');
    }
}
