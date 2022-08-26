<?php

namespace App\Http\Livewire\Front\Blanca;
use App\Models\Front\Blancas;
use Livewire\Component;

class Blanca extends Component
{
    public $search;
    public $sort = "id";
    public $direction = "desc";
    public $vista = true;

    protected $listeners = ['render'];
    
    public function render()
    {
        $resultados = Blancas::with(['productos'=>function($query){$query->select('id','codigo','descripcion');}])
                ->where('medida','like','%' .$this->search. '%')
                ->orderBy('id', 'asc')
                ->paginate(10);
        $data = ['resultados' => $resultados];
        return view('livewire.front.blanca.blanca',$data);
    }
}
