<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasController;
use App\Http\Controllers\UdomiteljController;
use App\Http\Controllers\UgovorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pas/getAll', [PasController::class, 'getAll'])->name('pas.getAll');
Route::post('pas/add', [PasController::class, 'add'])->name('pas.add');
Route::get('pas/id/{id}', [PasController::class, 'getById'])->name('pas.getById');
Route::delete('pas/delete/{id}', [PasController::class, 'delete'])->name('pas.delete');
Route::get('pas/getAllUnadopted', [PasCOntroller::class, 'getAllUnadopted'])->name('pas.getAllUnadopted');

Route::get('udomitelj/getAll', [UdomiteljController::class, 'getAll'])->name('udomitelj.getAll');
Route::post('udomitelj/add', [UdomiteljController::class, 'add'])->name('udomitelj.add');
Route::get('udomitelj/id/{id}', [UdomiteljController::class, 'getById'])->name('udomitelj.getById');
Route::delete('udomitelj/delete/{id}', [UdomiteljController::class, 'delete'])->name('udomitelj.delete');

Route::get('ugovor/getAll', [UgovorController::class, 'getAll'])->name('ugovor.getAll');
Route::post('ugovor/add', [UgovorController::class, 'add'])->name('ugovor.add');
Route::get('ugovor/id/{id}', [UgovorController::class, 'getById'])->name('ugovor.getById');
Route::delete('ugovor/delete/{id}', [UgovorController::class, 'delete'])->name('ugovor.delete');