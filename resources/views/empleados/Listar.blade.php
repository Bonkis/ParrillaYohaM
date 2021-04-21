 @extends('adminlte::page')

@section('title', 'CrudEmpleados')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@method("POST")
@section('content')
    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($empleados as $empleado)
                <tr>
                    <th scope="row">{{{$empleado->id}}}</th>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->email}}</td>
                    <td>{{$empleado->cargoEmpleado->nombre}}</td>
                    <td>

                        <form action="{{route('empleadoEliminar', $empleado->id)}}" method="post">

                            <a href=""><i class="fas fa-info-circle fa-lg text-success"></i></a>

                            @can('empleadoFormulario')
                            <a href="{{route('empleadoEditar', $empleado )}}"><i class="fas fa-user-edit fa-lg" ></i></a>
                            @endcan
                            @csrf @method('DELETE')
                            @can('empleadoEliminar')
                            <button type="submit" style="border: none"><i class="fas fa-trash-alt fa-lg text-danger"></i></button>
                            @endcan
                        </form>

                    </td>
                </tr>
            @empty
                no hay empleado
            @endforelse
            </tbody>
        </table>

    </div>

    <div class="d-flex justify-content-center">
        {{$empleados->Links()}}
    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
