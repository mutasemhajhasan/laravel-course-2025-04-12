<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'doLogin']);


Route::get('/posts/create', [PostsController::class,'create'])->name('posts.create')->middleware('auth');
Route::get('/posts', [PostsController::class,'index'])->name('posts.index')->middleware('auth');
Route::post('/posts', [PostsController::class,'store'])->name('posts.store')->middleware('auth');;

Route::get('/posts/{id}', function () {
    return view('post-details');
})->whereNumber('id');



// Route::post('/posts', function () {
//     //   $file=request()->file('file');
//     // $path=$file->store('assets/images','public');
//     // dd(asset("storage/$path"));
//     // $contnt=request('content');
//     return redirect('/');
//     // return view('posts');
// });

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

Route::post('/categories', [CategoryController::class, 'store']);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.list');
Route::get('/categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
