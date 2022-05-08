@extends('layouts.app')

@section('title', 'Actualizar')

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
                    <form action="{{ route('actualizar',$cliente->id_cliente) }}" method="POST">
                        @csrf
                        @method("PATCH")

                        <div class=" card-header text-center" style="background-color: #79dae8">
                            <h2 style="color: #2155cd"><i class="fas fa-user-edit"></i> Modificar Cliente</h2>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg">
                                    <input type="text" class="form-control"
                                           value="{{old('id_cliente',$cliente->id_cliente )}}" readonly
                                           placeholder="Numero de pasaporte" name="id_cliente">
                                </div>


                                <div class="col-lg">
                                    <input type="text" name="nombre_persona" class="form-control"
                                           value="{{old('nombre_persona', $cliente->nombre_persona)}}"
                                           placeholder="Nombre del cliente">
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-lg">
                                    <input type="text" name="telefono" class="form-control"
                                           value="{{old('telefono', $cliente->telefono)}}" placeholder="Telefono">
                                </div>
                                <div class="col-lg">
                                    <input type="text" name="pais" class="form-control"
                                           value="{{old('pais', $cliente->pais)}}" placeholder="Pais ">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg">
                                    <label for="" class="col-2"></label>
                                    <input type="text" name="edad" class="form-control"
                                           value="{{old('edad', $cliente->edad)}}" placeholder="Edad ">
                                </div>
                            </div>
                                <br>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                    <label class="custom-file-label" for="customFileLang">Subir fotografia</label>
                                </div>
                                <br>
                                <br>
                                <div class="row form-group">
                                    <button id="guardado" type="submit"
                                            class="btn btn-outline-success col-md-4 offset-2 mr-3"><i
                                            class="fas fa-save"></i> Modificar Cliente
                                    </button>
                                    <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/home') }}"><i
                                            class="fas fa-ban"></i> Cancelar</a>
                                </div>

                                <br>
                            </div>
                    </form>
                </div>
            </div>
@endsection


