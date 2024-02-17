<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\KnowledgeCoreController;

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
    return view('welcome');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    //Route::group(['namespace' => 'Main'], function() {
    Route::get('/', [IndexController::class, 'index']);
    //});

    //Route::group(['namespace' => 'KnowledgeCore', 'prefix' => 'knowledge-core'], function() {
    Route::group(['prefix' => 'knowledge-core'], function() {
        Route::get('/', [KnowledgeCoreController::class, 'index'])->name('admin.knowledge-core.index');
        Route::get('/create', [KnowledgeCoreController::class, 'create'])->name('admin.knowledge-core.create');
        Route::post('/', [KnowledgeCoreController::class, 'store'])->name('admin.knowledge-core.store');
        Route::get('/{knowledge_core}', [KnowledgeCoreController::class, 'show'])->name('admin.knowledge-core.show');
        Route::get('/{knowledge_core}/edit', [KnowledgeCoreController::class, 'edit'])->name('admin.knowledge-core.edit');
        Route::patch('/{knowledge_core}', [KnowledgeCoreController::class, 'update'])->name('admin.knowledge-core.update');
        Route::delete('/{knowledge_core}', [KnowledgeCoreController::class, 'destroy'])->name('admin.knowledge-core.delete');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
