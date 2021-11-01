<?php

namespace App\View\Components;

use App\Models\Platillo;
use Illuminate\View\Component;

class PlatilloCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $nombre;
    public $descripcion;
    public $precio;
    public $img_path;

    public function __construct(int $id = -1)
    {
        $platillo = Platillo::find($id);
        if(isset($platillo)){
            $this->nombre = $platillo->nombre;
            $this->descripcion = $platillo->descripcion;
            $this->precio = $platillo->precio;
            $this->img_path = $platillo->img_path;
        } else {
            $this->nombre = '';
            $this->descripcion = '';
            $this->precio = '';
            $this->img_path = '';
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.platillo-card');
    }
}
