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
                                            
                                    </div>
                                    <input type="text" class="form-control"
                                           value="{{old('codigo_cripto',$criptoCoin->codigo_cripto )}}" readonly
                                           placeholder="Numero de Moneda Cripto" name="codigo_cripto">
                                </div>


                                <div class="col-lg">
                                    <div class="input-group-prepend">
                                           
                                    </div>
                                    <input type="text" name="nombre_cripto" class="form-control"
                                           value="{{old('nombre_cripto', $criptoCoin->nombre_cripto)}}"
                                           placeholder="Nombre de la Moneda Cripto">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg">
                                    <div class="input-group-prepend">
                                       
                                    </div>
                                    <input type="text" name="descripcion_cripto" class="form-control"
                                           value="{{old('descripcion_cripto', $criptoCoin->descripcion_cripto)}}" placeholder="Descripcion">
                                </div>
                                <div class="col-lg">
                                     <div class="input-group-prepend">
                                        
                                    </div>
                                    <input type="text" name="precio_cripto" class="form-control"
                                           value="{{old('precio_cripto', $criptoCoin->precio_cripto)}}" placeholder="Pais ">
                                </div>
                            </div>

                            <div class="row form-group mt-3">
                                    <button id="guardado" type="submit"
                                            class="btn btn-outline-success col-md-4 offset-2 mr-3" onclick="modCripto()"><i
                                            class="fas fa-save"></i> Modificar
                                    </button>

                                    <script>
                                function modCripto() {
                                Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Se actualizado la criptomoneda',
                                showConfirmButton: true,
                                timer: 15000
                                })
                                }
                                </script>


                                    <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/listar') }}"><i
                                            class="fas fa-ban"></i> Cancelar</a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection

@section('js')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('eliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El producto se elimino con exito.',
                'success'
            )
        </script>
    @endif

    <script>
        function deleteAlert(e){
            e.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "El producto se eliminara",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ffc298',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    /*Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )*/
                    $('#formulario-eliminar').submit();

                }
            })
        }

    </script>
@endsection
