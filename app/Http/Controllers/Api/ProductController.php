<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return response()->json(ProductResource::collection($products))->setStatusCode(200);
    }
    public function show( Product $product){
        return response()->json(new ProductResource($product))->setStatusCode(200);
    }
    public function store(ProductRequest $request, Product $product){
        $product = Product::create($request->validated());
        return response()->json($product)->setStatusCode(201);
    }

    public function update(ProductRequest $request, Product $product){

        $product->update($request->validated());
        return response()->json($product)->setStatusCode(200);

    }
    public function destroy(Product $product){
        $product->delete();
        return response()->json()->setStatusCode(204);
    }
}
