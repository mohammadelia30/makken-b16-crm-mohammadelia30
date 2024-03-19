<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request){
        $users = DB::table('users')->get();
        return view('users.index',['users'=> $users]);
    }
    public function create(Request $request){
        DB::table("users")->insert([$request->except("_token")]);
        return redirect("list");
    }
    public function edit(Request $request,$id){
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
        return redirect("list");
    }
    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('list');
    }
}
