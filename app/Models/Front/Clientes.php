<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $table = "fg_clientes";
    protected $fillable = ['nombre','documento','telefono','direccion','ciudad','comentario'];
}
