<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {return view('front.welcome_2');});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { return view('dashboard');})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () 
{
	Route::namespace("App\\Http\\Livewire\\Front")->group(function ()             
	{ 
		Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
		Route::get('/dashboard/secciones', Seccion\Seccion::class )->name('secciones');
		Route::get('/dashboard/categorias', Categoria\Categoria::class )->name('categorias');
		Route::get('/dashboard/subcategorias', Seccion::class )->name('subcategorias');
		Route::get('/dashboard/productos', Producto\Producto::class )->name('productos');
		Route::get('/dashboard/servicios', Servicio\Servicio::class )->name('servicios');
		Route::get('/dashboard/planta', Planta\Planta::class )->name('planta');
		Route::get('/dashboard/bodega', Servicio\BodegaServicio::class )->name('bodega');
		Route::get('/dashboard/entrega', Servicio\BodegaEgreso::class )->name('entrega');
		Route::get('/dashboard/asesores', Asesor\Asesor::class )->name('asesores');
		Route::get('/dashboard/clientes', Cliente\Cliente::class )->name('clientes');
		Route::get('/dashboard/ingresos', Ingreso\Ingreso::class )->name('ingresos');
		Route::get('/dashboard/egresos', Egreso\Egreso::class )->name('egresos');
		Route::get('/dashboard/buscar-productos', Producto\BuscarProducto::class )->name('buscar-productos');
		Route::get('/dashboard/blancas', Blanca\Blanca::class )->name('blancas');
		Route::get('/dashboard/editar-blancas', Blanca\EditarBlanca::class )->name('editar');
		Route::get('/dashboard/entregar-blancas', Blanca\EntregarBlanca::class )->name('entregar.blancas');
	});
});


Route::namespace("App\\Http\\Livewire\\Admin")->group(function ()             
{ 
	Route::get('/ver-blancas',Blanca::class )->name('ver-blancas');
	Route::get('/ver-catalogo',Catalogo\Catalogo::class )->name('ver-catalogo');
	Route::get('/catalogo-dos',Catalogo\CatalogoDos::class )->name('catalogo-dos');

});


Route::namespace("App\\Http\\Controllers\\Front")->group(function ()             
{     
    Route::get('/','SeccionController@welcome')->name('home');
    Route::get('/{seccion}','SeccionController@index')->name('seccion');
    // Route::get('/titulo/{id}',Subtitulo::class)->name('subtitulo');
    // Route::get('categories/{category}', CategoryPosts::class)->name('category');
    //Route::get('/categ', Counter::class)->name('categ');
    // Route::get('{slug}', Detail::class)->name('post-detail');    
});
