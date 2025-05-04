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
    // $file=request()->file('file');
    // $path=$file->store('assets/images','public');
    // dd(asset("storage/$path"));
    // $contnt=request('content');

    return redirect('/');

    // return view('posts');
});

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

Route::post('/categories', [CategoryController::class, 'store']);

Route::get('/categories', [CategoryController::class, 'index']);
