<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategorieController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [CategorieController::class, 'index'])->name('category');
Route::get('/{category}/posts', [HomeController::class, 'postsByCategory'])->name('category.posts');
Route::resource('posts', PostController::class );
Route::get('change/lang/{lang}', [HomeController::class, 'changeLang'])->name('change.lang');