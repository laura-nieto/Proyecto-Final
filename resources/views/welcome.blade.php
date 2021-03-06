@extends('layouts.plantilla')
@section('title',"Home")
@section('titulo')
    <h2>BIENVENIDO
        @guest
        @else
            {{Auth::user()->name}}
        @endguest
    </h2>
    <p>Esta página fue creada gracias a Alexis Bosco, Ian Suazo y María Laura Nieto como proyecto final para el curso de Programación Web Full Stack impartido por Digital House.
        Esperamos que se divierta.
    </p>
@endsection
@section('main')
    <div id="nobroken">
        <section id="nobroken"class="categorias">
            <article class="titulo">
                <h2>Categorías</h2>
            </article>
            <article class="categoria" id="especial">
            @guest
                <ul>
                    @foreach ($categorias as $categoria)
                        <li><a href="/registrar">{{$categoria->nombre}}</a></li>
                    @endforeach
                </ul>
            @else
                <ul>
                    @foreach ($categorias as $categoria)
                        <li><a href="/aJugar/{{$categoria->nombre}}">{{$categoria->nombre}}</a></li>
                    @endforeach
                </ul>
            @endguest
            </article>
            <article class="boton">
                <!--<a class="btn btn-outline-dark" href="#" role="button">Ver más</a>-->
            </article>
        </section>
        <section class="ranking">
            <article class="titulo">
                <img src="{{asset('img/podium.png')}}" width="30" height="30" alt="">
                <h2>Ranking </h2>
            </article>
            <article class="posiciones">
                <ol>
                  @guest
                    <li><img src="{{asset('img\1puesto.png')}}" alt=""><a href="/registrar">{{$usuarios[0]}}</a></li>
                    <li><img src="{{asset('img\2puesto.png')}}" alt=""><a href="/registrar">{{$usuarios[1]}}</a></li>
                    <li><img src="{{asset('img\3puesto.png ')}}" alt=""><a href="/registrar">{{$usuarios[2]}}</a></li>
                    <li><img src="{{asset('img\laurel.png')}}" alt=""><a href="/registrar">{{$usuarios[3]}}</a></li>
                    <li><img src="{{asset('img\laurel.png')}}" alt=""><a href="/registrar">{{$usuarios[4]}}</a></li>
                @else
                    <li><img src="{{asset('img\1puesto.png')}}" alt=""><a href="/perfil/{{$usuarios[0]}}">{{$usuarios[0]}}</a></li>
                    <li><img src="{{asset('img\2puesto.png')}}" alt=""><a href="/perfil/{{$usuarios[1]}}">{{$usuarios[1]}}</a></li>
                    <li><img src="{{asset('img\3puesto.png ')}}" alt=""><a href="/perfil/{{$usuarios[2]}}">{{$usuarios[2]}}</a></li>
                    <li><img src="{{asset('img\laurel.png')}}" alt=""><a href="/perfil/{{$usuarios[3]}}">{{$usuarios[3]}}</a></li>
                    <li><img src="{{asset('img\laurel.png')}}" alt=""><a href="/perfil/{{$usuarios[4]}}">{{$usuarios[4]}}</a></li>
                @endguest 
                </ol>
            </article>
            <article class="boton">
                <a class="btn btn-outline-dark" href="/ranking" role="button">Ver más</a>
            </article>
        </section>
    </div>
@endsection
