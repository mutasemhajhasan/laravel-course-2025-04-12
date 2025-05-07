<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', function () {
    return view('post-create');
});

Route::get('/posts/{id}', function () {
    return view('post-details');
})->whereNumber('id');

Route::get('/posts', function () {
    return view('posts');
});

Route::post('/posts', function () {
    return redirect('/');
    // return view('posts');
});

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

Route::post('/categories', [CategoryController::class, 'store']);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.list');
Route::get('/categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
