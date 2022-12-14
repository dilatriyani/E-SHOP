<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Frontend\FrontendTampilanController;

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
    return view('welcome');
});


Route::get('/',[FrontendTampilanController::class, 'index']);
Route::get('category',[FrontendTampilanController::class, 'category']);
Route::get('view-category{slug}',[FrontendTampilanController::class, 'viewcategory']);
Route::get('category/{cate_slug}/{prod_slug}',[FrontendTampilanController::class, 'productview']);

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::post('add-to-cart', [App\Http\Controllers\Frontend\CartController::class, 'addProduct']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function (){
    Route::get("/dashboard", [FrontendController::class, "index"]);
    Route::get("/categories", [CategoryController::class, "index"]);
    Route::get("/add-category", [CategoryController::class, "add"]);
    Route::post("/insert-category", [CategoryController::class, "insert"]);
    Route::get("edit-prod/{id}", [CategoryController::class, "edit"]);
    Route::put("update-category/{id}", [CategoryController::class, "update"]);
    Route::get("delete-category/{id}", [CategoryController::class, "destroy"]);

    Route::get('products', [ProductsController::class, 'index']);
    Route::get('add-products', [ProductsController::class, 'add']);
    Route::post('insert-products', [ProductsController::class, 'insert']);

    Route::get('edit-products/{id}', [ProductsController::class, 'edit']);
    Route::put('update-products/{id}', [ProductsController::class, 'update']);
    Route::get('delete-products/{id}', [ProductsController::class, 'destroy']);
    });


