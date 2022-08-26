<?php

namespace App\Http\Livewire\Front;
use App\Models\Front\Seccion;
use Livewire\Component;

class Dashboard extends Component
{
    
    
	public $search = "buscara";


    public function render()
    { 		
        return view('livewire.front.dashboard');
    }


    public function maestros($dt)
    {       	
	    $busqueda = $this->search;
	    switch ($dt) 
	    {
			case 'seccion': //Superadministrador
				$data = Seccion::all();
	    		return view('livewire.front.'.$dt)->with(compact('data','busqueda'));
			break;

			case 'categoria'://Coordinador Proyecto OVSM
				return view('livewire.front.'.$dt);
			break;

			case 'subcategoria': //Administrador Observatorio ovsm
				return view('livewire.front.'.$dt);
			break;

			default:
			break;
		}	    
	  
    }








}

