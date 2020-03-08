@extends('layouts.plantilla')
@section('title',"Agregar Pregunta")
@section('main')
    <div class="agreg">
        <section class="agreg">
            <h2>Agregar Pregunta</h2>
            <article class="agreg">
                <div class="asd">
                    <form action="" method="POST">
                        @csrf
                    <label for="">Puntuacion</label><input type="text" name="puntuacion" class="ancho" value="{{ old('puntuacion') }}">
                            @error('puntuacion')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror 
                        <label for="">Pregunta</label><input type="text" name="pregunta" class="ancho" value="{{ old('pregunta') }}">
                            @error('pregunta')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror
                        <label for="">Opcion Correcta</label><input type="text" name="opcion_correcta"class="ancho" value="{{ old('opcion_correcta') }}">
                            @error('opcion_correcta')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror
                        <label for="">Opcion 2</label><input type="text" name="opcion2"class="ancho" value="{{ old('opcion2') }}">
                            @error('opcion2')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror
                        <label for="">Opcion 3</label><input type="text" name="opcion3"class="ancho"value="{{ old('opcion3') }}">
                            @error('opcion3')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror
                        <label for="">Opcion 4</label><input type="text" name="opcion4"class="ancho"value="{{ old('opcion4') }}">
                            @error('opcion4')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small> 
                            @enderror
                        <div class="buttom">
                            <input class="guardar"value="Guardar"type="submit">
                            <input class="guardar"value="Regresar" onclick="history.back()" type="button">
                        </div>
                    </form>
                </div> 
            </article>
        </section>
    </div>
@endsection