<?php

namespace App\Http\Livewire\Front\Blanca;
use App\Models\Front\Blancas;
use Livewire\Component;

class EditarBlanca extends Component
{
    public $open = false;
    public $oficina, $codigo, $medida, $marca, $serie, $ubicacion, $ingreso_fecha, $ingreso_tipo, $ingreso_numero, $ingreso_origen, $ingreso_comentario;

    protected $rules = [
        'blanca.oficina' => 'required',
        'blanca.medida' => 'required',
        'blanca.marca' => 'required',
        'blanca.serie' => 'required',
        'blanca.ubicacion' => 'required',
        'blanca.ingreso_fecha' => 'required',
        'blanca.ingreso_tipo' => 'required',
        'blanca.ingreso_numero' => 'required',
        'blanca.ingreso_origen' => 'required',
        'blanca.ingreso_comentario' => 'required'
    ];

    public function mount(Blancas $blanca)
    {
        $this->blanca = $blanca;
    }

    public function save()
    {
        $this->validate();
        $this->blanca->save();
        $this->reset(['open']);
        $this->emitTo('front.blanca.blanca','render');
        // $this->emit('alert','Formulario Actualizado correctamente');
    }

    public function render()
    {
        return view('livewire.front.blanca.editar-blanca');
    }
}
