<?php

use App\Http\Controllers\Api\bookphoneController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data/all', [bookphoneController::class , 'index']);
Route::post('data/add', [bookphoneController::class , 'insert']);
Route::post('data/show', [bookphoneController::class , 'show']);
Route::post('data/update', [bookphoneController::class , 'update']);
Route::delete('data/{id}/delete', [bookphoneController::class , 'delete']);
