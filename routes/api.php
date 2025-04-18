<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DevelopmentsController;
use App\Http\Controllers\KnowledgeCoreController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
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
Route::group(['middleware' => ['cors', 'api'], 'prefix' => 'auth/'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::get('me', [AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});

Route::group(['middleware' => ['cors', 'api'], 'prefix' => 'v1/'], function () {
    Route::get('news/get-statuses', [NewsController::class, 'getStatuses']);
    Route::get('news/get-status-name/{status}', [NewsController::class, 'getStatusName']);
    Route::apiResource('knowledge-core', KnowledgeCoreController::class);
    Route::apiResource('developments', DevelopmentsController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('news', NewsController::class);
    Route::apiResource('project', ProjectController::class);
});
