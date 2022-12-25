<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasController;
use App\Http\Controllers\UdomiteljController;

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

Route::get('pas/getAll', [PasController::class, 'getAll'])->name('pas.getAll');
Route::post('pas/add', [PasController::class, 'add'])->name('pas.add');
Route::get('pas/id/{id}', [PasController::class, 'getById'])->name('pas.getById');
Route::delete('pas/delete/{id}', [PasController::class, 'delete'])->name('pas.delete');

Route::get('udomitelj/getAll', [UdomiteljController::class, 'getAll'])->name('udomitelj.getAll');
Route::post('udomitelj/add', [UdomiteljController::class, 'add'])->name('udomitelj.add');
Route::get('udomitelj/id/{id}', [UdomiteljController::class, 'getById'])->name('udomitelj.getById');
Route::delete('udomitelj/delete/{id}', [UdomiteljController::class, 'delete'])->name('udomitelj.delete');