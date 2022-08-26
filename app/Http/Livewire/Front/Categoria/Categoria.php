<?php

namespace App\Http\Livewire\Front\Categoria;
use App\Models\Front\Categorias;
use Livewire\Component;

class Categoria extends Component
{
 
    public $search;

    public $sort = "id";

    public $direction = "desc";

    protected $listeners = ['render'];

    public function render()
    {
        // $categorias = Categorias::all();
        $categorias = Categorias::where('category_name','like','%' .$this->search. '%')
                    ->orderBy($this->sort, $this->direction)
                    ->get();
        return view('livewire.front.categoria.categoria', compact('categorias'));
    }

    public function order($sort)
    {
        
        if ($this->sort == $sort) 
        {
            if ($this->direction == "desc") 
            {
                $this->direction = "asc";
            }
            else
            {
                $this->direction = "desc";
            }
        }
        else
        {
            $this->sort = $sort;
            $this->direction = "desc";
        }

    }

}
