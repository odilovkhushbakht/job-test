<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\BlogAuthorController;
use App\Http\Controllers\Blog\BlogCategoryController;

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

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/author', [BlogAuthorController::class, 'store']);
Route::get('/blog/category', [BlogCategoryController::class, 'store']);
Route::get('/blog/add', [BlogController::class, 'store']);
Route::get('/blog/{id}', [BlogController::class, 'show']);
Route::get('/blog/update/{id}', [BlogController::class, 'update']);
/*
Route::get('/', function () {
    return view('welcome');
});
*/