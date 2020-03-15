@extends('layouts.plantilla')
@section('title',"Perfil")
@section('main')
    <div class="pref">
        <section class="profile">
            <article class="profpic">
                <a @if(Auth::user()->name == $usuario->name)href="/profedit" @else href=''@endif><img alt="imagen de perfil" src="/img/avatar/{{$usuario->avatar}}" width="210px" height="210px" style="border-radius:5px"></a>
            </article>
            <article class="profinfo">
                @if(Auth::user()->name == $usuario->name)
                    <a href="/profedit">Editar Perfil</a>
                @else
                @endif
                <p class="campos">Nombre Público: {{$usuario->name}} </p>
                {{-- <p class="campos"></p> --}}
                {{-- <p class="campos">País:</p> --}}
                <p class="campos">Usuario desde:
                    @if(isset($usuario->created_at))
                        {{$usuario->created_at->format('d-m-y')}}
                    @else
                        {{'No hay información'}}
                    @endif
                </p>
                <p class="campos">Ranking actual: #0</p>
                {{-- <p class="campos">Mejor Ranking: #0</p> --}}
                <ul>
                    <li>
                        <img src="/img/good.png" alt="">
                        <p>{{$usuario->correctas}}</p>
                    </li>
                    <li>
                        <img src="/img/wrong.png" alt="">
                        <p>{{$usuario->incorrectas}}</p>
                    </li>
                    <li>
                        <img src="/img/timeout.png" alt="">
                        <p>{{$usuario->timeOut}}</p>
                    </li>
                </ul>
                <img class="separador" src="/img/linea.png" alt="" width="200px" height="10px">
                @if(Auth::user()->name == $usuario->name)
                    <button class="eliminar" type="submit"><a href="/eliminarCuenta">Eliminar Cuenta</a></button>
                    @if($admin->rol == 'player')
                        <img class="separador" src="/img/linea.png" alt="" width="200px" height="10px">
                        <form action="/sugerir">
                            <button type="submit" name="button">Sugerir Pregunta</button>
                        </form>
                    @elseif ($admin->rol == 'admin')
                        <img class="separador" src="/img/linea.png" alt="" width="200px" height="10px">
                        <form class="" action="/abm" method="get">
                            <button class="admin" type="submit" name="button">Administrar</button>
                        </form>
                    @endif
                @else
                @endif
            </article>
        </section>
        <section class="perfeed">
            <article class="feed">
                <div>Ejemplo_Posicion_Actividad Reciente</div>
                <div>Ejemplo_Posicion_Comunidad</div>
                <div>Ejemplo_Posicion_Logros</div>
                <!-- <ul>
            <li>
                Actividad reciente
            </li>
            <li>Comunidad</li>
            <li>Logros</li>
            </ul> -->
            </article>
        </section>
    </div>
@endsection
