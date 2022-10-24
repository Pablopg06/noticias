<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticia</title>
</head>
<body>
    <p>{{$noticia->epigrafe}}</p>
    <br>
    <h1>{{$noticia->titulo}}</h1>
    <br>
    <p>{{$noticia->subtitulo}}</p>
    <p>{{$noticia->cuerpo}}</p>
    <br>
    <img src="{{$noticia->imagen}}" alt="Aqui va una imagen">
    <br>
    <p>{{$noticia->piefoto}}</p>
    @can('noticias.edit')
        <a href="{{route('noticias.edit',$noticia)}}">Editar noticia</a>
    @endcan
    <br>
    @can('noticias.destroy')
        <form action="{{route('noticias.destroy',$noticia)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar noticia</button>
        </form>    
    @endcan
    
    <a href="{{route('noticias.index')}}">Volver a noticias</a>
</body>
</html>