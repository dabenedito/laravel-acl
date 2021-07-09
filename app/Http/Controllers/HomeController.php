<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(Post $post)
    {
        $posts = $post->all();
        return view('home', ['posts' => $posts]);
    }

    public function update($idPost)
    {
        $post = Post::find($idPost);
        return view('post-update', ['post' => $post]);
    }
}
