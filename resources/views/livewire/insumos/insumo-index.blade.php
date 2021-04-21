<div>

    <div class="card">

        <div class="card-header">
            <input wire:model="search" ire:model="search" class="form-control" placeholder="ingrese nombre del insumo">
        </div>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Medida</th>
                    <th>Stock_Minimo</th>

                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($insumos as $insumo)

                    <tr>
                        <td>{{$insumo->id}}</td>
                        <td>{{$insumo->nombre}}</td>
                        <td>{{$insumo->medida}}</td>
                        <td>{{$insumo->stock_minimo}}</td>


                        <td>
                            <form action="{{route('insumoEliminar', $insumo->id)}}" method="post">
                                @csrf @method('DELETE')

                                <button type="submit" class="btn btn-danger" style="border: none"><i class="fas fa-trash-alt fa-lg"></i>Eliminar</button>
                                <a href="{{route('insumoEditar', $insumo ->id)}}"><i class="fas fa-user-edit fa-lg" ></i></a>
                                <a href="{{route('FormularioEntrada', $insumo ->id)}}"><i class="fas fa-plus-square"></i></a>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Entrada" data-whatever="@fat"><i class="fas fa-list"></i>  Listado de entradas</button>
                                @endforeach

        <div class="card-footer">



            {{$insumos -> links()}}
        </div>

    </div>


</div>
