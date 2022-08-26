<?php

namespace App\Http\Livewire\Front\Servicio;
use App\Models\Front\Servicios;
use App\Models\Front\Clientes;
use App\Models\Front\Asesores;
use Livewire\Component;

class Servicio extends Component
{
    public $search;
    
    public $sort = "id";

    public $direction = "desc";

    public $vista = true;

    protected $listeners = ['render'];

    public function render()
    {
        $servicios = Servicios::with([
                'clientes'=>function($query){$query->select('id','nombre');},
                'asesores'=>function($query){$query->select('id','nombre');}])
                ->where('master','like','%' .$this->search. '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate(10);
        // $servi = json_decode(json_encode($servicios));
        // dd($servicios);die;


        // $servicios = Servicios::where('master','like','%' .$this->search. '%')->orderBy($this->sort, $this->direction)->paginate(10);
        $data = ['servicios' => $servicios];
        return view('livewire.front.servicio.servicio',$data);
        // return view('livewire.front.servicio.servicio', 
        //     [
        //         'servicios' => Servicios::where('master','like','%' .$this->search. '%')->orderBy($this->sort, $this->direction)->paginate(10)
        //     ]
        // );
    }


    


}
