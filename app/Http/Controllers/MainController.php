<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $platillos = Platillo::all();
        return view('main.indexView')->with(['platillos' => $platillos]);
    }
}
