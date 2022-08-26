<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $table = 'fg_categorias';

    protected $fillable = ['parent_id', 'section_id','category_name','category_image','category_discount','description','url','meta_title','meta_description','meta_keywords','status'];

}
