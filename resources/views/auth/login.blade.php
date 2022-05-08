@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">

                <div class="card-header text-center">
                    <!--imagen de usuario-->
                    <img src="https://cdn-icons-png.flaticon.com/512/6073/6073873.png" class="img-fluid mt-4" style="height:175px; width:175px">
                    <p class="fw-bold fs-4">Usuario</p> <!--Que registro es-->
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label><!--Email-->

                            <!--celda de email-->
                            <div class="col-md-11 ms-3">
                                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3"><!--Contraseña"-->
                            <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                            <!--celda de contraseña-->
                            <div class="col-md-11 ms-3">
                                <input placeholder="Contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-11 offset-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <!--Para recordar contraseña-->
                                    <label class="form-check-label" for="remember">
                                        Recordar
                                    </label>

                                    <!--Redireccionar por si se te olvido la contarseña-->
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvido su contraseña?</a>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <!--Booton para ingresar-->
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-user-check"> Iniciar sesion</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
