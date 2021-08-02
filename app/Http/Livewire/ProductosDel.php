<?php

namespace App\Http\Livewire;

use App\Models\ProductoI;
use Livewire\Component;

class ProductosDel extends Component
{

    public ProductoI $prod;

    public function render()
    {
        return view('livewire.productos-del');
    }

    public function mount($id = null)
    {
        if (is_null($id)) {
            $this->prod = new ProductoI();
        } else {
            $this->prod = ProductoI::find($id);
        }
    }

    public function eliminar()
    {
        $this->prod->delete();
        return redirect()->route('inventario')->with("mensaje", "Producto Eliminado");
    }

    /*public function destroy(ProductoI $prod)
    {
        $prod->delete();
        return redirect()->route("inventario")->with("mensaje", "Producto eliminado");
    }*/

}
