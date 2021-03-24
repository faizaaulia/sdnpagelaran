<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::limit(2)->orderBy('updated_at', 'DESC')->get();
        return view('index', compact('posts'));
    }

    public function postIndex(Request $request) {
        $cari = $request->q;
        $found = true;

        if ($cari) {
            $posts = Post::where('title', 'like', "%$cari%")->orderBy('updated_at', 'DESC')->paginate(3);
            if ($posts->count() == 0) {
                $posts = Post::orderBy('updated_at', 'DESC')->paginate(3);
                $found = false;
            }
        } else
            $posts = Post::where('type', $request->segment(1))->orderBy('updated_at', 'DESC')->paginate(3);

        $other = Post::limit(5)->orderBy('updated_at', 'DESC')->get();
        return view('post', compact('posts', 'other', 'found'));
    }

    public function postDetail($type, $slug) {
        $post = Post::where(['type' => $type, 'slug' => $slug])->first();
        $other = Post::limit(5)->whereNotIn('id', [$post->id])->orderBy('updated_at', 'DESC')->get();
        
        return view('post-detail', compact('post', 'other'));
    }
}
