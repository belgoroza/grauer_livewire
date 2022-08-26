<?php

namespace App\Http\Livewire\Front\Egreso;
use App\Models\Front\Egresos;
use Livewire\Component;

class Egreso extends Component
{
    public $search;    
    public $sort = "id";
    public $direction = "desc";
    public $vista = true;
    protected $listeners = ['render'];
    
    public function render()
    {
        $egresos = Egresos::where('documento_numero','like','%' .$this->search. '%')
                    ->orderBy($this->sort, $this->direction)
                    ->get();

        return view('livewire.front.egreso.egreso', compact('egresos'));
    }








    // public function render()
    // {
    //     return view('livewire.front.egreso.egreso');
    // }
}
