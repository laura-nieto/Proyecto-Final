@extends('layouts.plantilla')
@section('title',"¿Desea Borrar?")
@section('main')
    <div class="confirmar">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">¿Está seguro que desea eliminar la cuenta?</h4>
            <br>
            <p>Llevada a cabo la acción no se podrán recuperar los datos.</p>
        </div>
        <form action="" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Borrar de todas formas</button>
        </form>
    </div>
@endsection