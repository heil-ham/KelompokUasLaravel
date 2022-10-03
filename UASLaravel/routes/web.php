<?php

use App\Http\Controllers\ResourceController;
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


Route::get('/', [ResourceController::class, 'index']);

Route::get('create', [ResourceController::class, 'create']);
Route::post('', [ResourceController::class, 'store']);

Route::get('{id}', [ResourceController::class, 'show']);

Route::get('{id}/edit', [ResourceController::class, 'edit']);
Route::put('{id}', [ResourceController::class, 'update']);

Route::delete('{id}', [ResourceController::class, 'destroy']);
