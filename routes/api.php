<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/categories', function () {
    return Category::paginate(10);
});
