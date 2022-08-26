<?php

namespace App\Http\Livewire\Front\Producto;
use App\Models\Front\Secciones;
use App\Models\Front\Categorias;
use App\Models\Front\Productos;
use Livewire\Component;

class EditarProducto extends Component
{
    
	public $open = false;
	public $seccion_id, $categoria_id, $codigo, $descripcion, $diseno, $banda, $status, $precio,  $comentario;

	protected $rules = [
		'producto.seccion_id' => 'required',
		'producto.categoria_id' => 'required',
		'producto.codigo' => 'required',
		'producto.descripcion' => 'required',
		'producto.diseno' => 'required',
		'producto.banda' => 'required',
		'producto.status' => 'required',
		'producto.precio' => 'required',
		'producto.comentario' => 'required'
	];

	public function mount(Productos $producto)
	{
		$this->producto = $producto;
	}

	public function save()
	{
		$this->validate();
		$this->producto->save();
		$this->reset(['open']);
		// $this->emitTo('servicio.servicio','render');
		$this->emitTo('front.producto.producto','render');
		// $this->emit('alert','Formulario Actualizado correctamente');
	}



    public function render()
    {
        $secciones = Secciones::all();
        $categorias = Categorias::all();
        $data = [
        	'secciones' => $secciones,
        	'categorias' => $categorias
        ];
        return view('livewire.front.producto.editar-producto',$data);
    }
}
