<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::whereStatus('PUBLISHED')->orderBy('created_at', 'desc')->paginate(10);
        return view('blog.home', compact('posts'));
    }

    public function show(Request $request, $year, $month, $slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('blog.post.show', compact('post'));
    }
}
