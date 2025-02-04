<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        return response()->json($categories)->setStatusCode(200);
    }

    public function show(Category $category)
    {
        return response()->json($category)->setStatusCode(200);
    }
    public function store(CategoryRequest $request){
        $category = Category::create($request->validated());
        return response()->json($category)->setStatusCode(201);
    }
    public function update(CategoryRequest $request, Category $category){
        $category->update($request->validated());
        return response()->json($category)->setStatusCode(200);
    }
    //Удаление категории
    public function destroy(Category $category){
        $category->delete();
        return response()->json()->setStatusCode(204);
    }
}
