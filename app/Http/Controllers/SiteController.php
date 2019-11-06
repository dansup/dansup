<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
	public function home()
	{
		$posts = Post::orderBy('created_at', 'desc')->paginate(10);
		return view('welcome', compact('posts'));
	}
}
