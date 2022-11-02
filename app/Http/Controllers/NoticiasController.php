<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoticia;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index(){
        $noticias = Noticia::orderBy('id','desc')->paginate();
        return view('noticias.index',compact('noticias'));
    }

    public function create(){
        return view('noticias.create');
    }

    public function store(StoreNoticia $request){
        $noticia = Noticia::create($request->all());
        $file = $request->file('imagen');
        $filename = $file->getClientOriginalName();
        move_uploaded_file(public_path('/img/'),$filename);
        $url = env('APP_URL').'/img/'.$filename;
        $noticia->imagen = $url; 
        $noticia->save();
        return redirect()->route('noticias.show',$noticia);
    }

    public function show(Noticia $noticia){
        return view('noticias.show',compact('noticia'));
    }

    public function edit(Noticia $noticia){
        return view('noticias.edit',compact('noticia'));
    }

    public function update(StoreNoticia $request, Noticia $noticia){
        $noticia->update($request->all());
        $file = $request->file('imagen');
        $filename = $file->getClientOriginalName();
        move_uploaded_file(public_path('/img/'),$filename);
        $url = env('APP_URL').'/img/'.$filename;
        $noticia->imagen = $url; 
        $noticia->save();
        return redirect()->route('noticias.show',$noticia);
    }

    public function destroy(Noticia $noticia){
        $noticia->delete();
        return redirect()->route('noticias.index');
    }

    public function publicar(StoreNoticia $request){
        
    }
}
