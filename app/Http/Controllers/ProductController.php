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
        DB::table('products')->insert([$request->except('_token')]);
        return redirect()->route('productslist');
    }
    public function edit(ProductRequest $request,$id){
        DB::table('products')->where('id',$id)->update([
            'name'=> $request->name,
            'price'=> $request->price,
            'color' => $request->color,
            'status'=> $request->status,
            'number'=> $request->number,
            'comment'=> $request->comment
        ]);
        return redirect()->route('productslist');
    }
    public function delete($id){
        DB::table('products')->where('id',$id)->delete();
        return redirect()->route('productslist');
    }
}
