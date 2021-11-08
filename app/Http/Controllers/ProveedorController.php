<?php

namespace App\Http\Controllers;

use App\Mail\ProveedorMail;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProveedorController extends Controller
{

    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index')->with(['proveedores' => $proveedores]);
    }

    public function create()
    {
        return view('proveedores.editView');
    }

    public function edit(int $id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedores.editView')->with(['proveedor' => $proveedor]);
    }

    public function delete(int $id)
    {
        # code...
    }

    public function sendMail()
    {
        Mail::to('pedro@test.com')->send(new ProveedorMail(""));
    }
}
