<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/posts/create', function () {
    return view('post-create');
});

Route::get('/posts/{id}', function () {
    return view('post-details');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::post('/posts', function () {
    // $contnt=request('content');

    // dd( Request::post('content'));
    return view('posts');
});
