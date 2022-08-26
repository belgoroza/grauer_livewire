<?php

namespace App\Http\Livewire\Front\Producto;
use App\Models\User;
use App\Models\Front\Productos;
use Livewire\Component;

class BuscarProducto extends Component
{
    
    public $results;
    public $search;
    public $selected;
    public $showDropdown;

    // public function query() {
    //     return User::where('name', 'like', '%'.$this->search.'%')->orderBy('name');
    // }

    public function query() {
        return Productos::where('codigo', 'like', '%'.$this->search.'%')->orderBy('codigo');
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

    // public function render()
    // {
    //     return view('livewire.autocomplete');
    // }

    public function productoId($id)
    {
        $this->emit('productoId',$id);
        // $this->idProducto = $id;
        // dd($id);die;
    }



    public function render()
    {
        return view('livewire.front.producto.buscar-producto');
    }
}



