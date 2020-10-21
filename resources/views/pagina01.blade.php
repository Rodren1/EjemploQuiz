@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')


@section('barralateral')
@parent
<p><h3>Esta parte se añade a la barra lateral original (no la sobreescribe). Pertenece a la página 01</h3></p>
@endsection



@section('contenido')
<p>
    <h3>Body de la página 01</h3>
</p>

<a href="{{ url('pregunta', ['Historia']) }}" class="btn btn-xs btn-info pull-rigth"> Historia </a>
<a href="{{ url('pregunta', ['Economia']) }}" class="btn btn-xs btn-info pull-rigth"> Economía </a>
<a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info pull-rigth"> Inglés </a>
<a href="{{ url('pregunta', ['Filosofia']) }}" class="btn btn-xs btn-info pull-rigth"> Filosofía </a>
<a href="{{ url('pregunta', ['Lengua']) }}" class="btn btn-xs btn-info pull-rigth"> Lengua </a>

<a href="{{ url('api/preguntas', ['Historia']) }}" class="btn btn-xs btn-info pullright">Historia un json</a>
@endsection