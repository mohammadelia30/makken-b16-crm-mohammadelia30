<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('products')->get();
        return view('products.index',['products'=> $products]);
    }
    public function createPage(){
        return view('products.create')->name('productcreatepage');
    }
    public function editPage($id){
        $product = DB::table('products')->where('id',$id)->first();
        return view('products.edit',['product'=> $product]);
    }
    public function create(Request $request){
        DB::table('products')->insert([$request->except('_token')]);
        return redirect()->route('productlist');
    }
    public function edit(Request $request,$id){
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
