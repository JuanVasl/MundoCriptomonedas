@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mr-9">
                <div class="card-header text-center">

                    <!--imagen de usuario-->
                    <img src="https://cdn-icons-png.flaticon.com/512/6073/6073873.png" class="img-fluid mt-4" style="height:100px; width:100px">
                    <p class="fw-bold fs-4">Recuperar Constraseña</p> <!--Que registro es-->
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label><!--Email-->

                            <!--columna de email-->
                            <div class="col-md-11 ms-3">
                                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 form-group">
                            <!--boton de restablecer contraseña-->
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary mb-2">
                                    Restablecer contraseña
                                </button>
                                <br><!--boton de regresar-->
                                <a class="btn btn-outline-secondary text-dark col-md-11" href="{{url('/')}}" role="button">
                                    <i class="fas fa-arrow-circle-left"> Regresar</i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
