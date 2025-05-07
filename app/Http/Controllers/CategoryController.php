<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/categories');
    }

    public function create()
    {
        return view('category-create');
    }

    public function index()
    {
        // DB::listen(function ($query) {
        //     logger($query->sql);
        // });
        $categories = Category::
        orderBy('id','ASC')
        ->paginate(5);
        return view('category-list', ['categories' => $categories]);
    }

    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        if ($category) {
            $category->delete($request->id);
            return redirect(route('categories.list'));
        }
        abort(404);
    }

    public function edit(Request $request) {
        $category = Category::findOrFail($request->id);
        return view('category-edit',['category'=>$category]);
    }

    public function update(Request $request) {
        $category = Category::find($request->id);
        $category->name=$request->name;
        $category->save();
        return redirect(route('categories.list'));
    }
}
