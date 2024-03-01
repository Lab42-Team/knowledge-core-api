<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client/welcome');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', [IndexController::class, 'index']);
});
