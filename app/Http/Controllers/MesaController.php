<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function index()
    {
        return view('components.mesa-card');
    }
}
