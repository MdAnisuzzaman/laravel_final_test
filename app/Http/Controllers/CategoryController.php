<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('backend.category.index',['categories'=>$categories]);
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:20  | min:4  | unique:categories'
        ]);
        $category = new category;
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('msg', 'Category Added Successfully');

    }

    public function delete(Request $request,$id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect()->back()->with('msg', 'Category Deleted Successfully');

    }

    public function edit($id)
    {
        $category = category::find($id);
        return view('backend.category.edit',compact('category'));

    }
    public function update(Request $request,$id)
    {
        $category = category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect(route('category.index'))->with('msg', 'Category Updated Successfully');
    }

}
