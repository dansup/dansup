<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
	public function home()
	{
		$posts = Post::whereStatus('PUBLISHED')->orderBy('created_at', 'desc')->paginate(3);
		return view('welcome', compact('posts'));
	}
}
