<?php

namespace App\Http\Livewire\Front\Blanca;
use App\Models\Front\Blancas;
use App\Models\Front\Productos;
use Livewire\Component;

class CrearBlanca extends Component
{
    
    public $blancas;
    public $oficina, $producto, $marca, $serie, $status, $ingresoFecha, $ingresoTipo, $ingresoNumero, $ingresoOrigen, $ingresoComentario;

    protected $rules = [
        'oficina' => 'required',
        'search' => 'required',
        // 'medida' => 'required',
        'marca' => 'required',
        'serie' => 'required|numeric',
        'status' => 'required',
        'ingresoFecha' => 'required',
        'ingresoTipo' => 'required',
        'ingresoNumero' => 'required',
        'ingresoOrigen' => 'required',
        'ingresoComentario' => 'required|max:15',

    ];

    public function ProductoId($id)
    {
        $this->ProductoId = $id;
    }

    public function save()
    {
        
        $this->validate();

        // $fecha = $this->fechaPlanta;
        // if ($fecha) 
        // {
        //     $ubicacion = "PLANTA";
        // }
        // else
        // {
        //     $ubicacion = "INICIAL";
        //     $fecha = null;
        // }

        Blancas::create([
            'oficina' => $this->oficina,
            'producto_id' => $this->ProductoId,
            'medida' => $this->search,
            'marca' => $this->marca,
            'serie' => $this->serie,
            'ubicacion' => "BODEGA",
            'status' => $this->status,
            'ingreso_fecha' => $this->ingresoFecha,
            'ingreso_tipo' =>$this->ingresoTipo,
            'ingreso_numero' => $this->ingresoNumero,
            'ingreso_origen' => $this->ingresoOrigen, 
            'ingreso_comentario' => $this->ingresoComentario
        ]);

        // $this->reset();
        // $this->emitTo('front.asesor.asesor','render');
        // $this->emit('alert','El asesor se creó satisfactoriamente');
        session()->flash('message','Blanca agregado correctamente..!');
    }

    /**************************************************************************************************************************************/
    public $results;
    public $search;
    public $selected;
    public $showDropdown;
    
    public function query() {
        return Productos::where('descripcion', 'like', '%'.$this->search.'%')->where('categoria_id','=',2)->orderBy('descripcion');
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
        
        $resultados = Blancas::with(['productos'=>function($query){$query->select('id','codigo','descripcion');}])
                // ->where('medida','like','%' .$this->search. '%')
                ->where('medida','=','' .$this->search. '')
                ->orderBy('id', 'asc')
                ->paginate(10);
        $data = ['resultados' => $resultados];
        return view('livewire.front.blanca.crear-blanca',$data);
        
    }
}
