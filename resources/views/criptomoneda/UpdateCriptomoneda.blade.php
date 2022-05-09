@extends('layouts.app')


@section('content')
    <div class="container">
        <div class=" row justify-content-center">
            <div class="col-md-7 mt-5 ml-5">

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

                <div class="card">
                    <form action="{{ route('actualizarCripto', $criptoCoin->codigo_cripto) }}" method="POST">
                        @csrf
                        @method("PATCH")

                        <div class=" card-header text-center" style="background-color: #79dae8">
                            <h2 style="color: #2155cd"><i class="fas fa-user-edit"></i> Modificar Criptomonedas</h2>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text mb-2" id="basic-addon1">Codigo Criptomoneda</span>
                                    </div>
                                    <input type="text" class="form-control"
                                           value="{{old('codigo_cripto',$criptoCoin->codigo_cripto )}}" readonly
                                           placeholder="Numero de Moneda Cripto" name="codigo_cripto">
                                </div>


                                <div class="col-lg">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text mb-2" id="basic-addon1">Nombre Criptomoneda</span>
                                    </div>
                                    <input type="text" name="nombre_cripto" class="form-control"
                                           value="{{old('nombre_cripto', $criptoCoin->nombre_cripto)}}"
                                           placeholder="Nombre de la Moneda Cripto">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text mb-2" id="basic-addon1">Descripcion Criptomoneda</span>
                                    </div>
                                    <input type="text" name="descripcion_cripto" class="form-control"
                                           value="{{old('descripcion_cripto', $criptoCoin->descripcion_cripto)}}" placeholder="Descripcion">
                                </div>
                                <div class="col-lg">
                                     <div class="input-group-prepend">
                                            <span class="input-group-text mb-2" id="basic-addon1">Precio Criptomoneda</span>
                                    </div>
                                    <input type="text" name="precio_cripto" class="form-control"
                                           value="{{old('precio_cripto', $criptoCoin->precio_cripto)}}" placeholder="Pais ">
                                </div>
                            </div>

                            <div class="row form-group mt-3">
                                    <button id="guardado" type="submit"
                                            class="btn btn-outline-success col-md-4 offset-2 mr-3"><i
                                            class="fas fa-save"></i> Modificar Cripto
                                    </button>
                                    <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/listar') }}"><i
                                            class="fas fa-ban"></i> Cancelar</a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection

