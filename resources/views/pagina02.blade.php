@extends('layouts.ejemplolayout')

@section('titulo', 'Página 02 del proyecto')


@section('barralateral')
    <!--@parent--> <!--Muestra lo que se pone en la barra lateral en el ejemploLayout, la plantilla-->
    <p><h3>Esta parte es de la barra lateral de la página 02</h3></p>
@endsection



@section('contenido')
    <h3>El tema elegido es: </h3>
    <h1>{{ $tema }}</h1>

    <a href="{{ url('/') }}" class="btn btn-xs btn-info pull-rigth"> Pagina 01 </a>
    
@endsection