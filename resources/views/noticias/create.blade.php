@extends('adminlte::page')

@section('title','Crear Noticia')

@section('content_header')
    <h1>Sección para Crear Noticias</h1>
@stop

@section('content')
    <form action="{{route('noticias.store')}}" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            @csrf

            <label class="form-label">
                Epigrafe:
                <input type="text" class="form-control" name="epigrafe" value="{{old('epigrafe')}}">
            </label>

            @error('epigrafe')
                <br>
                <small>*{{$message}}</small>
                <br> 
            @enderror
            <br>

            <label class="form-label">
                Titulo:
                <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}">
            </label>

            @error('titulo')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
            <br>

            <label class="form-label">
                Subtitulo:
                <input type="text" class="form-control" name="subtitulo" value="{{old('subtitulo')}}">
            </label>

            @error('subtitulo')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
            <br>

            <label class="form-label">
                Cuerpo:
                <textarea name="cuerpo" class="form-control" cols="30" rows="10">{{old('cuerpo')}}</textarea>
            </label>

            @error('cuerpo')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
            <br>

            <label class="form-label">
                Imagen:
                <input type="file" name="imagen">
            </label>

            @error('imagen')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
            <br>

            <label class="form-label">
                Pie foto:
                <input type="text" class="form-control" name="piefoto" value="{{old('piefoto')}}">
            </label>

            @error('piefoto')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
            <button type="submit" class="btn btn-primary">Crear noticia</button>
            <br>
        </div>
    </form>
    <a class="btn btn-primary" href="{{route('noticias.index')}}">Volver a seccion de noticias</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi');</script>
@stop