<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preguntas;

class PreguntasController extends Controller
{
    public function devuelve_pregunta($tema)
    {
        return Preguntas::where('tema', $tema)->inRandomOrder()->first();
    }
    public function carga_pregunta($tema)
    {
        return view('pregunta')
            ->with('pregunta', Preguntas::where('tema', $tema)->inRandomOrder()->limit(1)->get())
            ->with('tema', $tema);
    }
}
