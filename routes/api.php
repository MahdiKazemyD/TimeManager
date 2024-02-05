<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\GiftController;
use App\Http\Controllers\API\ReportController;
use App\Http\Controllers\API\SloganController;
use App\Http\Controllers\API\TargetController;
use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Admin\YearController as AdminYear;
use App\Http\Controllers\API\Admin\MonthController as AdminMonth;
use App\Http\Controllers\API\Admin\DayController as AdminDay;
use App\Http\Controllers\API\Admin\UserController as AdminUser;

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

Route::prefix('auth')->group(function (){
    Route::post('register', [AuthController::class , 'register']);
    Route::post('login', [AuthController::class , 'login']);
});

Route::prefix('admin')->group(function (){
    Route::prefix('users')->controller(AdminUser::class)->group(function (){
        Route::get('/', 'index');
        Route::get('block/{id}', 'block');
        Route::delete('destroy/{id}', 'destroy');
    });
    Route::apiResource('years', AdminYear::class);
    Route::get('month/created', [AdminMonth::class, 'createMonths']);
    Route::get('day/created', [AdminDay::class, 'createDays']);
});

//Route::middleware('auth:api')->group(function (){
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('targets', TargetController::class);
    Route::apiResource('tasks', TaskController::class);
    Route::apiResource('report', ReportController::class);
    Route::apiResource('gifts', GiftController::class);
    Route::apiResource('slogan', SloganController::class);
    Route::apiResource('user', UserController::class);

    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
//});

