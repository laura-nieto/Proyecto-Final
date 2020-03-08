@extends('layouts.plantilla')
@section('title',"Administrar")
@section('main')
    <div>
        <section class="modif">
            <h3>Seleccione categoria a trabajar</h3>
            <div>
                <form class="abm" action="/agregarPregunta" method="get">
                    <div class="form-check">
                        @foreach ($categorias as $categoria)
                            <input class="form-check-input" type="radio" name="categoria" value="{{$categoria->id}}">
                            <label class="" for="exampleRadios1">{{$categoria->nombre}}</label>
                        @endforeach     
                    </div>
                    <div class="buttom">
                        <input type="submit" value="Agregar" class="redirect">
                        <input type="submit" value="Explorar" formaction="/tablaPreguntas" class="redirect">
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection