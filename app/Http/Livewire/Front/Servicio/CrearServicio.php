<?php

namespace App\Http\Livewire\Front\Servicio;
use App\Models\Front\Servicios;
use App\Models\Front\Asesores;
use App\Models\Front\Clientes;
use Livewire\Component;

class CrearServicio extends Component
{
    public $system = "";
    public $buscarMaster;
    public $clienteId="";
    
    public $asesorId, $oficina, $fechaPlanta, $item, $fechaRecepcion, $cliente, $medida, $serie, $marca, $modelo, $comentario;

    public function clienteId($id)
    {
        $this->clienteId = $id;
    }

    protected $rules = [
        'buscarMaster' => 'required|numeric',
        'asesorId' => 'required',
        'oficina' => 'required',
        'fechaPlanta' => 'required',
        'item' => 'required|numeric',
        'fechaRecepcion' => 'required',
        'clienteId' => 'required',
        'medida' => 'required',
        'serie' => 'required|numeric',
        'marca' => 'required',
        'modelo' => 'required',
        'comentario' => 'required',

    ];

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

    



    public function save()
    {
        
        $this->validate();
        
        $fecha = $this->fechaPlanta;
        if ($fecha) 
        {
            $ubicacion = "PLANTA";
        }
        else
        {
            $ubicacion = "INICIAL";
            $fecha = null;
        }

        Servicios::create([
            'cliente_id' => $this->clienteId,
            'asesor_id' => $this->asesorId,
            'oficina' => $this->oficina,
            'master' => $this->buscarMaster,
            'item' => $this->item,
            'medida' => $this->medida,
            'serie' => $this->serie,
            'marca' => $this->marca,
            'modelo' =>$this->modelo,
            'estado' => "PENDIENTE",
            'ubicacion' => $ubicacion, 
            'status' => 1,
            'fecha_recepcion' => $this->fechaRecepcion,
            'fecha_planta' => $fecha,
            'comentario' => $this->comentario
        ]);

        // $this->reset();

        // $this->emitTo('front.asesor.asesor','render');

        // $this->emit('alert','El asesor se creó satisfactoriamente');

        session()->flash('message','Servicio agregado correctamente..!');

    }

    /**************************************************************************************************************************************/
    public $results;
    public $search;
    public $selected;
    public $showDropdown;
    
    public function query() {
        return Clientes::where('nombre', 'like', '%'.$this->search.'%')->orderBy('nombre');
    }

    public function mount()
    {
        $this->showDropdown = false;
        $this->results = collect();

    }

    public function updatedSelected()
    {
        $this->emitSelf('valueSelected', $this->selected);
    }

    public function updatedSearch()
    {
        if (strlen($this->search) < 2) {
            $this->results = collect();
            $this->showDropdown = false;
            return;
        }

        if ($this->query()) {
            $this->results = $this->query()->get();
        } else {
            $this->results = collect();
        }

        $this->selected = '';
        $this->showDropdown = true;
    }
    /**************************************************************************************************************************************/

    public function render()
    {
        
        // $searchServicio = Servicios::where('master','like','%' .$this->buscarMaster. '%')->orderBy('id', 'asc')->paginate(10);
        $searchServicio = Servicios::with([
                'clientes'=>function($query){$query->select('id','nombre');},
                'asesores'=>function($query){$query->select('id','nombre');}])
                ->where('master','like','%' .$this->buscarMaster. '%')
                ->orderBy('id', 'asc')
                ->paginate(10);
        $asesores = Asesores::all();
        $clientes = Clientes::all();
        $data = [
            'searchServicio' => $searchServicio,
            'asesores' => $asesores,
            'clientes' => $clientes
        ];        
        return view('livewire.front.servicio.crear-servicio',$data);
        dd($searchServicio);die;
    }



}
