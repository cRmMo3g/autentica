<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DarbinieksController;
use App\Http\Controllers\VelosipediController;
use App\Http\Controllers\DarbinieksVelosipedsController;
use App\Http\Controllers\TransportsController;
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

Route::get('/',[DarbinieksVelosipedsController::class, 'index'])->name('sakumlapa.index');
Route::post('/delete/{id}',[DarbinieksVelosipedsController::class, 'delete'])->name('dzest_velo_darbiniekam');
Route::post('/create',[DarbinieksVelosipedsController::class, 'create'])->name('pievienot_velo_darbiniekam');
Route::get('/darbinieku',[DarbinieksController::class, 'index'])->name('darbinieku.index');
Route::post('/darbinieku/delete/{id}',[DarbinieksController::class, 'delete'])->name('dzest');
Route::post('/darbinieku/create',[DarbinieksController::class, 'create'])->name('pievienot');
Route::get('/velosipedi',[VelosipediController::class, 'index'])->name('velosipedi.index');
Route::post('/velosipedi/delete/{id}',[VelosipediController::class, 'delete'])->name('dzest_braucamo');
Route::post('/velosipedi/create',[VelosipediController::class, 'create'])->name('pievienot_braucamo');


Route::get('/mail',[TransportsController::class, 'index'])->name('pollend');
Route::get('/transports',[TransportsController::class, 'index'])->name('transports');
Route::post('/transports/atlase', [TransportsController::class, 'getDate'])->name('atlase');
Route::post('/transports/create', [TransportsController::class, 'create']);
Route::get('/transports/delete/{id}',[TransportsController::class, 'delete'])->name('dzest_rezervaciju');


