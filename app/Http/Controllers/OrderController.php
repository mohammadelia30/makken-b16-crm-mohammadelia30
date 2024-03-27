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
        DB::table('orders')->insert([$request->except('_token')]);
        return redirect()->route('orderslist');
    }
    public function edit(OrderRequest $request, $id)
    {
        DB::table('orders')->where('id', $id)->update([
            'sname' => $request->sname,
            'gname' => $request->gname,
            'code' => $request->code,
            'date' => $request->date,
            'time' => $request->time,
            'comment' => $request->comment
        ]);
        return redirect()->route('orderslist');
    }
    public function delete($id){
        DB::table('orders')->where('id', $id)->delete();
        return redirect()->route('orderslist');
    }
}
