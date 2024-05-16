<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add (Request $request){
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $newCategory = Category::create([
            'name' => $request->name
        ]);

        return redirect(route('edit.category', ['category'=>$newCategory]));
    }

    public function edit (Request $request, Category $category){
        $request->validate([
            'name' => 'required|max:255|unique:roles'
        ]);

        $category->name = $request->name;
        $category->save();

        return redirect(route('edit.category', ['category' => $category]));
    }

    public function delete (Category $category){
        $category->delete();

        return redirect(route('category'));
    }
}
