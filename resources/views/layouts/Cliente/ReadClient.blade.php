@extends('layouts.app')


@section('title', 'Vista')
@section('content')
    <div class="container ml-5">
        <div class="row justify-content-center">
            <div class="col-md-10 ml-5">
                <h2 class="text-center mt-5"> Catalogo de Clientes</h2>


                <a class="btn btn-success mb-4" href="{{url('/Create/Cliente')}}">
                    <i class="fas fa-user-plus"> AGREGAR</i>
                </a>

                <br>
                <table class="table table-light table-bordered table-hover text-center">
                    <thead>
                    <tr>
                        <th>No.Pasaporte</th>
                        <th>Nombre del Cliente</th>
                        <th>Telefono</th>
                        <th>Pais</th>
                        <th>Edad</th>
                        <th>Fotografia</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($cliente as $clientes)
                        <tr>
                            <td>{{$clientes->id_cliente}}</td>
                            <td>{{$clientes->nombre_persona}}</td>
                            <td>{{$clientes->telefono}}</td>
                            <td>{{$clientes->pais}}</td>
                            <td>{{$clientes->edad}}</td>
                            <td>{{$clientes->fotografia}}</td>


                        </tr>
                    @endforeach

                    </tbody>

                </table>


            </div>
        </div>
    </div>
@endsection
