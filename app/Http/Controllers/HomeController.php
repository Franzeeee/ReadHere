<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(9);
        return view('home', ['posts' => $posts]);
    }
    public function about()
    {
        return view('about');
    }
}
