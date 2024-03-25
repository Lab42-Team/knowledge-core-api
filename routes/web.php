<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\KnowledgeCoreController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\DevelopmentsController;
use App\Http\Controllers\Admin\ProjectController;

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
Route::get('locale/{locale}', [MainController::class, 'changeLocale'])->name('locale');

Route::middleware(['set_locale'])->group(function() {
    Route::get('/', function () {
        return view('client/welcome');
    });

    Route::group(['prefix' => 'admin'], function() {
        Route::get('/', [IndexController::class, 'index'])->name('admin.index');
        Route::name('admin.')->group(function () {
            Route::resource('knowledge-core', KnowledgeCoreController::class);
            Route::resource('news', NewsController::class);
            Route::resource('developments', DevelopmentsController::class);
            Route::resource('project', ProjectController::class);
        });
    });
});
