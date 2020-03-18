@extends('layouts.plantilla')
@section('title',"Ups!")
@section('titulo')
    <h2 class="text-danger">Oh! parece que te has equivocado</h2>
    <h2 class="text-danger">La respuesta correcta era</h2>
@endsection
@section('main')
<div>
    <section class="preguntas">
            <form action="" method="POST">
                @csrf
                    <article class="group">
                        <div class="pregunta">
                            <label for="">{{$pregunta->pregunta}}</label>
                        </div>
                        <div class="respuestas">
                            <label for=""><input type="radio" class="option-input radio"name="respuesta" checked value="">{{$pregunta->opcion_correcta}}</label>
                        </div>
                    </article>
                <article class="boton">
                    <a href="/">Volver al Inicio</a>
                </article>
            </form>
    </section>
</div>
@endsection