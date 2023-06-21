<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $search =$request->search;
        //$posts=Post::latest()->paginate();
        //return view('home');
        // se le quitan los parentisi al %($search)% para que pueda funcionar
        $posts=Post::where('title','LIKE',"%$search%")
        ->with('user')
        ->paginate();
        return view('home', ['posts'=>$posts]);
    }

    //public function blog()
    //{
  //consulta a base de datos
    //$posts=Post::get();
    //$post = Post::first();
    //$post = Post::find(25);
    //dd($post);
    //$posts=Post::paginate();
    //return view('blog', ['posts'=>$posts]);
    //}

    public function post(Post $post)
    {
    //consulta a base de datos

    return view('post',['post' =>$post]);
    }
}
