<?php

namespace App\Http\Livewire\Front\Asesor;
use App\Models\Front\Asesores;
use Livewire\Component;

class CrearAsesor extends Component
{
    
    public $nombreAsesor, $documentoAsesor, $telefonoAsesor, $direccionAsesor, $ciudadAsesor, $comentarioAsesor ;

    


    protected $rules = [
        'nombreAsesor' => 'required',
        'documentoAsesor' => 'required',
        'telefonoAsesor' => 'required',
        'direccionAsesor' => 'required',
        'ciudadAsesor' => 'required',
        'comentarioAsesor' => 'required',
    ];

    public function updated($propertyName){

        $this->validateOnly($propertyName);
    }



    public function save()
    {
        
        $this->validate();

        Asesores::create([
            'nombre' => $this->nombreAsesor,
            'documento' => $this->documentoAsesor,
            'telefono' => $this->telefonoAsesor,
            'direccion' => $this->direccionAsesor,
            'ciudad' => $this->ciudadAsesor,
            'comentario' => $this->comentarioAsesor
        ]);

        $this->reset(['nombreAsesor','documentoAsesor','telefonoAsesor','direccionAsesor','ciudadAsesor','comentarioAsesor']);

        $this->emitTo('front.asesor.asesor','render');

        $this->emit('alert','El asesor se creó satisfactoriamente');

        session()->flash('message','Asesor agregado correctamente..!');

    }

















    public function render()
    {
        return view('livewire.front.asesor.crear-asesor');
    }
}
