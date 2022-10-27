@extends('adminlte::page')

@section('title','Noticias')

@section('content_header')
    <h1>Bienvenidos a la sección de Noticias</h1>
    @can('noticias.create')
        <a class="btn btn-danger" href="{{route('noticias.create')}}">Crear noticia</a>
    @endcan
@stop

@section('content')

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($noticias as $noticia)
                <tr>
                    <td>{{$noticia->titulo}}</td>
                    <td>
                        <a class="btn btn-xs btn-default text-success mx-1 shadow" href="{{route('noticias.show', compact('noticia'))}}" title="Ver noticia">
                            <i class="fa fa-lg fa-fw fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        @can('noticias.edit')
                            <a class="btn btn-xs btn-default text-primary mx-1 shadow" href="{{route('noticias.edit',compact('noticia'))}}" title="Editar">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                        @endcan
                    </td>
                    <td>
                        @can('noticias.destroy')
                            <form action="{{route('noticias.destroy',$noticia)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-xs btn-default text-danger mx-1 shadow" type="submit">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                            </form> 
                        @endcan   
                    </td>
                </tr>
            @endforeach
            {{--{{$noticias->links()}}--}}
            
        </tbody>
    </table>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi');</script>
@stop


