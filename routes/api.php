<?php

use App\Http\Controllers\API\AddressController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('province')->name('api.province.')->group(function () {
    Route::get('', [AddressController::class, 'getProvinces'])->name('index');
    Route::get('{province}', [AddressController::class, 'getProvince'])->name('show');
    Route::get('{province}/city', [AddressController::class, 'getCities'])->name('city');
});
Route::get('city', [AddressController::class, 'getAllCities'])->name('city');
