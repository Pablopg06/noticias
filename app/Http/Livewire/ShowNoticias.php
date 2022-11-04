<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Noticia;

class ShowNoticias extends Component
{
    public $search;
    protected $paginationTheme = "bootstrap";
    public function render()
    {
        $noticias = Noticia::where('titulo', 'LIKE', '%' . $this->search . '%')->orderBy('id','desc')->paginate();
        return view('livewire.show-noticias', compact('noticias'));
    }
}
