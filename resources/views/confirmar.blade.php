@extends('layouts.plantilla')
@section('title',"¿Desea Borrar?")
@section('main')
    <div class="arreglo">
        <section class="tabla">
            <div class="table-responsive-md table-responsive-sm table-responsive">
            <form action="/confirmarBorrado" method="post">
                @csrf
                <table class="table">
                    <thead>
                        <tr> 
                            <th scope="col">Seleccionar</th>
                            <th scope="col">ID</th>
                            <th scope="col">Pregunta</th>
                            <th scope="col">Opcion Correcta</th>
                            <th scope="col">Opcion 2</th>
                            <th scope="col">Opcion 3</th>
                            <th scope="col">Opcion 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($preguntaBorrar as $pregunta)
                            <tr>
                                <td><input type="radio" name="id" value="{{$pregunta->id}}"checked></td>
                                <th scope="row">{{$pregunta->id}}</th>
                                <td>{{$pregunta->pregunta}}</td>
                                <td>{{$pregunta->opcion_correcta}}</td>
                                <td>{{$pregunta->opcion2}}</td>
                                <td>{{$pregunta->opcion3}}</td>
                                <td>{{$pregunta->opcion4}}</td>
                            <tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <div class="buttom">
                    <h5>¿Seguro desea eliminar?</h5>
                    <input type="hidden" name="categoria" value="">
                    <input type="submit" value="Borrar" class="guardar">
                    <input class="guardar"value="Regresar" onclick="history.back()" type="button">                
                </div>
            </form>
        </section> 
    </div>
@endsection