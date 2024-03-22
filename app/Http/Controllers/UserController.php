<?php

namespace App\Http\Controllers;

use App\Http\Requests\UseraddRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('users.index',['users'=> $users]);
    }
    public function createPage(){
        return view('users.create');
    }
    public function editPage($id){
        $user =DB::table('users')->where('id', $id)->first();
        return view('users.edit',['user'=> $user]);
    }
    public function create(UseraddRequest $request){
        $request->validate();
        DB::table("users")->insert([$request->except("_token")]);
        return redirect()->route("userslist");
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
        return redirect()->route("userslist");
    }
    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route("userslist");
    }
}
