<?php
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index']);
Route::get('/sair', [SiteController::class, 'exit']);
Route::get('/usuarios/{qnt}', [SiteController::class, 'users']);
Route::get('/lista_pessoas', [SiteController::class, 'listperson']);
Route::get('/loop_foto', [SiteController::class, 'looppicture']);

