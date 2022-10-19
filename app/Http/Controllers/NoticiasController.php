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
    public function show(Noticia $noticia){
        return view('noticias.show',compact('noticia'));
    }
}
