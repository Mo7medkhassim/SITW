<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Tag;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::orderBy('id', 'DESC')->get();
        return view('dashboard.blog.tag.tag', [
            'tags' => $tags
        ]);
    }
    
    public function show($id){
        $tag = Tag::findOrFail($id);
        return view('dashboard.blog.tag.show', ['tag' => $tag]);
    }

    public function create(){
        return view('dashboard.blog.tag.create');
    }
   
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
        ]);
        $tag = new Tag();
        $tag->name = request('title');
        $tag->slug = request('slug');
        $tag->save();
        return redirect('/dashboard/tag');
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('dashboard.blog.tag.edit', ['tag' => $tag]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
        ]);
        $tag = Tag::findOrFail($id);
        $tag->name = request('title');
        $tag->slug = request('slug');
        $tag->save();
        return redirect('/dashboard/tag');
    }

    public function destroy($id){
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->back();
    } 
}
