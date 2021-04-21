@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Productos que hacen parte de la categoría Pollo azado</h1>

@stop
@method("POST")
@section('content')
  <div class="card">
      <div class="card-header">
          <a class="btn btn-danger btn-sm " href="{{route('ProductosPFCrear')}}">Agregar Categoría</a>
      </div>
        <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Descripción</th>
                            <th colspan="2"></th>

                        </tr>


                    </thead>
                    <tbody>
                        @foreach($productosP as $productoP)
                            <tr>
                                <td>{{$productoP->id}}</td>
                                <td>{{$productoP->name}}</td>
                                <td>{{$productoP->precio}}</td>
                                <td>{{$productoP->estado}}</td>
                                <td>{{$productoP->Descripcion}}</td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm" href="{{route('ProductosPEditar', $productoP)}}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('ProductosPEliminar', $productoP)}}" method="POST">

                                    @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

        </div>


  </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
