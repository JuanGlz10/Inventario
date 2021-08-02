<?php

use App\Http\Livewire\ProductosDel;
use App\Http\Livewire\ProductosEdit;
use App\Http\Livewire\ProductosITable;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Inventario', ProductosITable::class)->middleware('auth')->name('inventario');

Route::get('/Producto/{id}', ProductosEdit::class)->middleware('auth')->where('id', '[0-9]+')
->name('producto.edit');

Route::get('/Producto/new', ProductosEdit::class)->middleware('auth')->name('producto.new');

Route::get('/Producto/delete/{id}', ProductosDel::class)->middleware('auth')->name('producto.eliminar');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
