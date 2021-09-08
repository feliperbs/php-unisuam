<?php

use App\Http\Controllers\RecommendationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::prefix('recommendations')->group(function () {
    Route::post('create',[RecommendationController::class, 'createRecommendation']);
    Route::get('get-all',[RecommendationController::class, 'getAllRecommendations']);
    Route::patch('update-status/{id}',[RecommendationController::class, 'updateRecommendationStatus']);
    Route::delete('delete/{id}', [RecommendationController::class, 'deleteOneRecommendation']);
    /*Route::post('save', [ClienteController::class, 'saveCliente']);
    Route::get('view/{id}', [ClienteController::class, 'viewOneCliente']);
    Route::get('view-all', [ClienteController::class, 'viewAllClientes']);
    Route::get('count-all-clients', [ClienteController::class, 'countAllClientes']);
    Route::patch('edit/{id}', [ClienteController::class, 'editOneCliente']);
    Route::delete('delete/{id}', [ClienteController::class, 'deleteOneCliente']);*/
});