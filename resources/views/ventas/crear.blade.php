@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Ventas</h1>
@stop

@section('content')


    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> Parrilla Yoha
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Lugar
                                <address>
                                    <strong>Parrilla Yoha</strong><br><br>
                                    Copacabana, barrio manchada<br>
                                    Phone: 3085562<br>
                                    Email: parrillayoha@gmail.com
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <address>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombre</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cedula</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Direccion">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telefono</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Numero">
                                    </div>
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <br>
                                <b>Orden ID:</b> 4F3S8J<br>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">


                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Precio</th>
                                                <th>cantidad</th>
                                                <th>Descripcion</th>
                                                <th>Subtotal</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>salchipapas</td>
                                                <td>$25.99</td>
                                                <td>4</td>
                                                <td>salchipapas con jugo</td>
                                                <td>$64.50</td>
                                            </tr>
                                            <tr>
                                                <td>picada</td>
                                                <td>$25.99</td>
                                                <td>2</td>
                                                <td>picada con gaseosa</td>
                                                <td>$50.00</td>
                                            </tr>
                                            <tr>
                                                <td>carnes</td>
                                                <td>$25.99</td>
                                                <td>1</td>
                                                <td>carne de cerdo con arepa y papas </td>
                                                <td>$10.70</td>
                                            </tr>
                                            <tr>
                                                <td>chuzo</td>
                                                <td>$25.99</td>
                                                <td>2</td>
                                                <td>Chuzo de pollo con papas</td>
                                                <td>$25.99</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <!-- /.row -->

                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-12">
                                        <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                        <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Realizar venta
                                        </button>
                                        <button type="button" class="btn btn-warning float-right" style="margin-right: 5px;">
                                            <i class="fas fa-plus-square"></i> Agregar Producto
                                        </button>
                                        <button type="button" class="btn btn-danger float-right" style="margin-right: 5px;">
                                            <i class="fas fa-download"></i> Generate PDF
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- /.invoice -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer no-print">
    </footer>
    </div>
    </div>
    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
