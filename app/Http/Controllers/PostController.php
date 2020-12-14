<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        $posts = Post:: select('*')->orderby('id','DESC')->paginate(6);

        return view('posts/index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts/show', [
            'post' => $post
        ]);
    }

    //->orWhere('body','like',"%$keyword")

    public function search($keyword)
    {
        $posts = Post::where('title','like',"%$keyword%")->orWhere('body','like',"%$keyword%")->get();

        //dd($posts);

        return view("posts/search",[
            'posts' => $posts,
            'keyword' => $keyword
          ]);
    }

    public function latest($num)
	{
        $posts_latest = Post::select('title','body')->orderby('id','DESC')->take($num)->get();

        return view('posts/latest', [
            'posts_latest' => $posts_latest,
            'num' => $num
		]);
    }





}
