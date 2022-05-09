@extends("criptomoneda.basic_template")

@section("content")
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center font-weight-bold mb-3"> Criptomonedas registradas </h2>
                <a class="btn btn-success font-weight-bold mb-2" href="{{url('/registrar') }}"> Registrar criptomonedas </a>

                <!--Mensaje de Alerta-->
                @if(session('criptomonedaDestroy'))
                    <div class="alert alert-danger">
                        {{session('criptomonedaEliminada')}}
                    </div>
                @endif

    <h3>Lista de Criptomonedas</h3>
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
            @foreach($criptoCoin as $customer)
                <tr>
                    <td>{{$customer->codigo_cripto}}</td>
                    <td>{{$customer->nombre_cripto}}</td>
                    <td>{{$customer->descripcion_cripto}}</td>
                    <td>{{$customer->precio_cripto}}</td>
                    <td >

                        <div class="btn-group">
                            <a class="btn btn-primary mb-2 mr-3">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <form action="{{route('deletecripto', $customer->codigo_cripto)}}" method="POST">
                                @csrf @method('DELETE')

                                <button type="submit" onclick="return confirm('¿Desea eliminar la criptomoneda?');" class="btn btn-outline-danger mb-2 mr-2">
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

@endsection
