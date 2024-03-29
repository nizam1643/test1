<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ProjectController;

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

Route::prefix('projects')->group(function () {
    Route::get('apiwithoutkey', [ProjectController::class, 'apiWithoutKey'])->name('apiWithoutKey');
    Route::get('apiwithkey', [ProjectController::class, 'apiWithKey'])->name('apiWithKey');
});


Route::resource('projects', ProjectController::class);

Route::resource('posts', ClientController::class);

Route::get('/posts/{id}', [ClientController::class,'postById'])->name('posts.getbyid');
