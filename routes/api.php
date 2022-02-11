<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/user')->group(function(Router $router) {
//    $router->post('store', [UserController::class, 'store']);
});

Route::prefix('categories')->group(function (Router $router) {
    $router->get('getCategories', [CategoryController::class, 'getCategories']);
    $router->get('getCategory/{id}', [CategoryController::class, 'getCategory']);
});

Route::prefix('book')->group(function (Router $router) {
    $router->get('getBooks', [BookController::class, 'getBooks']);
});
