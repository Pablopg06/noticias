<div>
    @can('noticias.create')
        <a class="btn btn-danger" href="{{route('noticias.create')}}">Crear noticia</a>
    @endcan
    <div class="card">
        <div class="card-body">
            <div class="px-6 py-4">
                <input class="form-control w-full" type="text" wire:model="search" placeholder="Busque noticia"/>
            </div>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Acciones</th>
                        @can('noticias.publicar')
                            <th>Publicar noticia</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ($noticias as $noticia)
                        <tr>
                            <td>{{$noticia->titulo}}</td>
                            <td style="display: flex;">
                                <a class="btn btn-xs btn-default text-success mx-1 shadow" href="{{route('noticias.show', compact('noticia'))}}" title="Ver noticia">
                                    <i class="fa fa-lg fa-fw fa-eye"></i>
                                </a>
                                @can('noticias.edit')
                                    <a class="btn btn-xs btn-default text-primary mx-1 shadow" href="{{route('noticias.edit',compact('noticia'))}}" title="Editar">
                                        <i class="fa fa-lg fa-fw fa-pen"></i>
                                    </a>
                                @endcan
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
                            <td>
                                @can('noticias.publicar')
                                    <div class="form-check form-switch">
                                        <input data-id="{{$noticia->id}}" class="form-check-input" type="checkbox" role="switch" 
                                        {{$noticia->publicar ? 'checked' : ''}}>
                                    </div>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-foot">
            {{$noticias->links()}}
        </div>
    </div>
</div>
