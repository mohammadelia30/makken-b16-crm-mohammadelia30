<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->get();
        return view('orders.index', ['orders' => $orders]);
    }
    public function createPage()
    {
        return view('orders.create');
    }
    public function editPage($id)
    {
        $order = DB::table('orders')->where('id', $id)->first();
        return view('orders.edit', ['order' => $order]);
    }
    public function crete(Request $request)
    {
        DB::table('orders')->insert([$request->except('_token')]);
        return redirect()->route('orderslist');
    }
    public function edit(Request $request, $id)
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
