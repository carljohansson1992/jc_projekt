<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/showRecipes', [App\Http\Controllers\RecipeController::class, 'index'])->name('showRecipes');
Route::get('/showTheRecipe/{id}', [App\Http\Controllers\RecipeController::class, 'show'])->name('showTheRecipe');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/createRecipe', [App\Http\Controllers\RecipeController::class, 'create'])->name('createRecipe');
Route::post('/submitrecipe', [App\Http\Controllers\RecipeController::class, 'store'])->name('submitrecipe');
