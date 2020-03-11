@extends('layouts.plantilla')
@section('title',"Home")
@section('titulo')
    <h2>BIENVENIDO
        @guest
        @else
            {{Auth::user()->name}}
        @endguest
    </h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore deserunt, laborum nesciunt adipisci cupiditate alias eius nihil consectetur. Vel asperiores recusandae placeat, aliquid sunt quae quibusdam quo a perferendis alias?</p>
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
                    <li><img src="{{asset('img\1puesto.png')}}" alt=""><a href="/perfil/{{$usuarios[0]}}">{{$usuarios[0]}}</a></li>
                    <li><img src="{{asset('img\2puesto.png')}}" alt=""><a href="/perfil/{{$usuarios[1]}}">{{$usuarios[1]}}</a></li>
                    <li><img src="{{asset('img\3puesto.png ')}}" alt=""><a href="/perfil/{{$usuarios[2]}}">{{$usuarios[2]}}</a></li>
                    <li><img src="{{asset('img\laurel.png')}}" alt=""><a href="/perfil/{{$usuarios[3]}}">{{$usuarios[3]}}</a></li>
                    <li><img src="{{asset('img\laurel.png')}}" alt=""><a href="/perfil/{{$usuarios[4]}}">{{$usuarios[4]}}</a></li>
                </ol>
            </article>
            <article class="boton">
                <a class="btn btn-outline-dark" href="/ranking" role="button">Ver más</a>
            </article>
        </section>
    </div>
@endsection
