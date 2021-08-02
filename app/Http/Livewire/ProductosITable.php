<?php

namespace App\Http\Livewire;

use App\Models\ProductoI;
use Livewire\Component;
use Livewire\WithPagination;

class ProductosITable extends Component
{

    use WithPagination;

    public $buscar;

    public function render()
    {

        $buscarSQL = '%' . $this->buscar . '%';

        $prods = ProductoI::where('nombre','like',$buscarSQL)->orwhere('codigo','like',$buscarSQL)->paginate(2);

        return view('livewire.productos-i-table', compact('prods'));
    }
}
