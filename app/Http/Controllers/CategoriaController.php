<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Quiz;
use App\User;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    /* MOSTRAR PREGUNTAS */

    public function listarPreguntas($nombre){
        $categoria = Categoria::select('nombre','imagen','id')->where('nombre',$nombre)->get()->first();
        //$categoria = Categoria::find($id);
        $quest = Quiz::where('categoria_id',$categoria->id)->inRandomOrder()->get();
        foreach ($quest as $key){
          $idPregunta = $key->id;
          $pregunta = $key->pregunta;
          $collection = collect([$key->opcion_correcta,$key->opcion2,$key->opcion3,$key->opcion4]);
          $respuesta = $collection->shuffle();
          return view('quest',['categoria'=>$categoria,'pregunta'=>$pregunta,'respuesta'=>$respuesta,'idPregunta'=>$idPregunta]);
        }

    }

    /* LISTAR SUGERIR */
    public function listarSugerir(){
        $categorias=Categoria::all();
        return view('sugerir',['categorias'=>$categorias]);
    }

    /* LISTAR INDEX */

    public function listarIndex(){
        $categorias=Categoria::all();
        $rank = User::orderBy('puntaje','desc')->take(5)->get();
        $usuarios = collect([]);
        foreach($rank as $user){
            $usuarios->push($user->name);
        }
        
        return view('welcome',['categorias'=>$categorias,'usuarios'=>$usuarios]);
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=Categoria::all();
        return view('abm',['categorias'=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
