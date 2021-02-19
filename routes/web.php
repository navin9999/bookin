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
Route::get('/edit/{id}', [AdminCatController::class, 'show_edit']);
Route::get('/cat_delete/{id}', [AdminCatController::class, 'cat_delete']);
Route::POST('/edit_cat', [AdminCatController::class, 'edit_category']);
// Route::get('/admin_cat_edit/{$id}', [AdminCatController::class, 'admin_cat_edit']);
Route::post('/create_category', [AdminCatController::class, 'create_category']);

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
