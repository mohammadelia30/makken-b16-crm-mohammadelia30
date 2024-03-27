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
    public function createPage()
    {
        return view('categury.create');
    }
    public function editPage($id)
    {
        $cat = DB::table('categury')->where('id', $id)->first();
        return view('categury.edit', ['cat' => $cat]);
    }
    public function create(CateguryRequest $request)
    {
        DB::table('categury')->insert([$request->except('_token')]);
        return redirect()->route('categureslist');
    }
    public function edit(CateguryRequest $request, $id)
    {
        DB::table('categury')->where('id', $id)->update(['title'=>$request->title]);
        return redirect()->route('categureslist');
    }
    public function delete($id)
    {
        DB::table('categury')->where('id', $id)->delete();
        return redirect()->route('categureslist');
    }
}
