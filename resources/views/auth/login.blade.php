@extends('layouts.plantilla')

@section('main')
    <div>
        <section class="categorias">
                <article class="titulo">
                        <h2>Ingresar</h2>
                </article>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <article class="categoria">
                   
                    <label for="email">{{ __('Direccion de Mail Registrada') }}</label>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus>
                        
                    <label for="password">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('email')
                        <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{__('Email o contraseña inválidos')}}</small> 
                    @enderror
                    <div class="alLado">
                        <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Recordarme') }}
                        </label>
                    </div>
                    <article class="boton">
                            <button type="submit" class="btn">
                                {{ __('Ingresar') }}
                            </button>
                        </article>
                </article>
                
                
                <article class="categorias">
                        <label for=""><a href="regis.php">Crear una cuenta</a></label>
                        @if (Route::has('password.request'))
                        <label for="" style=margin-bottom:12px><a class="" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a></label>
                        @endif
                </article>
            </form>
        </section>
    </div>
@endsection
