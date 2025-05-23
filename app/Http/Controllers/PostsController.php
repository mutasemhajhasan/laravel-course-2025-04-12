<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function create(Request $request)
    {
        return view('post.post-create',['cats'=>Category::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:2000',
            'image' => 'file',
        ]);
        $imageFile=$request->file('image');
       $path= $imageFile->store('images','public');
       //public/images/randomName.jpg
       $post=Post::create([
        'title'=>$request->title,
        'content'=>$request->content,
        'image_path'=>$path,
        'user_id'=>Auth::user()->id,
       ]);
       $post->categories()->attach($request->category_ids);
        return redirect('/posts');
    }

    function  index()  {

        // DB::listen(function ($query) {
        //     logger($query->sql);
        // });
        $posts = Post::
        with('categories')
        ->orderBy('id','ASC')
        ->paginate(5);
        return view('post.post-list', ['posts' => $posts]);
    }
}
