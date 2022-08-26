<?php

namespace App\Http\Livewire\Front\Producto;
use App\Models\Front\Secciones;
use App\Models\Front\Categorias;
use App\Models\Front\Productos;
use Livewire\Component;

class CrearProducto extends Component
{
    
    public $open = false;

    public $seccion, $categoria, $codigo, $descripcion, $diseno, $banda, $status, $precio, $comentario ;

    protected $rules = [
        'seccion' => 'required',
        'categoria' => 'required',
        'codigo' => 'required',
        'descripcion' => 'required',
        'diseno' => 'required',
        'banda' => 'required',
        'status' => 'required',
        'precio' => 'required',
        'comentario' => 'required',
    ];

    public function updated($propertyName){$this->validateOnly($propertyName);}

    public function save()
    {
        
        $this->validate();

        Productos::create([
            'seccion_id' => $this->seccion,
            'categoria_id' => $this->categoria,
            'codigo' => $this->codigo,
            'descripcion' => $this->descripcion,
            'diseno' => $this->diseno,
            'banda' => $this->banda,
            'status' => $this->status,
            'precio' => $this->precio,
            'comentario' => $this->comentario
        ]);

        $this->reset();

        $this->emitTo('front.producto.producto','render');

        // $this->emit('alert','El asesor se creó satisfactoriamente');

        session()->flash('message','Producto agregado correctamente..!');

    }






    public function render()
    {
        $secciones = Secciones::all();
        $categorias = Categorias::all();
        return view('livewire.front.producto.crear-producto',compact('secciones','categorias'));
    }














    // public function render()
    // {
    //     return view('livewire.front.producto.crear-producto');
    // }
}
