@extends("layouts.app")

@section("content")

<div class="p-3 bg-white mb-3 mt-5">

    <h3>Lista de criptomonedas</h3>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($cliente as $customer)
                <tr>
                    <td>{{$customer->codigo_cripto}}</td>
                    <td>{{$customer->nombre_cripto}}</td>
                    <td>{{$customer->descripcion_cripto}}</td>
                    <td>{{$customer->precio_cripto}}</td>
                    <td >
                        <a href="#" class="btn btn-warning">
                           Editar
                        </a>
                    </td>
                    <td >
                        <a href="#" class="btn btn-danger">
                           Eliminar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">

    </div>
</div>

@endsection