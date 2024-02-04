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

Route::get('/' , function (){
    return 1;
});
Route::prefix('auth')->group(function (){
    Route::post('register', [AuthController::class , 'register']);
    Route::post('login', [AuthController::class , 'login']);
});

Route::prefix('admin')->group(function (){
    Route::apiResource('users', AdminUser::class);
    Route::apiResource('years', AdminYear::class);
    Route::apiResource('months', AdminMonth::class);
    Route::apiResource('days', AdminDay::class);
});

Route::middleware('auth:api')->group(function (){
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('targets', TargetController::class);
    Route::apiResource('tasks', TaskController::class);
    Route::apiResource('report', ReportController::class);
    Route::apiResource('gifts', GiftController::class);
    Route::apiResource('slogan', SloganController::class);
    Route::apiResource('user', UserController::class);

//    Route::post('logout', 'AuthController@logout');
//    Route::post('refresh', 'AuthController@refresh');
//    Route::post('me', 'AuthController@me');
});

