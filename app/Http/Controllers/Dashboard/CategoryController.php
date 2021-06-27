<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('dashboard.blog.category.category', [
            'categories' => $categories
        ]);
    }
    
    public function show($id){
        $category = Category::findOrFail($id);
        return view('dashboard.blog.category.show', ['category' => $category]);
    }

    public function create(){
        return view('dashboard.blog.category.create');
    }

    public function store(){
        $category = new Category();
        $category->name = request('title');
        $category->slug = request('slug');
        $category->save();
        return redirect('/dashboard/category');
    }

    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/dashboard/category');
    } 
}
