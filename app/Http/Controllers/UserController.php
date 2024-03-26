<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index($id = null){
        if($id){
            $users = DB::table('users')->where('id',$id)->first();
        }else{
        $users = DB::table('users')->orderBy('id','desc')->paginate(5);
        }
        return response()->json($users);
    }
    public function create(UsersRequest $request){
        $users = DB::table("users")->insert($request->toArray());
        return response()->json($users);
    }
    public function edit(UsersRequest $request,$id){
        $users = DB::table('users')->where("id",$id)->update($request->toArray());
        return response()->json($users);
    }
    public function delete($id){
        $users = DB::table('users')->where('id',$id)->delete();
        return response()->json($users);
    }
}
