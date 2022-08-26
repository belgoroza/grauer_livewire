<?php

namespace App\Http\Livewire\Front\Servicio;
use App\Models\Front\Servicios;
use App\Models\Front\Productos;
use App\Models\Front\Ingresos;
use Livewire\Component;

class BodegaServicio extends Component
{
    

	public $buscarServicio, $fecha, $documento, $numeroDoc,  $estado, $producto;    
    public $sort = "id";
    public $direction = "desc";
    public $vista = true;
    public $productoId = "";

    protected $listeners = ['productoId']; 

    protected $rules = [
        'documento' => 'required',
        'numeroDoc' => 'required',
        'fecha' => 'required',
        'estado' => 'required',
        'producto' => 'required',
    ];  

    public function productoId($id)
    {
        $this->productoId = $id;
    }

    public function ingresoBodega($id)
    {  
        if($this->productoId)
        {
            $this->validate();
            $envio = Servicios::find($id);
            $envio->update([
                'producto_id' => $this->productoId,                
                'estado' => $this->estado,
                'ubicacion' => "BODEGA",
                'ingreso_tipo' => $this->documento,
                'ingreso_numero' => $this->numeroDoc,
                'ingreso_fecha' => $this->fecha
            ]);
            // $this->reset();
            $this->reset(['search']);
            session()->flash('ok','Ingreso a Bodega realizado con éxito..! ' .$id);
        }
        else
        {  session()->flash('failed','Por favor ingrese la información requerida....'); }
        
    }

    public function ingresoBodegaFail($id)
    {  
        if($id)
        {
            $this->validate();
            $envioFail = Servicios::find($id);
            $envioFail->update([
                'producto_id' => "0",                
                'estado' => $this->estado,
                'ubicacion' => "BODEGA",
                'ingreso_tipo' => $this->documento,
                'ingreso_numero' => $this->numeroDoc,
                'ingreso_fecha' => $this->fecha
            ]);
            // $this->reset();

            session()->flash('ok','Ingreso a Bodega de Rechazo realizado con éxito..! ' .$id);
        }
        else
        {  session()->flash('failed','Por favor ingrese la información requerida....'); }
        
    }

    /**************************************************************************************************************************************/
    public $results;
    public $search;
    public $selected;
    public $showDropdown;
    /**************************************************************************************************************************************/
    public function query() {
        return Productos::where('codigo', 'like', '%'.$this->search.'%')->orderBy('codigo');
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

    // public function productoId($id)
    // {
    //     $this->emit('productoId',$id);
    //     // $this->idProducto = $id;
    //     // dd($id);die;
    // }

    /********************************************************************************************************************************************/

    public function render()
    {
        $servicios = Servicios::where('master','like','%' .$this->producto. '%')->where('ubicacion','=','PLANTA')->orderBy($this->sort, $this->direction)->paginate(10);

        $data = ['servicios' => $servicios];

        return view('livewire.front.servicio.bodega-servicio',$data);

    }



    














}
