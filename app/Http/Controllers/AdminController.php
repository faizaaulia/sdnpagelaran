<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function indexPost(Request $request)
    {
        $posts = Post::get()->where('type', $request->type);
        return view('admin.index-post', compact('posts'));
    }

    public function create(Request $request)
    {
        $postType = $request->type;
        $type = ['berita', 'pengumuman', 'agenda'];
        if (in_array($postType, $type))
            return view('admin.create-post', compact('postType'));
        
        return abort(404);
    }

    public function store(PostRequest $request)
    {
        $data = $request->validated();
        $data['type'] = $request->type;
        $data['slug'] = Str::slug($request->title);
        $data['thumbnail'] = $this->addThumbnail($request->desc);
        
        if ($data) {
            Post::create($data);
            return response()->json(url(route('show-post', ['type' => $request->type])), 200);
        }

        return response()->json('error', 400);
    }

    public function detail($type, $id)
    {
        $post = Post::find($id);
        if ($post) {
            $view = view('admin/detail-post', compact('post', 'type'))->render();
            return response()->json($view, 200);
        }

        return response()->json('error', 400);
    }

    public function edit(Request $request)
    {
        $postType = $request->type;
        $type = ['berita', 'pengumuman', 'agenda'];
        if (in_array($postType, $type)) {
            $post = Post::find($request->id);
            if ($post)
                return view('admin/create-post', compact('post', 'postType'));
            
            return abort(404);
        }        

        return abort(404);
    }

    public function update(PostRequest $request, $type, $id)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->title);

        if ($data) {
            $post = Post::where('id', $id)->firstOrFail();
            $post->update($data);

            return response()->json(url(route('edit-post', ['type' => $type, 'id' => $post->id])), 200);
        }
        
        return response()->json('error', 400);
    }

    public function destroy($type, $id)
    {
        $post = Post::find($id);
        $delete = $post->delete();

        if ($delete)
            return response()->json(url(route('show-post', ['type' => $type])), 200);

        return response()->json('error', 400);
    }

    public function addThumbnail($desc) {
        $doc = new \DOMDocument();
        @$doc->loadHTML($desc);

        $tags = $doc->getElementsByTagName('img');
 
        foreach ($tags as $tag) {
            return $tag->getAttribute('src');
        }

        return 'img/about-bg.jpg';
    }
}
