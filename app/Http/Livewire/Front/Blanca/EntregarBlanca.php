<?php

namespace App\Http\Livewire\Front\Blanca;
use App\Models\Front\Blancas;
use Livewire\Component;

class EntregarBlanca extends Component
{
    public $buscarBlanca, $fecha, $documento, $numero, $responsable,  $destino ;    
    public $sort = "id";
    public $direction = "desc";
    public $vista = true;

    protected $rules = [
        'fecha' => 'required',
        'documento' => 'required',
        'numero' => 'required',        
        'responsable' => 'required',
        'destino' => 'required',
    ];  

    public function egresoBlanca($id)
    {  
        if($id)
        {
            $this->validate();
            $blanca = Blancas::find($id);
            $blanca->update([
                'ubicacion' => "ENTREGADO",
                'egreso_fecha' => $this->fecha,                
                'egreso_tipo' => $this->documento,
                'egreso_numero' => $this->numero,
                'egreso_responsable' => $this->responsable,
                'egreso_destino' => $this->destino
            ]);
            // $this->reset();

            session()->flash('ok','Egreso realizado con éxito..! ' .$id);
        }
        else
        {  session()->flash('failed','Por favor ingrese la información requerida....'); }
        
    }


    public function render()
    {
        $resultados = Blancas::with(['productos'=>function($query){$query->select('id','codigo','descripcion');}])
                ->where('medida','like','%' .$this->buscarBlanca. '%')
                ->orderBy('id', 'asc')
                ->paginate(10);
        $data = ['resultados' => $resultados];
        return view('livewire.front.blanca.entregar-blanca',$data);
    }
}
