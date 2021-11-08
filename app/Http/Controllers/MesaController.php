<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Platillo;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function index()
    {
        $mesas = Mesa::all();
        return view('mesas.indexView')->with(['mesas' => $mesas]);
    }

    public function create()
    {
        return view('mesas.editView');
    }

    public function edit(int $mesa_id)
    {
        $mesa = Mesa::find($mesa_id);
        return view('mesas.editView')->with(['mesa' => $mesa]);
    }

    public function viewOrdenByMesa(int $mesa_id)
    {
        $platillos = Platillo::all();
        return view('orden.addPlatillo')->with(['platillos' => $platillos]);
    }
}
