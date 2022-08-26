<?php

namespace App\Http\Livewire\Front\Categoria;
use App\Models\Front\Secciones;
use App\Models\Front\Categorias;
use Livewire\Component;

class EditarCategoria extends Component
{
    
	public $open = false;
	public $section_id, $category_name, $parent_id, $category_image, $category_discount, $description, $url, $status, $meta_title, $meta_description, $meta_keywords;

	protected $rules = [
		'categoria.section_id' => 'required',
		'categoria.category_name' => 'required',
		'categoria.parent_id' => 'required',
		'categoria.category_image' => 'required',
		'categoria.category_discount' => 'required',
		'categoria.description' => 'required',
		'categoria.url' => 'required',
		'categoria.status' => 'required',
		'categoria.meta_title' => 'required',
		'categoria.meta_description' => 'required',
		'categoria.meta_keywords' => 'required'
	];

	public function mount(Categorias $categoria)
	{
		$this->categoria = $categoria;
	}

	public function save()
	{
		$this->validate();
		$this->categoria->save();
		$this->reset(['open']);
		// $this->emitTo('servicio.servicio','render');
		$this->emitTo('front.categoria.categoria','render');
		// $this->emit('alert','Formulario Actualizado correctamente');
	}

    public function render()
    {
        $secciones = Secciones::all();
        // $clientes = Clientes::all();

        $data = [
        	'secciones' => $secciones
        ];
        return view('livewire.front.categoria.editar-categoria',$data);
    }









    
}
