<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminCatController;
use App\Http\Controllers\AdminPostController;

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

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::get('/admin_cat_list', [AdminCatController::class, 'admin_cat_list']);
Route::get('/admin_cat_add', [AdminCatController::class, 'admin_cat_add']);
Route::get('/admin_cat_edit', [AdminCatController::class, 'admin_cat_edit']);

Route::get('/admin_sub_cat_list', [AdminCatController::class, 'admin_sub_cat_list']);
Route::get('/admin_sub_cat_add', [AdminCatController::class, 'admin_sub_cat_add']);
Route::get('/admin_sub_cat_edit', [AdminCatController::class, 'admin_sub_cat_edit']);


Route::get('/admin_cat_child_list', [AdminCatController::class, 'admin_cat_child_list']);
Route::get('/admin_cat_child_add', [AdminCatController::class, 'admin_cat_child_add']);
Route::get('/admin_cat_child_edit', [AdminCatController::class, 'admin_cat_child_edit']);


Route::get('/admin_product_list', [AdminPostController::class, 'admin_product_list']);
Route::get('/admin_product_add', [AdminPostController::class, 'admin_product_add']);
Route::get('/admin_product_edit', [AdminPostController::class, 'admin_product_edit']);


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');

})->name('dashboard');
