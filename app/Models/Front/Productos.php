<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = 'fg_productos';
    protected $fillable = ['seccion_id','categoria_id','codigo', 'descripcion','diseno','banda','status','comentario'];

    public static  function search($searchKey)
    {
        return self::where('codigo', 'LIKE', '%' . $searchKey . '%')
            ->orWhere('descripcion', 'LIKE', '%' . $searchKey . '%');
    }

    public function secciones()
    {
        return $this->hasMany(Secciones::class,'id','seccion_id');
    }

    public function categorias()
    {
        return $this->hasMany(Categorias::class,'id','categoria_id');
    }

}
