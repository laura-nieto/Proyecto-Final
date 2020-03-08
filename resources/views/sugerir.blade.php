@extends('layouts.plantilla')
@section('title',"Sugerir Preguntas")
@section('titulo')
    <h2>Envianos las preguntas que te gustaria que agregemos!</h2>
@endsection
@section('main')
    <section class="subquest">
        <form class="" action="profile.php" method="post">
            <select class="" name="">
                <option selected="selected">--Categoría--</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option> 
                @endforeach
            </select>
            <textarea name="question" rows="8" cols="60" placeholder="Ingrese su Pregunta y debajo las opciones posibles."></textarea>
            <button type="submit"formaction="index.php">Enviar!</button>
        </form>
    </section>
@endsection