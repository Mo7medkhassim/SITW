<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Post;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    // Posts List Function (Handler)
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('dashboard.blog.post.post', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('dashboard.blog.post.show', ['post' => $post]);
    }

    public function create()
    {
        return view('dashboard.blog.post.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);
        $post = new Post();
        $post->title = request('title');
        $post->slug = request('slug');
        $post->body = request('body');
        $post->image = request('image');
        if (request('status')) {
            $post->status = 1;
        } else {
            $post->status = 0;
        }
        error_log(auth('admin')->user()->id);
        $post->author = auth('admin')->user()->id;
        $post->save();
        return redirect('/dashboard/post');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('dashboard.blog.post.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);
        $post = Post::findOrFail($id);
        $post->title = request('title');
        $post->slug = request('slug');
        $post->body = request('body');
        $post->image = request('image');
        if (request('status')) {
            $post->status = 1;
        } else {
            $post->status = 0;
        }
        error_log(auth('admin')->user()->id);
        $post->author = auth('admin')->user()->id;
        $post->save();
        return redirect('/dashboard/post');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back();
    }
}
