<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index($id = null)
    {
        if($id){
            $orders = DB::table("orders")->where('id',$id)->first();
        }else{
            $orders = DB::table('orders')->orderBy('id','desc')->paginate(5);
        }
        return response()->json($orders);
    }
    public function create(OrderRequest $request)
    {
        $orders = DB::table('orders')->insert($request->toArray());
        return response()->json($orders);
    }
    public function edit(OrderRequest $request, $id)
    {
        $orders = DB::table('orders')->where('id', $id)->update($request->toArray());
        return response()->json($orders);
    }
    public function delete($id){
        $orders = DB::table('orders')->where('id', $id)->delete();
        return response()->json($orders);
    }
}
