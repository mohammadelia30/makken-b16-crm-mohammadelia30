<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index($id = null)
    {
        if($id){
            $posts = DB::table('posts')->where('id',$id)->first();
        }else{
            $posts = DB::table('posts')->orderBy('id','desc')->paginate(5);
        }
        return response()->json($posts);
    }
    public function edit(PostRequest $request, $id)
    {
        $posts = DB::table('posts')->where('id', $id)->update($request->toArray());
        return response()->json($posts);
    }
    public function create(PostRequest $request)
    {
        $posts = DB::table('posts')->insert($request->toArray());
        return response()->json($posts);
    }
    public function delete($id)
    {
        $posts = DB::table('posts')->where('id', $id)->delete();
        return response()->json($posts);
    }
}
