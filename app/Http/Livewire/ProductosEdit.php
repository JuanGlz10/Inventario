<?php

namespace App\Http\Livewire;

use App\Models\ProductoI;
use Livewire\Component;

class ProductosEdit extends Component
{

    public ProductoI $prod;

    protected $rules = [
        'prod.nombre' => 'required|max:60',
        'prod.codigo' => 'required|max:60',
        'prod.estado' => 'required',
        'prod.descripcion' => 'required',
        'prod.fecha' => 'required',
        'prod.precio' => 'numeric',
        'prod.existencia' => 'numeric',
    ];

    public function mount($id = null)
    {
        if (is_null($id)) {
            $this->prod = new ProductoI();
        } else {
            $this->prod = ProductoI::find($id);
        }
    }

    public function render()
    {
        return view('livewire.productos-edit');
    }

    public function guardar()
    {

        $this->validate();

        $this->prod->save();

        return redirect()->route('inventario');
    }

}
