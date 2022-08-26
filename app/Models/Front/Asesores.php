<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesores extends Model
{
    use HasFactory;

    protected $table = "fg_asesores";

    protected $fillable = ['nombre','documento','telefono','direccion','ciudad','comentario'];
}
