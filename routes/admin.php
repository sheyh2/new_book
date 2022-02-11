<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.main');
})->name('admin.main');

Route::prefix('category')->group(function (Router $router) {
    $router->get('index', [CategoryController::class, 'index'])->name('admin.categories.index');
    $router->get('create', [CategoryController::class, 'create'])->name('admin.categories.create');
    $router->put('store', [CategoryController::class, 'store'])->name('admin.categories.store');

    $router->get('edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    $router->post('update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    $router->get('delete/{id}', [CategoryController::class, 'delete'])->name('admin.categories.delete');
});

Route::prefix('sub-category')->group(function (Router $router) {
    $router->get('index', [SubCategoryController::class, 'index'])->name('admin.sub_categories.index');
    $router->get('create', [SubCategoryController::class, 'create'])->name('admin.sub_categories.create');
    $router->post('store', [SubCategoryController::class, 'store'])->name('admin.sub_categories.store');
});

Route::prefix('book')->group(function (Router $router) {
    $router->get('index', [BookController::class, 'index'])->name('admin.books.index');
    $router->get('create', [BookController::class, 'create'])->name('admin.books.create');
});
