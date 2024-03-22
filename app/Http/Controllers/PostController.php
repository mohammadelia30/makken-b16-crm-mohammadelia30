<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', ['posts' => $posts]);
    }
    public function createPage()
    {
        return view('posts.create');
    }
    public function editPage($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.edit', ['post' => $post]);
    }
    public function edit(PostRequest $request, $id)
    {
        DB::table('posts')->where('id', $id)->update([
            'title' => $request->title,
            'auther' => $request->auther,
            'categury_id' => $request->categury_id,
            'content' => $request->content
        ]);
        return redirect()->route('postslist');
    }
    public function create(PostRequest $request)
    {
        DB::table('posts')->insert([$request->except('_tiken')]);
        return redirect()->route('postslist');
    }
    public function delete($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return redirect()->route('postslist');
    }
}
