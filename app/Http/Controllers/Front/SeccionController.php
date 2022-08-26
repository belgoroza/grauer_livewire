<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Front\Seccion;

class SeccionController extends Controller
{
    


    public function index($seccion)
    {
    	$secciones = Seccion::all();
    	// $seccion = json_encode(json_decode($secciones));
    	
    	return view('front.'.$seccion)->with(compact('secciones','seccion'));
    }

    public function welcome()
    {
    	$secciones = Seccion::all();
    	return view('front.welcome_2')->with(compact('secciones'));
    }

    // public function secciones()
    // {
    // 	$secciones = Seccion::all();

    // 	return view('front.seccion')->with(compact('secciones'));
    // }
}
