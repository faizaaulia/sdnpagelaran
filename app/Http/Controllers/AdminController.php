<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function indexPost(Request $request)
    {
        $posts = Post::orderBy('updated_at', 'DESC')->get()->where('type', $request->type);
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
        $data['thumbnail'] = $this->addThumbnail($request->desc);

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

        $tags = $doc->getElementsByTagName('*');
        $type = ['img', 'video', 'iframe'];

        foreach ($tags as $tag) {
            if (in_array($tag->nodeName, $type)) {
                switch ($tag->nodeName) {
                    case 'img':
                        return $tag->getAttribute('src');
                        break;
                    case 'iframe':
                        $id = Str::after($tag->getAttribute('src'), '/embed/');
                        return 'http://img.youtube.com/vi/' . $id . '/maxresdefault.jpg';
                        break;
                    case 'video':
                        return '-';
                        break;
                    default:
                        break;
                }
            }
        }

        return '-';
    }

    public function editProfile() {
        $user = Auth::user();

        return response()->json($user, 200);
    }

    public function updateProfile(UpdateAdminRequest $request) {
        $data = $request->validated();

        if ($data) {
            User::find(Auth::user()->getAuthIdentifier())->update([
                'username' => $data['username'],
                'password' => Hash::make($data['confirm-password'])
            ]);
            return response()->json('success', 200);
        }

        return response()->json('error', 400);
    }
}
