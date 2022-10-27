@extends('adminlte::page')

@section('title','Mostrar Noticia')

@section('content_header')

@stop

@section('content')
    <h6>{{$noticia->epigrafe}}</h6>
    <h1>{{$noticia->titulo}}</h1>
    <h4>{{$noticia->subtitulo}}</h4>
    <img src="{{$noticia->imagen}}" alt="Aqui va una imagen">
    <br>
    <small>{{$noticia->piefoto}}</small>
    <p>{{$noticia->cuerpo}}</p>
    <a class="btn btn-primary" href="{{route('noticias.index')}}">Volver a la seccion de noticias</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi');</script>
@stop