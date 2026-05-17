<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DisciplinaController;
use App\Http\Controllers\Api\NotaController;

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

Route::get('/disciplinas', [DisciplinaController::class, 'index']);

Route::post('/disciplinas', [DisciplinaController::class, 'store']);

Route::post('/notas', [NotaController::class, 'store']);
