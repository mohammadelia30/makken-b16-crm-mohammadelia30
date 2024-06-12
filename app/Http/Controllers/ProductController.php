<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $products = Product::where('id', $id)->first();
        } else {
            $products = Product::orderBy('id', 'desc')->paginate(5);
        }
        return response()->json($products);
    }
    public function create(ProductRequest $request)
    {
        $products = Product::create($request->toArray());
        $products->warranty()->attach($request->warrantes_id);
        return response()->json($products);
    }
    public function edit(ProductRequest $request, $id)
    {
        $products = Product::find($id)->update($request->toArray());
//        $products->warranty()->sync($request->warrantes_id);
        return response()->json($products);
    }
    public function detach(ProductRequest $request , $id)
    {
        $product =Product::find($id);
        $product->warranty()->detach($request->warrantes_id);
    }
    public function delete($id)
    {
        $products = Product::destroy($id);
        return response()->json($products);
    }
    public function add_image(Request $request , $id)
    {
        $product = new Product();
        $product->find($id)->addMedia($request->image)->usingName('product image')->toMediaCollection('products');
        return response()->json('image successfully added');
    }
    public function delete_image(Request $request , $id)
    {
        $media = new Media();
        $media->destroy('products', $id);
        return response()->json('image successfully deleted');
    }
}
