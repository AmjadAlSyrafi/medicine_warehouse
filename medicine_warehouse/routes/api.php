<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineOrderController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PharmaciyController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\CompanyOfMedicineController;
use App\Http\Controllers\ClassificationController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});



// API Resource Routes for Medicines
Route::apiResource('/medicines', MedicineController::class);


// API Resource Routes for MedicineOrders
Route::apiResource('/medicine-orders', MedicineOrderController::class);


// API Resource Routes for Pharmacies
Route::apiResource('/pharmacies', PharmaciyController::class);


// API Resource Routes for Warehouses
Route::apiResource('/warehouses', WarehouseController::class);


// API Resource Routes for Companies of Medicine
Route::apiResource('/companies-of-medicine', CompanyOfMedicineController::class);


// API Resource Routes for Classifications
Route::apiResource('/classifications', ClassificationController::class);






