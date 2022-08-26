<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingresos extends Model
{
    use HasFactory;

    protected $table = 'fg_ingresos';

    protected $fillable = ['id','fecha','tipo','estado','documento_tipo','documento_numero','oficina','comentario'];

}
