<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;

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

Route::resource('recipes', RecipeController::class);
Route::resource('categories', CategoryController::class);

Route::middleware('auth')->group(function() {
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/showRecipes', [App\Http\Controllers\RecipeController::class, 'index'])->name('showRecipes');
// Route::get('/showTheRecipe/{id}', [App\Http\Controllers\RecipeController::class, 'show'])->name('showTheRecipe');
// Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
// Route::get('/createRecipe', [App\Http\Controllers\RecipeController::class, 'create'])->name('createRecipe');
// Route::post('/submitrecipe', [App\Http\Controllers\RecipeController::class, 'store'])->name('submitrecipe');
// Route::get('/categoryRecipe/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categoryRecipe');

// Route::get('/editRecipe/{id}', [App\Http\Controllers\RecipeController::class, 'edit'])->name('editRecipe');
// Route::post('/updateRecipe', [App\Http\Controllers\RecipeController::class, 'update'])->name('updateRecipe');
