<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo_ingrediente extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "platillos_ingredientes";
}
