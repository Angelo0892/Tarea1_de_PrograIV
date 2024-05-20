<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Controllers\AuthenticatedSessionController;
use Laravel\Sanctum\Http\Controllers\RegisteredUserController;
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

Route::controller(AnimalController::class)->group(function(){
    Route::get('/animal', 'index')->name('animal.index');
    Route::post('/animal', 'store')->name('animal.store');
    Route::put('/animal/{animal}', 'update')->name('animal.update');
    Route::delete('/animal/{animal}', 'destroy')->name('animal.destroy');
});
