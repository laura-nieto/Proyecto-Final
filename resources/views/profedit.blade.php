@extends('layouts.plantilla')
@section('title',"Perfil")
@section('main')
<div class="agreg">
  <section class="edit">
    {{-- <article class="pic">
      <form method="post" enctype="multipart/form-data">
        @csrf
        <img src="img/uppic.png" width="200px" height="200px;">
        <input type="file" name="avatar">
      </form> 
      </article> --}}
    <article class="info">
      <form method="post" enctype="multipart/form-data">
        @csrf
          <img src="/img/avatar/{{Auth::user()->avatar}}" width="200px" height="200px;">
          <input type="file" name="avatar">
          <label for="nickPublico"> Tu Nick Público:</label>
          <input type="text" name="name" value="{{Auth::user()->name}}">
          @error('name')
            <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small>
          @enderror
          @error('avatar')
            <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small>
          @enderror
          {{-- <label for="edad">Fecha de Nacimiento:</label>
          <input type="date" name="date" value=""> --}}
          {{-- <label for="pais">Pais:</label> --}}
          {{-- <select class="paises" name="pais" id="pais">
            <option value="">--Seleccione--</option>
            <option value="Chile">Chile</option>
            <option value="Argentina">Argentina</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Bolivia">Bolivia</option>
          </select> --}}
          <br>
          <input type="submit" name="" value="Guardar cambios">
          <a href='/perfil'>Volver</a>
      </form>
    </article>
  </section>
  </div>
@endsection
