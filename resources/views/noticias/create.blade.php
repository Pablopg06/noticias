<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Noticia</title>
</head>
<body>
    <h1>Seccion para crear una noticia</h1>
    <br>
    <form action="{{route('noticias.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Epigrafe:
            <input type="text" name="epigrafe" value="{{old('epigrafe')}}">
        </label>

        @error('epigrafe')
            <br>
            <small>*{{$message}}</small>
            <br> 
        @enderror
        <br>

        <label>
            Titulo:
            <input type="text" name="titulo" value="{{old('titulo')}}">
        </label>

        @error('titulo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label>
            Subtitulo:
            <input type="text" name="subtitulo" value="{{old('subtitulo')}}">
        </label>

        @error('subtitulo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label>
            Cuerpo:
            <textarea name="cuerpo" cols="30" rows="10">{{old('cuerpo')}}</textarea>
        </label>

        @error('cuerpo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label>
            Imagen:
            <input type="file" name="imagen">
        </label>
        @error('imagen')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>


        <label>
            Pie foto:
            <input type="text" name="piefoto" value="{{old('piefoto')}}">
        </label>

        @error('piefoto')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Crear noticia</button>
        <br>
    </form>

    <a href="{{route('noticias.index')}}">Volver a noticias</a>
</body>
</html>