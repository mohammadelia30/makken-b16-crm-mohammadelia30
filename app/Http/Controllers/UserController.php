<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create(Request $request)
    {
        DB::table("users")->insert([
            "first_name"=> $request->first_name,
            "last_name"=> $request->last_name,
            "password"=> $request-> password,
            "phone_number" => $request->phone_number,
            "status" => $request->status,
            "gender" => $request->gender,
            "address"=> $request->address,
            "comment" => $request->comment
        ]);
        return redirect("/users/index");
    }
}
