<?php

use App\Http\Controllers\Category\IndexCategoryController;
use App\Http\Controllers\Category\CreateCategoryController;
use App\Http\Controllers\Category\StoreCategoryController;
use App\Http\Controllers\Category\ShowCategoryController;
use App\Http\Controllers\Category\EditCategoryController;
use App\Http\Controllers\Category\UpdateCategoryController;
use App\Http\Controllers\Category\DestroyCategoryController;

use App\Http\Controllers\Item\IndexItemController;
use App\Http\Controllers\Item\CreateItemController;
use App\Http\Controllers\Item\StoreItemController;
use App\Http\Controllers\Item\ShowItemController;
use App\Http\Controllers\Item\EditItemController;
use App\Http\Controllers\Item\UpdateItemController;
use App\Http\Controllers\Item\DestroyItemController;

use Illuminate\Support\Facades\Route;

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

// Routes for Item resources
Route::get('/items', [IndexItemController::class, '__invoke'])->name('items.index');
Route::get('/items/create', [CreateItemController::class, '__invoke'])->name('items.create');
Route::post('/items', [StoreItemController::class, '__invoke'])->name('items.store');
Route::get('/items/{item}', [ShowItemController::class, '__invoke'])->name('items.show');
Route::get('/items/{item}/edit', [EditItemController::class, '__invoke'])->name('items.edit');
Route::put('/items/{item}', [UpdateItemController::class, '__invoke'])->name('items.update');
Route::patch('/items/{item}', [UpdateItemController::class, '__invoke']);  // Handles PATCH requests as well
Route::delete('/items/{item}', [DestroyItemController::class, '__invoke'])->name('items.destroy');

// Routes for Category resources
Route::get('/categories', [IndexCategoryController::class, '__invoke'])->name('categories.index');
Route::get('/categories/create', [CreateCategoryController::class, '__invoke'])->name('categories.create');
Route::post('/categories', [StoreCategoryController::class, '__invoke'])->name('categories.store');
Route::get('/categories/{category}', [ShowCategoryController::class, '__invoke'])->name('categories.show');
Route::get('/categories/{category}/edit', [EditCategoryController::class, '__invoke'])->name('categories.edit');
Route::put('/categories/{category}', [UpdateCategoryController::class, '__invoke'])->name('categories.update');
Route::patch('/categories/{category}', [UpdateCategoryController::class, '__invoke']);  // Handles PATCH requests as well
Route::delete('/categories/{category}', [DestroyCategoryController::class, '__invoke'])->name('categories.destroy');
