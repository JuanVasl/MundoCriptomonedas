@extends('layouts.app')


@section('title', 'Vista')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ml-5">
                <h2 class="text-center mt-5" style="color: #2155cd"><i class="fas fa-list-alt" style="color: #2155cd"></i>  Catalogo de Clientes</h2>


                <a class="btn btn-outline-warning mb-3"href="{{url('/Create/Cliente')}}">
                    <i class="fas fa-user-plus"> Agregar Cliente</i>
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
                            <td>
                                <div class="btn-group">

                                    <a href="{{route('edit', $clientes->id_cliente)}}">
                                        <i class="fas fa-pencil-alt btn btn-outline-warning mb-2 mr-2"> Actualizar</i>
                                    </a>

                                    <form action="{{route('delete', $clientes->id_cliente)}}" method="POST">
                                    @csrf @method('DELETE')

                                        <button type="submit" onclick="return confirm('¿Desea eliminar al cliente?');" class="btn btn-outline-danger mb-2 mr-2">
                                           <i class="far fa-trash-alt"> Eliminar</i> 
                                        </button>
                                    </form>
                                </div>
                            </td>


                        </tr>
                    @endforeach

                    </tbody>

                </table>


            </div>
        </div>
    </div>
@endsection
