@extends("layouts.app")

@section('title', 'Criptomoneda')
@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ml-5">
                <h2 class="text-center mt-5" style="color: #2155cd"><i class="fas fa-coins"></i>  Catalogo de Criptomonedas</h2>


                <a class="btn btn-outline-warning mb-3"href="{{url('/registrar')}}">
                    <i class="fab fa-btc"> Agregar Criptomoneda</i>
                </a>

                <br>
                <table class="table table-light table-bordered table-hover text-center">
                    <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Fotografia</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($criptoCoin as $customer)
                        <tr>
                            <td>{{$customer->codigo_cripto}}</td>
                            <td>{{$customer->nombre_cripto}}</td>
                            <td>{{$customer->descripcion_cripto}}</td>
                            <td>{{$customer->precio_cripto}}</td>
                            <td>{{$customer->fotografia}}</td>
                            <td >
                            <a href="{{route('editar', $customer->codigo_cripto)}}">
                                        <i class="fas fa-pencil-alt btn btn-outline-warning mb-2 mr-2"> Actualizar</i>
                                    </a>
                                <a href="#">
                                    <i class="far fa-trash-alt btn btn-outline-danger mb-2 mr-2"> Eliminar</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>


            </div>
        </div>
    </div>
@endsection
