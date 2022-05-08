@extends('layouts.app')

@section('title', 'Cliente')

@section('content')
    <div class="container ml-2" >
        <div class=" row justify-content-center" >
            <div class="col-md-7 mt-5 ml-5" >

                <!-- Mensaje Flash -->
                @if(session('Guardado'))
                    <div class="alert alert-success">
                        {{ session('Guardado') }}
                    </div>
                @endif
            <!-- Validacion de Errores -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card" >
                    <form action="{{ route('save') }}" method="POST" >
                        @csrf
                        {{csrf_field()}}

                        <div class=" card-header text-center" style="background-color: #79dae8" >
                            <h2 style="color: #2155cd"><i class="far fa-user"></i> Registrar Cliente</h2>
                        </div>

                        <div class="card-body"  >

                                <div class="row">
                                <div class="col" >
                                    <input type="text" class="form-control" value="{{old('id_cliente')}}" placeholder="Numero de pasaporte" name="id_cliente">
                                </div>
                                <div class="col">
                                    <input type="text" name="nombre_persona" class="form-control col-md-9"  value="{{old('nombre_persona')}}" placeholder="Nombre del cliente">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="telefono" class="form-control col-md-9" value="{{old('telefono')}}"  placeholder="Telefono">
                                </div>
                                <div class="col">
                                    <input type="text" name="pais" class="form-control col-md-9" value="{{old('pais')}}"  placeholder="Pais ">
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="col-2"></label>
                                <input type="text" name="edad" class="form-control col-md-9" value="{{old('edad')}}"  placeholder="Edad ">
                            </div>
                            <div class="row ">

                                <div class="text-center">
                                    <label for="" class="col-3">Subir Fotografia:</label> <br>
                                    <input placeholder="Subir Fotografia" name="foto"value="{{old('foto')}}" type="file" class="form-control" id="exampleInputPassword1" maxlengt="25"  >
                                </div>
                            </div>
                            <br>
                            <div class="row form-group">
                                <button id="guardado" type="submit"  class="btn btn-outline-success col-md-4 offset-2 mr-3" ><i class="fas fa-save"></i> Guardar Cliente</button>
                                <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/') }}"><i class="fas fa-ban"></i> Cancelar</a>
                            </div>

                            <br>
                        </div>
                    </form>
                </div>
            </div>
@endsection




