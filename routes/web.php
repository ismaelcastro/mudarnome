<?php

use App\Http\Controllers\Site\PagesController;
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

Route::get('/', [PagesController::class,'index'] );
Route::get('/planos', [PagesController::class,'planos'] );
Route::get('/privacidade', [PagesController::class,'privacidade'] );
Route::get('/termos-de-uso', [PagesController::class,'termos_de_uso'] );