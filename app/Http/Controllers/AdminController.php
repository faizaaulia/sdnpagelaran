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
        
        if ($data) {
            Post::create($data);
            return response()->json(url(route('show-post', ['type' => 'berita'])), 200);
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

    public function edit($type, $id)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
