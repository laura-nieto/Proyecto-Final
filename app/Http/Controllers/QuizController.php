<?php

namespace App\Http\Controllers;

use DB;
use App\Quiz;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Quiz::where('categoria_id',$_GET['categoria'])->get();
        return view('verPreguntas', ['preguntas'=>$preguntas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quest = new Quiz;

        /* VALIDACION */

        $reglas = [
            'puntuacion' => 'required|numeric',
            'pregunta' => 'required|string|min:20',
            'opcion_correcta' => 'required|string|min:1',
            'opcion2' => 'required|string|min:1',
            'opcion3' => 'required|string|min:1',
            'opcion4' => 'required|string|min:1'
        ];

        $msjError = [
            'required' => 'Por favor rellene el campo :attribute',
            'min' => 'El campo :attribute requiere al menos :min caracteres',
            'string' => 'Use caracteres válidos'
        ];

        $validar = $this->validate($request,$reglas,$msjError);

        /* GUARDAR */
        $quest->categoria_id = $_GET['categoria'];
        $quest->puntuacion = $request->puntuacion;
        $quest->pregunta = $request->pregunta;
        $quest->opcion_correcta = $request->opcion_correcta;
        $quest->opcion2 = $request->opcion2;
        $quest->opcion3 = $request->opcion3;
        $quest->opcion4 = $request->opcion4;
        $quest->save();
        return redirect()->action('CategoriaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        $pregunta = $quiz->where('id',$_GET['id'])->get();
        return view('confirmar',['preguntaBorrar'=>$pregunta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        $pregunta = Quiz::where('id',$_GET['id'])->get();
        return view('modificar', ['preguntaModif' => $pregunta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        /* VALIDACION */

        $reglas = [
            'pregunta' => 'required|string|min:20',
            'opcion_correcta' => 'required|string|min:1',
            'opcion2' => 'required|string|min:1',
            'opcion3' => 'required|string|min:1',
            'opcion4' => 'required|string|min:1'
        ];

        $validar = $this->validate($request,$reglas);

        /*UPDATE*/
        $quiz->find($_GET['id'])->update([
            'pregunta' => $request->pregunta,
            'opcion_correcta' => $request->opcion_correcta,
            'opcion2' => $request->opcion2,
            'opcion3' => $request->opcion3,
            'opcion4' => $request->opcion4
        ]);

        return redirect()->action('CategoriaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Quiz $quiz)
    {
        $quiz->find($request->id)->delete();
        return redirect()->action('CategoriaController@index');
    }
    public function rank()
    {
        return redirect ('ranking');
    }

    /*public function jugar($id){
      $categoria = Categoria::select('nombre','imagen','id')->where('id',$id)->get()->first();
      $preguntasCategoria = Quiz::where('categoria_id',$id)->inRandomOrder()->get();
      dd($preguntasCategoria);

      $count = rand(0,$preguntasCategoria->count());
      $random = $preguntasCategoria;
      $pregunta = $random->pregunta;
      //$collection = collect([1, 2, 3]);
      $respuestas = collect([$random->opcion_correcta,$random->opcion2,$random->opcion3,$random->opcion4]);
      //$respuestas->put($random->opcion_correcta);
      //$respuestas->put($random->opcion2);
      //$respuestas->put($random->opcion3);
      //$respuestas->put($random->opcion4);
      $respuestas->shuffle();
      return view('quest',['categoria'=>$categoria,'pregunta'=>$pregunta, '$respuestas'=>$respuestas]);
  
    }*/
}
