<?php

namespace App\Http\Controllers;

use App\Http\Requests\CateguryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CateguryController extends Controller
{
    public function index($id = null)
    {
        if($id){
            $cats = DB::table("categury")->where("id", $id)->first();
        }else{
            $cats = DB::table('categury')->orderBy('id','desc')->paginate(5);
        }
        return response()->json($cats);
    }
    public function create(CateguryRequest $request)
    {
        $cats = DB::table('categury')->insert($request->toArray());
        return response()->json($cats);
    }
    public function edit(CateguryRequest $request, $id)
    {
        $cats = DB::table('categury')->where('id', $id)->update($request->toArray());
        return response()->json($cats);
    }
    public function delete($id)
    {
        $cats = DB::table('categury')->where('id', $id)->delete();
        return response()->json($cats);
    }
}
