@extends('layouts.plantilla')
@section('title',"Contact")
@section('main')
    <div class="center">
        <section class="categorias">
            <article class="titulo">
                <h2>Contactanos</h2>
            </article>
            <article class="categoria">
                <form action="index.php"><!--Aca empieza el formulario-->
                    <ul>
                        <li><a href=""><b>Nombre de la empresa</b></a></li>
                        <li><a href=""><b>Telefono:</b>15-1111-1118</a></li>
                        <li><a href=""><b>Direccion:</b>Calle Falsa 123</a></li>
                        <li><a href=""><b>Mail:</b>we@fakemail.io</a></li>
                    </ul><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14868.166970239276!2d-157.85658442795042!3d21.30936686732007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006e0d29acdfe5%3A0x69da511e4d40c5f1!2saloha%20tower!5e0!3m2!1ses-419!2sar!4v1573849037465!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </form>
            </article>
            <article class="boton">
                <a class="btn btn-outline-dark" href="" role="button">Enviar sugerencia</a>
            </article>
        </section>
    <div>
@endsection