<?php

namespace App\Http\Livewire\Front\Planta;
use App\Models\Front\Servicios;
use Livewire\Component;

class Planta extends Component
{
    

	public $search;
    
    public $sort = "id";

    public $direction = "asc";

    public $vista = true;

    public $fecha;

    public function envioPlanta($id)
    {
        if($this->fecha)
        {
            $envio = Servicios::find($id);
            $envio->update([
                'ubicacion'       => "PLANTA",
                'fecha_planta' => $this->fecha
            ]);
            // $this->reset();
            session()->flash('ok','Envío a planta realizado con éxito..!'.$id);
        }
        else
        {  session()->flash('failed','Seleccione una fecha por favor....'); }
        
    }


    public function render()
    {
        return view('livewire.front.planta.planta', 
            [
                'servicios' => Servicios::where('master','like','%' .$this->search. '%')->where('ubicacion','=','INICIAL')->orderBy($this->sort, $this->direction)->paginate(10)
            ]
        );
    }

}
