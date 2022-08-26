<?php

namespace App\Http\Livewire\Front\Asesor;
use App\Models\Front\Asesores;
use Livewire\Component;

class Asesor extends Component
{
    

    public $search;

    public $vista = true;

    public $sort = "id";

    public $direction = "desc";

    // escuchando desde Livewire\Frobnt\Seccion\CrearSeccion.php (método:save --> $this->emit('render');)
    // protected $listeners = ['render'];



    public function render()
    {
        // $asesores = Asesores::all();
        $asesores = Asesores::where('nombre','like','%' .$this->search. '%')
                    ->orderBy($this->sort, $this->direction)
                    ->get();

        return view('livewire.front.asesor.asesor',compact('asesores'));
    }
}
