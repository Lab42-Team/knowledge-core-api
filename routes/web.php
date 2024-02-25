<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\KnowledgeCoreController;
use App\Http\Controllers\Admin\NewsController;

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
    //Route::group(['prefix' => 'knowledge-core'], function() {
    //    Route::get('/', [KnowledgeCoreController1::class, 'index'])->name('admin.knowledge-core.index');
    //    Route::get('/create', [KnowledgeCoreController1::class, 'create'])->name('admin.knowledge-core.create');
    //    Route::post('/', [KnowledgeCoreController1::class, 'store'])->name('admin.knowledge-core.store');
    //    Route::get('/{knowledge_core}', [KnowledgeCoreController1::class, 'show'])->name('admin.knowledge-core.show');
    //    Route::get('/{knowledge_core}/edit', [KnowledgeCoreController1::class, 'edit'])->name('admin.knowledge-core.edit');
    //    Route::patch('/{knowledge_core}', [KnowledgeCoreController1::class, 'update'])->name('admin.knowledge-core.update');
    //    Route::delete('/{knowledge_core}', [KnowledgeCoreController1::class, 'destroy'])->name('admin.knowledge-core.delete');
    //});
});
//name('admin.')->
//Route::group(['prefix' => 'admin'], function() {
//    Route::resource('knowledge-core', KnowledgeCoreController::class);
//    Route::resource('news', NewsController::class);
//});
Route::group(['prefix' => 'admin'], function() {
    Route::name('admin.')->group(function () {
        Route::resource('knowledge-core', KnowledgeCoreController::class);
        Route::resource('news', NewsController::class);
    });
});
//Route::resource('admin/knowledge-core', KnowledgeCoreController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
