@extends('layouts.plantilla')
@section('title','Ranking')
@section('titulo')
    <h1>Ranking</h1>
@endsection
@section('main')
    <div class="padding">
        <section class="tabla">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Puntuación</th>
                        {{-- <th scope="col"></th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                       <tr>
                         @guest
                         <th scope="row" class="contador">{{$index++}}</th>
                         <td>{{$usuario->name}}</td>
                         <td>{{$usuario->puntaje}}</td>
                     @else
                         <th scope="row" class="contador">{{$index++}}</th>
                         <td> <a href="/perfil/{{$usuario->name}}"> {{$usuario->name}} </a></td>
                         <td>{{$usuario->puntaje}}</td>
                     @endguest 
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $usuarios->links() }}
        </section>
    </div>
    <script src="resources/js/script.js"></script>
@endsection
