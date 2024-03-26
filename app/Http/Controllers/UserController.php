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
        DB::table('users')->where("id",$id)->update([
            "first_name" => $request->first_name,
            "last_name"=> $request->last_name,
            "password" => $request->password,
            "phone_number"=> $request->phone_number,
            "status"=> $request->status,
            "gender"=> $request->gender,
            "address"=> $request->address,
            "comment"=> $request->comment
        ]);
        return redirect()->route("userslist");
    }
    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route("userslist");
    }
}
