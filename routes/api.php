<?php

use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController2;
use App\Http\Controllers\API\MemberController;
use App\Http\Controllers\API\MealController;
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

// Route::resource('products', ProductController::class);
// Route::get('products-edit/{id}', [ProductController2::class, 'edit']);
// Route::get('products-cart', [ProductController2::class, 'porduct']);

Route::get('/members', [MemberController::class, 'index'])->name('member'); 
Route::post('/members/add', [MemberController::class, 'addmember'])->name('member.add');
Route::get('/edit/{id}', [MemberController::class, 'edit'])->name('member.edit');
Route::PUT('/update/{id}', [MemberController::class, 'update'])->name('member.update');
Route::delete('/members/{id}', [MemberController::class, 'delete'])->name('member.delete');

//meal
Route::get('/all-members', [MealController::class, 'index'])->name('meal.index');
Route::post('/add-meal', [MealController::class, 'store'])->name('meal.store');