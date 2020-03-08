@extends('layouts.plantilla')
@section('title',"Modificar Preguntas")
@section('main')
    <div class="agreg">
        <section class="agreg">    
            <h2>Modificar</h2>
            <article class="agreg">
                    <form action=""method="POST">
                        @csrf
                        @foreach ($preguntaModif as $pregunta)
                            <label for="">Pregunta</label>
                            <input type="text" name="pregunta" value="{{$pregunta->pregunta}}" class="ancho">
                            @error('pregunta')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror
                            <label for="">Opcion Correcta</label>
                            <input type="text" value="{{$pregunta->opcion_correcta}}" name="opcion_correcta" class="ancho">
                            @error('opcion_correcta')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror
                            <label for="">Opcion 2</label>
                            <input type="text" value="{{$pregunta->opcion2}}" class="ancho" name="opcion2">
                            @error('opcion2')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror
                            <label for="">Opcion 3</label>
                            <input type="text" value="{{$pregunta->opcion3}}" class="ancho"name="opcion3">
                            @error('opcion3')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror
                            <label for="">Opcion 4</label>
                            <input type="text" value="{{$pregunta->opcion4}}" class="ancho" name="opcion4">
                            @error('opcion4')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror
                        @endforeach
                        <div class="buttom">
                            <input type="submit" value="Modificar" class="guardar">
                            <input class="guardar"value="Regresar" onclick="history.back()" type="button">
                        </div>
                    </form>
            </article>
        </section>
    </div>
@endsection