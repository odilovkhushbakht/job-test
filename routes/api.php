<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Blog\BlogApiController;
use App\Http\Controllers\Api\Blog\BlogAuthorApiController;
use App\Http\Controllers\Api\Blog\BlogSearchApiController;
use App\Http\Controllers\Api\Blog\BlogCategoryApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/blog/search', [BlogSearchApiController::class, 'searchByTitle']);
Route::resource('/blog/category', BlogCategoryApiController::class)->only(['index', 'store']);
Route::resource('/blog/author', BlogAuthorApiController::class)->only(['index', 'store']);
Route::resource('/blog', BlogApiController::class)->only(['index', 'update', 'show', 'destroy', 'store']);
