<?php

namespace App\Http\Livewire\Front\Servicio;
use App\Models\Front\Servicios;
use App\Models\Front\Asesores;
use App\Models\Front\Clientes;
use Livewire\Component;

class Editar extends Component
{
    
	public $open = false;
	public $asesor, $cliente, $servicio, $oficina;

	protected $rules = [
		'servicio.master' => 'required',
		'servicio.asesor_id' => 'required',
		'servicio.oficina' => 'required',
		// 'servicio.fecha_planta' => 'required',
		'servicio.item' => 'required',
		'servicio.fecha_recepcion' => 'required',
		'servicio.cliente_id' => 'required',
		'servicio.medida' => 'required',
		'servicio.serie' => 'required',
		'servicio.marca' => 'required',
		'servicio.modelo' => 'required',
		'servicio.comentario' => 'required',
	];

	public function mount(Servicios $servicio)
	{
		$this->servicio = $servicio;
	}

	public function save()
	{
		$this->validate();
		$this->servicio->save();
		$this->reset(['open']);
		// $this->emitTo('servicio.servicio','render');
		$this->emitTo('front.servicio.servicio','render');
		// $this->emit('alert','Formulario Actualizado correctamente');
	}

    public function render()
    {
        $asesores = Asesores::all();
        $clientes = Clientes::all();
        return view('livewire.front.servicio.editar',compact('asesores','clientes'));
    }
}
