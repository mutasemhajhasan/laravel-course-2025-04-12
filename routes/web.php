<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostsController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $recent = Post::orderBy('id', 'DESC')->with('category')->paginate(10);
    return view('welcome', ['recent' => $recent]);
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/register', [AuthController::class, 'createRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('do-register');

//

Route::middleware(AdminMiddleware::class, 'auth')->group(function () {
    Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
    Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

    Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');

    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

    Route::post('/categories', [CategoryController::class, 'store']);

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.list');
    Route::get('/categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
});

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
