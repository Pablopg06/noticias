@extends('adminlte::page')

@section('title','Noticias')

@section('content_header')
    <h1>Bienvenidos a la sección de Noticias</h1>

@stop

@section('content')
    
    @livewire('show-noticias')
    <script>
        $(document).ready(function(){
            $("#member_table").DataTable()
        });
        $(function(){
            $('.form-check-input').change(function(){
                var publicar = $(this).prop('checked') == true ? 1 : 0;
                var noticia_id = $(this).data('id');
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        route: 'noticias.publicar'
                        data: {'publicar': publicar, 'noticia_id': noticia_id},
                        success: function(data){
                            console.log('Success')
                        }
                    });
            });
        });
    </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi');</script>
@stop


