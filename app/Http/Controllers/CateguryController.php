<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CateguryController extends Controller
{
    public function index()
    {
        $cats = DB::table('categury')->get();
        return view('categury.index', ['cats' => $cats]);
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
    public function crete(Request $request)
    {
        DB::table('categury')->insert([$request->except('_token')]);
        return redirect()->route('categureslist');
    }
    public function edit(Request $request, $id)
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
