@extends('layouts.plantilla')
@section('title',"Administrar")
@section('main')
@guest
<div class="padding"style="margin-top:25%">
        <section class="modif">
            <h3 >"NO TIENES PODER AQUI"</h3>
            </section>
    </div>
@else
@if($admin->rol == 'player')
<div class="padding"style="margin-top:25%">
        <section class="modif">
            <h3 >"NO TIENES PODER AQUI"</h3>
            </section>
    </div>
@elseif ($admin->rol == 'admin')
    <div class="padding">
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
    @endif
    @endguest
@endsection