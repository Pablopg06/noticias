<?php

namespace App\Http\Controllers;

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

    public function show(Noticia $noticia){
        return view('noticias.show',compact('noticia'));
    }

    public function destroy(Noticia $noticia){
        $noticia->delete();
        return redirect()->route('noticias.index');
    }
}
