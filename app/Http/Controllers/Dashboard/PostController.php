<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Post;

class PostController extends Controller
{
    // Posts List Function (Handler)
    public function index(){
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('dashboard.blog.post.post', [
            'posts' => $posts
        ]);
    } 

    public function show($id){
        return view('dashboard.blog.post.show', ['id' => $id]);
    }

    public function create(){
        return view('dashboard.blog.post.create');
    }
}
