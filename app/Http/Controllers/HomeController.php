<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::limit(2)->get();
        return view('index', compact('posts'));
    }

    public function postIndex(Request $request) {
        $posts = Post::where('type', $request->segment(1))->get();
        return view('post', compact('posts'));
    }

    public function postDetail($type, $slug) {
        $post = Post::where(['type' => $type, 'slug' => $slug])->first();
        
        return view('post-detail', compact('post'));
    }
}
