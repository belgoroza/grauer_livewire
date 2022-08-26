<?php

namespace App\Http\Livewire\Admin\Catalogo;

use Livewire\Component;

class CatalogoDetalle extends Component
{
    public $item;
    
    public function render()
    {
        return view('livewire.admin.catalogo.catalogo-detalle');
    }
}
