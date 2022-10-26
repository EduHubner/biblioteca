<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EmprestimoController;

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
    return redirect('contatos/');
});

Route::get('contatos/buscar', [ContatosController::class, 'buscar']);
Route::resource('contatos', ContatosController::class);

Route::get('livros/buscar', [LivroController::class, 'buscar']);
Route::resource('livros', LivroController::class);

Route::get('emprestimos/buscar', [EmprestimoController::class, 'buscar']);
Route::get('emprestimos/{emprestimo}/devolver', [EmprestimoController::class, 'devolver'])->name('emprestimos.devolver');
Route::resource('emprestimos', EmprestimoController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
