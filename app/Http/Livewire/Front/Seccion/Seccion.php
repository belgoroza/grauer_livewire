<?php

namespace App\Http\Livewire\Front\Seccion;
use Livewire\Component;
use App\Models\Front\Secciones;

class Seccion extends Component
{
    
    public $search;

    public $sort = "id";

    public $direction = "desc";

    // escuchando desde Livewire\Frobnt\Seccion\CrearSeccion.php (método:save --> $this->emit('render');)
    protected $listeners = ['render'];

    public function render()
    {
    //    	$secciones = Secciones::all();
       	$secciones = Secciones::where('name','like','%' .$this->search. '%')
       				->orderBy($this->sort, $this->direction)
       				->get();
        return view('livewire.front.seccion.seccion', compact('secciones'));
    }

    public function order($sort)
    {
    	
    	if ($this->sort == $sort) 
    	{
    		if ($this->direction == "desc") 
    		{
    			$this->direction = "asc";
    		}
    		else
    		{
    			$this->direction = "desc";
    		}
    	}
    	else
    	{
    		$this->sort = $sort;
    		$this->direction = "desc";
    	}

    }





}
