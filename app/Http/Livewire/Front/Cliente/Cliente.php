<?php

namespace App\Http\Livewire\Front\Cliente;
use App\Models\Front\Clientes;
use Livewire\Component;

class Cliente extends Component
{
    

    public $search;

    public $vista = true;

    public $sort = "id";

    public $direction = "desc";

    // escuchando desde Livewire\Frobnt\Seccion\CrearSeccion.php (método:save --> $this->emit('render');)
    // protected $listeners = ['render'];

   
    public function render()
    {
        $clientes = Clientes::where('nombre','like','%' .$this->search. '%')
                    ->orderBy($this->sort, $this->direction)
                    ->get();

        return view('livewire.front.cliente.cliente',compact('clientes'));
    }
}
