<?php

namespace App\Http\Livewire\Front\Seccion;
use App\Models\Front\Secciones;
use Livewire\Component;

class EditarSeccion extends Component
{
    
	public $open = false;
	public $name, $status;

	protected $rules = [
		'seccion.name' => 'required',
		'seccion.status' => 'required'
	];

	public function mount(Secciones $seccion)
	{
		$this->seccion = $seccion;
	}

	public function save()
	{
		$this->validate();
		$this->seccion->save();
		$this->reset(['open']);
		// $this->emitTo('servicio.servicio','render');
		$this->emitTo('front.seccion.seccion','render');
		// $this->emit('alert','Formulario Actualizado correctamente');
	}










    public function render()
    {
        // $secciones = Secciones::all();
        // $categorias = Categorias::all();
        // $data = [
        // 	'secciones' => $secciones,
        // 	'categorias' => $categorias
        // ];
        return view('livewire.front.seccion.editar-seccion');
    }
}
