<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('categories.list',['categories'=>$categories]);
    }

    public function trash(){
        $categories =Category::onlyTrashed()->get();
        return view('categories.trash',['categories'=>$categories]);
    }

    public function create(){
        return view('categories.new');
    }

    public function store(Request $request){
         $request->validate([
            'title'=>['required']
         ]);

        $category = new Category;
        $category->title = $request->title;
        $category->save();
        return redirect('/')->with('success', 'Category added successfully!');
    }

    public function edit($id){
        //  dd($id);

        $category = Category::where('id',$id)->first();
        return view('categories.edit',['category'=>$category]);
    }

    public function update(Request $request, $id){
        $category = Category::where('id',$id)->first();
        $category->title = $request->title;
        $category->save();
        return redirect('/')->with('success', 'Category Updated successfully!');
    }

    public function destroy($id){
        $category = Category::where('id',$id)->first();
        $category->delete();
        return redirect('/');
    }

    public function forceDelete($id){
        $category =Category::withTrashed()->find($id);
        $category->forceDelete();
        return redirect()->back();
    }

    public function restore($id){
        $category = Category::withTrashed()->find($id);
        $category->restore();
        return redirect('/');
    }
}
