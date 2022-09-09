<?php

use App\Http\Controllers\UsuariosController;
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

Route::get('/', [UsuariosController::class, 'index']);
Route::get('/deletar/{id}', [UsuariosController::class, 'destroy']);
Route::post('/criar', [UsuariosController::class, 'store']);
Route::post('/atualizar', [UsuariosController::class, 'update']);
Route::get('/editar/{id}', [UsuariosController::class, 'edit']);

