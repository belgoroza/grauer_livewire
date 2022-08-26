<?php

namespace App\Http\Livewire\Admin\Catalogo;
use App\Models\Front\Productos;
use App\Models\Front\Blancas;
use App\Models\Front\Servicios;
use Livewire\Component;

class CatalogoDos extends Component
{
    public $search;
    public $idProducto = '';
    public $categoria = '';
    public $idProductoPlus = '';
    public $resalt = '';

    public function activar($id, $categoria)
    {
        $this->idProducto = $id;
        $this->categoria = $categoria;
        $this->resalt = Productos::where('id','=',$id)->get();
    }

    public function render()
    {
        $resultados = Productos::where('descripcion','like','%' .$this->search. '%')
                ->orderBy('id', 'asc')->get();

        if($this->categoria == 1)
        {
            $detalle = Servicios::where('producto_id','=',$this->idProducto)->get();
        }
        else
        {
            $detalle = Blancas::where('producto_id','=',$this->idProducto)->get();
        }
        
                
        $data = ['resultados' => $resultados, 'detalle' => $detalle];
        return view('livewire.admin.catalogo.catalogo-dos',$data)->layout('layouts.guest');
        // return view('livewire.admin.catalogo.catalogo-dos');
    }
}
