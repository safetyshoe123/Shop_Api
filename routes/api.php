<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BranchController;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\ShopController;

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
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::controller(EmployeeController::class)->group(function () {
    Route::post('empLogin', 'employeeLogin');
    Route::post('empRegister', 'employeeRegister');
});

Route::controller(BranchController::class)->group(function () {
             //Alias    function name
    Route::get('indexBranch', 'indexBranch');
    Route::get('showBranch/{id}', 'showBranchId');
    Route::post('createBranch', 'createBranch');
    Route::post('updateBranch/{id}', 'updateBranch');
    Route::delete('deleteBranch/{id}', 'deleteBranch');
});

Route::controller(ShopController::class)->group(function () {
              //Alias   function name
    Route::get('index', 'indexShop');
    Route::get('show/{name}', 'showShopId');
    Route::post('create', 'createShop');
    Route::post('update/{id}', 'updateShop');
    Route::delete('delete/{id}', 'deleteShop');
});

// Route::resource('branch', BranchController::class);
// Route::resource('shop', ShopController::class);
