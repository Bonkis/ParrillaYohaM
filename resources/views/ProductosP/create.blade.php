@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Crear ProductosP</h1>

@stop
@method("POST")
@section('content')
    @if(session('mensaje'))

    @endif
    <div class="card">

            <div class="card-body">


                    {!! Form::open(['route' => 'ProductosPCrear']) !!}

                        <div class="form-group">
                            {!! Form::label('name','Nombre del producto') !!}
                            {!! Form::text('name',null,['class'=> 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('precio','Precio del producto') !!}
                            {!! Form::text('precio',null,['class'=> 'form-control', 'placeholder' => 'Ingrese el precio del producto']) !!}
                            @error('precio')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        </div>
                        <div class="form-group">
                            {!! Form::label('estado','Estado del producto') !!}
                            {!! Form::text('estado',null,['class'=> 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
                            @error('estado')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('Descripcion','Descripción del producto') !!}
                            {!! Form::text('Descripcion',null,['class'=> 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
                            @error('Descripcion')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                            {!! Form::submit('Crear Producto', ['class'=> 'btn btn-danger -btn-sm']) !!}
                    {!! Form::close() !!}
            </div>

    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
