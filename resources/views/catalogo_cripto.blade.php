@extends("layouts.app")

@section('title', 'Criptomoneda')

@section("content")
<div id="container-form">

<div class="card">
  <div class="card-body">
  <div class="card-header" id="header-form">
    Formulario Criptomoneda
    </div>
         <form action="{{route('cripto.create')}}" method="POST" class="p-3 bg-white mb-3">
        @csrf
        <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Codigo de criptomoneda</span>
                    </div>
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="codigo_cripto" id="codigo_cripto" value="{{old('codigo_cripto')}}">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nombre de criptomoneda</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="nombre_cripto" id="nombre_cripto" value="{{old('nombre_cripto')}}">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Descripcion</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="descripcion_cripto" id="descripcion_cripto" value="{{old('descripcion_cripto')}}">
                    </div>

                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Precio</span>
                    </div>
                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="precio_cripto" id="precio_cripto" value="{{old('precio_cripto')}}">
                    <div class="input-group-append">

                    </div>
                    <button class="btn btn-primary" type="submit">Guardar</button>

                </div>
            </div>
        </form>
    </div>


</div>

@endsection
