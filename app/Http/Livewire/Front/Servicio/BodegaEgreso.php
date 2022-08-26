<?php

namespace App\Http\Livewire\Front\Servicio;
use App\Models\Front\Servicios;
use Livewire\Component;

class BodegaEgreso extends Component
{
    
    public $buscarServicio, $fecha, $documento, $numeroDoc, $cliente, $responsable,  $producto ;    
    public $sort = "id";
    public $direction = "desc";
    public $vista = true;

    protected $rules = [
        'fecha' => 'required',
        'documento' => 'required',
        'numeroDoc' => 'required',        
        'cliente' => 'required',
        'responsable' => 'required',
    ];  

    public function egresoBodega($id)
    {  
        if($id)
        {
            $this->validate();
            $egreso = Servicios::find($id);
            $egreso->update([
                'ubicacion' => "ENTREGADO",
                'egreso_fecha' => $this->fecha,                
                'egreso_tipo' => $this->documento,
                'egreso_documento' => $this->numeroDoc,
                'egreso_cliente' => $this->cliente,
                'egreso_responsable' => $this->responsable
            ]);
            // $this->reset();

            session()->flash('ok','Egreso realizado con éxito..! ' .$id);
        }
        else
        {  session()->flash('failed','Por favor ingrese la información requerida....'); }
        
    }

    public function render()
    {
        
        /*****************************************************************************************
        $formularioDetalleData = FormularioDetalles::with([
                'clientes'=>function($query){$query->select('id','cliNombre','cliApellido');},
                'asesores'=>function($query){$query->select('id','aseNombre');},
                'formularios'=>function($query){$query->select('id','forNumero');}])
                ->where('idAsesor','=',$id)
                ->where('defUbicacion','=','FABRICA')
                ->get();
        $formulario = json_decode(json_encode($formularioDetalleData));
        /*****************************************************************************************/

        // $servicios = Servicios::with([
        //         'clientes'=>function($query){$query->select('id','nombre');},
        //         'asesores'=>function($query){$query->select('id','nombre');}])
        //         ->where('master','like','%' .$this->producto. '%')
        //         ->where('ubicacion','=','BODEGA')
        //         ->get();

        // dd($servicios);die;
        // $formulario = json_decode(json_encode($formularioDetalleData));



        $servicios = Servicios::where('master','like','%' .$this->producto. '%')->where('ubicacion','=','BODEGA')->orderBy($this->sort, $this->direction)->paginate(10);
        $data = ['servicios' => $servicios];
        return view('livewire.front.servicio.bodega-egreso',$data);
    }
}


