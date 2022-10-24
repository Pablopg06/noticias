<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiasController;
use Illuminate\Support\Facades\Route;
use App\Models\Noticia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');

/*Route::get('noticias', function () {
    $noticias = Noticia::orderBy('id','desc')->paginate();
    return view('noticias', compact('noticias'));
})->middleware(['auth', 'verified'])->name('noticias');*/

//Route::get('noticias', [NoticiasController::class,'index'])->middleware(['auth','verified'])->name('noticias.index');
Route::resource('noticias',NoticiasController::class)->middleware('auth','verified');
require __DIR__.'/auth.php';
