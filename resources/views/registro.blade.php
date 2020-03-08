@extends('layouts.plantilla')
@section('title','Crear cuenta')
@section('main')
    <div>
        <section class="categorias">
                <article class="titulo">
                    <h2>Registro</h2>
                </article>
                <form method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <article class="categoria"><!--Aca empieza el formulario-->
                        <label for="usr">Nombre De Usuario</label>
                        <input id="usr"type="text" placeholder="Ingrese su usuario" name="usuario" value="{{ old('usuario') }}">
                        @error('usuario')
                          <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small>
                        @enderror
                        <label for="email">Email</label>
                        <input id="email" type="email" placeholder="Ingrese su email" name="email" value="{{ old('email') }}">
                        @error('email')
                          <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small>
                        @enderror
                        <label for="pass">Contraseña</label>
                        <input id="pass"type="password"placeholder="Ingrese su contraseña" name="contraseña">
                        @error('contraseña')
                          <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small>
                        @enderror
                        <label for="passConf">Confirmar contraseña</label>
                        <input id="passConf"type="password"placeholder="Confirma la contraseña" name="confirmar">
                        @error('confirmar')
                          <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small>
                        @enderror
                        <!-- <input type="file" name="avatar" id="avatar">-->
                        <div class="alLado">
                            <input type="checkbox" name="recordar" id="recordar">
                            <label for="recordar">Recordarme</label>
                        </div>
                        <label for=""><a href="/login">¿Ya tenes una cuenta?</a></label>
                    </article>
                    <article class="boton">
                        <button type="submit" class="btn">Crear Cuenta</button>
                    </article>
                </form>
        </section>
    </div>
@endsection