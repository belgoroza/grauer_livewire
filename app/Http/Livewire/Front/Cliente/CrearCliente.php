<?php

namespace App\Http\Livewire\Front\Cliente;
use App\Models\Front\Clientes;
use Livewire\Component;

class CrearCliente extends Component
{
    public $open = false;

    public $nombreCliente, $documentoCliente, $telefonoCliente, $direccionCliente, $ciudadCliente, $comentarioCliente ;

    protected $rules = [
        'nombreCliente' => 'required',
        'documentoCliente' => 'required',
        'telefonoCliente' => 'required',
        'direccionCliente' => 'required',
        'ciudadCliente' => 'required',
        'comentarioCliente' => 'required',
    ];

    public function updated($propertyName){$this->validateOnly($propertyName);}

    public function save()
    {
        
        $this->validate();

        Clientes::create([
            'nombre' => $this->nombreCliente,
            'documento' => $this->documentoCliente,
            'telefono' => $this->telefonoCliente,
            'direccion' => $this->direccionCliente,
            'ciudad' => $this->ciudadCliente,
            'comentario' => $this->comentarioCliente
        ]);

        $this->reset(['open','nombreCliente','documentoCliente','telefonoCliente','direccionCliente','ciudadCliente','comentarioCliente']);

        // $this->emitTo('front.asesor.asesor','render');

        // $this->emit('alert','El asesor se creó satisfactoriamente');

        session()->flash('message','Cliente agregado correctamente..!');

    }

    public function render()
    {
        return view('livewire.front.cliente.crear-cliente');
    }
}
