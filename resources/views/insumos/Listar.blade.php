@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Insumos</h1>

@stop
@method("POST")
@section('content')
    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
    @livewire('insumos.insumo-index')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
