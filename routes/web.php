<?php

use App\Http\Controllers\PesquisaSatisfacaoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CsatController;
Route::get('/', function () {
    return view('welcome');
})->name('home-login');

Auth::routes();
Route::resource('/csat',CsatController::class);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/posts', [HomeController::class, 'index'])->name('post');
Route::get('/pesquisa-satisfacao',[PesquisaSatisfacaoController::class,'index'])->name('pesquisa.satisfacao.index');

Route::post('/pesquisa-satisfacao',[PesquisaSatisfacaoController::class,'store'])->name('pesquisa.satisfacao.store');
