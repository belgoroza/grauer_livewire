<?php

namespace App\Http\Livewire\Front\Categoria;
use App\Models\Front\Categorias;
use App\Models\Front\Secciones;
use Livewire\Component;

class CrearCategoria extends Component
{
    

    public $open = false;

    public $categoriaPadre, $seccion, $nombreCategoria, $imagenCategoria, $descuento, $descripcion, $url, $status, $metaTitulo, $metaDesc, $metaKeywords;


    protected $rules = [
        'categoriaPadre' => 'required|max:10',
        'seccion' => 'required',
        'nombreCategoria' => 'required',
        'imagenCategoria' => 'required',
        'descuento' => 'required',
        'descripcion' => 'required',
        'url' => 'required',
        'status' => 'required',
        'metaTitulo' => 'required',
        'metaDesc' => 'required',
        'metaKeywords' => 'required',
    ];



     public function save()
    {
        
        $this->validate();

        Categorias::create([
            'parent_id' => $this->categoriaPadre,
            'section_id' => $this->seccion,
            'category_name' => $this->nombreCategoria,
            'category_image' => $this->imagenCategoria,
            'category_discount' => $this->descuento,
            'description' => $this->descripcion,
            'url' => $this->url,
            'meta_title' => $this->metaTitulo,
            'meta_description' => $this->metaDesc,
            'meta_keywords' => $this->metaKeywords,
            'status' => $this->status
        ]);

        $this->reset(['open','categoriaPadre','seccion','nombreCategoria','imagenCategoria','descuento','descripcion','url','metaTitulo','metaDesc','metaKeywords','status']);

        $this->emitTo('front.categoria.categoria','render');

        $this->emit('alert','La Categoría se creó satisfactoriamente');

    }



    public function render()
    {
        $secciones = Secciones::all();
        $data = ['secciones' => $secciones];
        return view('livewire.front.categoria.crear-categoria',$data);
    }
}
