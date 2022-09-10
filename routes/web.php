<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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
Route::resource('adminpost',\App\Http\Controllers\PostController::class);
Route::get('/',[BlogController::class,'index'])->name('index');
Route::get('/post',[BlogController::class,'post'])->name('post');
Route::get('/author',[BlogController::class,'author'])->name('author');
Route::get('/post/{id}',[BlogController::class,'singe'])->name('single');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
