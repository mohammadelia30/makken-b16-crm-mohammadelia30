<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index($id = null){
        if($id){
            $products = DB::table('products')->where('id', $id)->first();
        }else{
            $products = DB::table('products')->orderBy('id','desc')->paginate(5);
        }
        return response()->json($products);
    }
    public function create(ProductRequest $request){
        $products = DB::table('products')->insert($request->toArray());
        return response()->json($products);
    }
    public function edit(ProductRequest $request,$id){
        $products = DB::table('products')->where('id',$id)->update($request->toArray());
        return response()->json($products);
    }
    public function delete($id){
        $products = DB::table('products')->where('id',$id)->delete();
        return response()->json($products);
    }
}
