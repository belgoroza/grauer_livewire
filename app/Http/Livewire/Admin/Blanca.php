<?php

namespace App\Http\Livewire\Admin;
use App\Models\Front\Blancas;
use App\Models\Front\Productos;
use Livewire\Component;

class Blanca extends Component
{
    public $ver=1;
    public $ProductoId;

    public function ProductoId($id)
    {
        $this->ProductoId = $id;
    }
    /**************************************************************************************************************************************/
    public $results;
    public $search;
    public $selected;
    public $showDropdown;
    
    public function query() 
    {
        return Productos::where('descripcion', 'like', '%'.$this->search.'%')->where('categoria_id','=','2')->orderBy('descripcion');
    }

    public function mount()
    {
        $this->showDropdown = false;
        $this->results = collect();
    }

    public function updatedSelected()
    {
        $this->emitSelf('valueSelected', $this->selected);
    }

    public function updatedSearch()
    {
        if (strlen($this->search) < 2) {
            $this->results = collect();
            $this->showDropdown = false;
            return;
        }

        if ($this->query()) 
        {
            $this->results = $this->query()->get();
        } else {
            $this->results = collect();
        }

        $this->selected = '';
        $this->showDropdown = true;
    }
    /**************************************************************************************************************************************/


   








    public function render()
    {
        $consulta = $this->ProductoId;

        $resultados = Blancas::with(['productos'=>function($query){$query->select('id','codigo','descripcion');}])
                ->where('producto_id','like','%' .$this->ProductoId. '%')                
                ->orderBy('id', 'asc')->get();
        
        $data = ['resultados' => $resultados];
        return view('livewire.admin.blanca',$data)->layout('layouts.guest');
    }
}
