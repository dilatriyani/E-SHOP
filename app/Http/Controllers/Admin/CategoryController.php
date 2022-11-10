<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function insert(Request $request)
    {
        $category = new Category();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uplods/category'.$filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status');
        $category->popular = $request->input('popular');
        $category->meta_title = $request->input('meta_title');
        $category->meta_keyords = $request->input('meta_keywords');
        $category->meta_descrip = $request->input('meta_descrip');
        $category->save();
        return redirect('/dashboard')->with('satus', "Category added successfully");
    }
    
}
