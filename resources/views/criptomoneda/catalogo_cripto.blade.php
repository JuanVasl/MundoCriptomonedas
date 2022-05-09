@extends("layouts.app")

@section('title', 'Criptomoneda')

@section("content")
<div id="container-form" class="">

<div class="card">

    <form action="{{route('cripto.create')}}" method="POST" class="p-3 bg-white mb-3">
    @csrf

    <div class=" card-header text-center" style="background-color: #79dae8">
        <h2 style="color: #2155cd"><i class="fab fa-btc"></i> Registrar Criptomoneda</h2>
    </div>
 
        <div class="card-body">

                    <div class="row">
                        <div class="col-lg">
                            <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1"  placeholder="Codigo de criptomoneda" name="codigo_cripto" id="codigo_cripto" value="{{old('codigo_cripto')}}">
                        </div>

                        <div class="col-lg">
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Nombre de criptomoneda" name="nombre_cripto" id="nombre_cripto" value="{{old('nombre_cripto')}}">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg">
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Descripcion de criptomoneda" name="descripcion_cripto" id="descripcion_cripto" value="{{old('descripcion_cripto')}}">
                        </div>
                        <div class="col-lg">
                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Precio de criptomoneda" name="precio_cripto" id="precio_cripto" value="{{old('precio_cripto')}}">
                        </div>
                    </div>
                    <br>
                    <div class="row form-group">
                    <button type="submit" class="btn btn-outline-success col-md-4 offset-2 mr-3" onclick="guardarCripto()"><i
                                        class="fas fa-save" id="guardar_cripto"> </i>Guardar</button>
                                   

                        <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/home') }}"><i
                        class="fas fa-ban" ></i> Cancelar</a>
                        </div>
                </div>
        </form>
    </div>
    
</div>

@endsection
