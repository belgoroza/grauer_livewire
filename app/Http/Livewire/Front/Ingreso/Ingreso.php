<?php

namespace App\Http\Livewire\Front\Ingreso;
use App\Models\Front\Ingresos;
use Livewire\Component;

class Ingreso extends Component
{
    public $search;    
    public $sort = "id";
    public $direction = "desc";
    public $vista = true;

    public function render()
    {
        $ingresos = Ingresos::where('documento_numero','like','%' .$this->search. '%')
                    ->orderBy($this->sort, $this->direction)
                    ->get();

        return view('livewire.front.ingreso.ingreso', compact('ingresos'));
    }
}
