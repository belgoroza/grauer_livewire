<?php

namespace App\Http\Livewire\Front\Producto;
use App\Models\Front\Productos;
use Livewire\Component;

class Producto extends Component
{
    
	public $search;
    public $vista = true;
    public $sort = "id";
    public $direction = "desc";
    protected $listeners = ['render'];
    
    public function render()
    {
        // $productos = Productos::where('codigo','like','%' .$this->search. '%')
        //             ->orderBy($this->sort, $this->direction)
        //             ->paginate(10);
        $productos = Productos::with([
                'secciones'=>function($query){$query->select('id','name');},
                'categorias'=>function($query){$query->select('id','category_name');}])
                ->where('codigo','like','%' .$this->search. '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate(10);
        $data = [ 'productos' => $productos];
        return view('livewire.front.producto.producto',$data);
    }


}
