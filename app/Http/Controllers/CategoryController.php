<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function store(Request $request){
    $category=new Category();
    $category->name=$request->name;
    $category->save();
        return redirect('/categories');
   }

   public function create(){
    return view('category-create');
   }

   public function index(){
    $categories=Category::all();
    return view('category-list',['categories'=>$categories]);
   }
}
