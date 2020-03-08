@extends('layouts.plantilla')
@section('title',"¡A responder!")
@section('titulo')
    <h1>{{$categoria->nombre}}</h1>
    <img class="img"src="\img\{{$categoria->imagen}}" alt="imagen sobre la categoria">
@endsection
@section('main')
    <div>
        <section class="preguntas">
                <form action="" method="POST">
                    @csrf

                        <article class="group">
                            <div class="pregunta">
                                <label for="">{{$pregunta}}</label>
                            </div>
                            <div class="respuestas">
                                <label for=""><input type="radio" name="respuesta" value="{{$respuesta[0]}}">{{$respuesta[0]}}</label>
                                <label for=""><input type="radio" name="respuesta" value="{{$respuesta[1]}}">{{$respuesta[1]}}</label>
                                <label for=""><input type="radio" name="respuesta" value="{{$respuesta[2]}}">{{$respuesta[2]}}</label>
                                <label for=""><input type="radio" name="respuesta" value="{{$respuesta[3]}}">{{$respuesta[3]}}</label>
                                <input type="hidden" name="id" value="{{$idPregunta}}">
                            </div>
                        </article>

                    <article class="boton">
                        <button type="submit" class="btn btn-outline-dark">Enviar</button>
                    </article>
                </form>
        </section>
    </div>
@endsection
