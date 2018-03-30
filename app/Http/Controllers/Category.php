<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Helper\StringHelper;
class Category extends Controller
{
    public function add(CategoryRequest $request){
        $category = new \App\Category();
        $category->name = StringHelper::removeSpace($request->name);
        $category->save();
        return redirect('/category');
    }

    public function index(){
        $categories = \App\Category::all();
        return view('category.index', ['categories'=>$categories]);
    }

    public function listCategoryApi(){
        return response()->json(
            \App\Category::all(),
            200
        );
    }
}
