<?php

namespace App\Http\Controllers;

use App\Mail\ProveedorMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProveedorController extends Controller
{
    public function sendMail()
    {
        Mail::to('pedro@test.com')->send(new ProveedorMail(""));
    }
}
