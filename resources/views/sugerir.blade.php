@extends('layouts.plantilla')
@section('title',"Sugerir Preguntas")
@section('titulo')
    <h1>Envianos las preguntas que te gustaria que agregemos!</h1>
@endsection
@section('main')
<div style="margin-left: 34%">
        <form method="post">
          {{csrf_field()}}
          <section class="categorias">
            <select style="margin:20px" class="titulo" name="">
                <option selected="selected">--Categoría--</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
            </select>
            <article class="categoria">
            <small>(*) campo obligatorio</small>
            <input style="margin: 10px; margin-left:13%" type="text" name="" placeholder="La Pregunta" value="" required>*
            <input style="margin: 10px; margin-left:13%" type="text" name="" placeholder="La Respuesta Correcta!" value="" required>*
            <input style="margin: 10px; margin-left:13%" type="text" name="" placeholder="Alguna opcion" value="">
            <input style="margin: 10px; margin-left:13%" type="text" name="" placeholder="Alguna opcion" value="">
            <input style="margin: 10px; margin-left:13%" type="text" name="" placeholder="Alguna opcion" value="">
          </article>
          <article class="boton">
            <input class="btn btn-outline-dark" style="width:80px;" type="submit" name="" value="Enviar!">
            </section>
          </article>


        </form>
</div>
@endsection
