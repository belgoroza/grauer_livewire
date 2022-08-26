<?php

namespace App\Http\Livewire\Front\Seccion;
// use App\Models\Front\Seccion;
use App\Models\Front\Secciones;
use Livewire\Component;

class CrearSeccion extends Component
{
    
  	public $open = false;

  	public $nombreSeccion, $estadoSeccion;


  	protected $rules = [
  		'nombreSeccion' => 'required|max:10',
  		'estadoSeccion' => 'required|numeric',
  	];

  	public function updated($propertyName){

  		$this->validateOnly($propertyName);
  	}



    public function save()
    {
    	
    	$this->validate();

    	Seccion::create([
    		'name' => $this->nombreSeccion,
    		'status' => $this->estadoSeccion
    	]);

    	$this->reset(['open','nombreSeccion','estadoSeccion']);

    	$this->emitTo('front.seccion.seccion','render');

    	$this->emit('alert','La sección se creó satisfactoriamente');

    }

    public function render()
    {
        return view('livewire.front.seccion.crear-seccion');
    }
}
