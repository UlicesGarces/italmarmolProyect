<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControler;
use App\Http\Controllers\ProductControler;
use App\Http\Controllers\ProveedoresControler;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admingenerate', AdminControler::class); 

Route::resource('ingresoproductos', ProductControler::class);

Route::resource('proveedores', ProveedoresControler::class); 

//ejemplo 1 regresando texto
Route::get('/aquiruta',function(){
    return '<h1> Esto es un texto de prueba </h1>';    
});

//ejemplo 2 arreglo con array

Route::get('/arreglo',function(){
    $arreglo = [
        'Id'=> '1',
        'Descripción'=> 'Producto',
        
    ];
    return $arreglo;    
});




