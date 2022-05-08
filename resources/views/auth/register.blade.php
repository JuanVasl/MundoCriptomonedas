@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-center">
                    <!--imagen de registro-->
                    <img src="https://cdn-icons-png.flaticon.com/512/6073/6073874.png" class="img-fluid mt-4" style="height:175px; width:175px" alt="">

                    <p class="fw-bold fs-4">Registrarse</p> <!--aparece abajo de iamgen-->
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-1">
                            <label for="name" class="col-md-4 col-form-label text-md-end"></label><!--nombre-->

                            <!--columna de nombre-->
                            <div class="col-md-11 ms-3">
                                <input placeholder="Nombre" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label> <!--email-->

                            <!--columna de email-->
                            <div class="col-md-11 ms-3">
                                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="password" class="col-md-4 col-form-label text-md-end"></label><!--contraseña-->

                            <!--columna contraseña-->
                            <div class="col-md-11 ms-3">
                                <input placeholder="Contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--columna de confirmar contraseña-->
                        <div class="row mb-1">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"></label> <!--confirmar contraseña-->

                            <div class="col-md-11 ms-3 mb-2">
                                <input placeholder="Confirmar Contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0 form-group text-center">

                            <div class="col-md-12 offset">
                                <button type="submit" class="btn btn-primary col-md-6 mb-2">
                                    <i class="fas fa-user-plus"> Registrarse</i>
                                </button>
                                <br><!--boton de regresar-->
                                <a class="btn btn-outline-secondary text-dark col-md-6" href="{{url('/')}}" role="button">
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
