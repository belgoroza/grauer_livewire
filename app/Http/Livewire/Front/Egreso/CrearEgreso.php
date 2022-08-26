<?php

namespace App\Http\Livewire\Front\Egreso;
use App\Models\Front\Egresos;
use Livewire\Component;

class CrearEgreso extends Component
{
    
	public $open = false;
    public $fechaIngreso, $tipo, $estado, $documentoTipo, $documentoNumero, $OficinaIngreso, $comentario;
    protected $rules = [
        'fechaIngreso' => 'required',
        'tipo' => 'required',
        'estado' => 'required',
        'documentoTipo' => 'required',
        'documentoNumero' => 'required',
        'OficinaIngreso' => 'required',
        'comentario' => 'required'
    ];

    public function updated($propertyName){ $this->validateOnly($propertyName);}

    public function save()
    {        
        $this->validate();
        Egresos::create([
            'fecha' => $this->fechaIngreso,
            'tipo' => $this->tipo,
            'estado' => $this->estado,
            'documento_tipo' => $this->documentoTipo,
            'documento_numero' => $this->documentoNumero,
            'oficina' => $this->OficinaIngreso,
            'comentario' => $this->comentario
        ]);
        $this->reset(['open','fechaIngreso', 'tipo', 'estado', 'documentoTipo', 'documentoNumero', 'OficinaIngreso', 'comentario']);

        $this->emitTo('front.egreso.egreso','render');

        // $this->emit('alert','El asesor se creó satisfactoriamente');

        session()->flash('message','Egreso agregado correctamente..!');

    }

    public function render()
    {
        return view('livewire.front.egreso.crear-egreso');
    }


    // public function render()
    // {
    //     return view('livewire.front.egreso.crear-egreso');
    // }
}
