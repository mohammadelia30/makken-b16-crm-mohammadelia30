<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UsersRequest;
use App\Jobs\SendMail;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::select('id', 'phone_number', 'password')->where('phone_number', $request->phone_number)->first();

        if (!$user) {
            return response()->json('phone number not found');
        }
        if (!Hash::check($request->password, $user->password)) {
            return response()->json('password wrong');
        }
        $token = $user->createToken($request->phone_number)->plainTextToken;
        return response()->json(["token" => $token]);
    }
    public function logout($id)
    {
        $user = User::where('id', $id)->first();
        $logout = $user->tokens()->where('name', $user->phone_number)->delete();
        return response()->json($logout);
    }
    public function index(Request $request)
    {
        $user = new User();
        $code = $request->code;
        $count_orders = $request->count_orders;
        if ($user->hasRole('user')) {
            if (Auth::user()) {
            $users = $user->with('orders:id,user_id,sname,code,date,time')->get();
            }
        }else {
            if ($code) {
                $user = new User();
                $users = $user->with('orders')->whereHas('orders', function (Builder $query) use ($code) {
                    $query->where('code', $code);
                })->paginate(10);
            }
            $users = User::with('orders:id,user_id,sender_name,code,date,time')->paginate(10);
        }
        if($count_orders){
            $users = $user->withcount('orders')->get();
        }
        return response()->json($users);
    }
    public function create(UsersRequest $request)
    {
        $first_name = $request->first_name;
        $last_name = $request->larst_name;
        $email = $request->email;
        $users = User::create($request->merge([
            'password' => Hash::make($request->password)
        ])->toArray());
        $users->assignRole('super admin');
        $users->teams()->attach($request->teams_id);
        SendMail::dispatch($first_name,$last_name,$email);
        return response()->json($users);
    }
    public function edit(UpdateUserRequest $request, $id)
    {
        $users = User::find($id)->update($request->merge([
            'password' => Hash::make($request->password)
        ])->toArray());
        return response()->json($users);
    }
    public function detach(Request $request , $id)
    {
        $user = User::find($id);
        $user->teams()->detach($request->teams_id);
        $user->lables()->detach($request->lables_id);
    }
    public function delete($id)
    {
        $users = User::destroy($id);
        return response()->json($users);
    }
    public function add_profile(Request $request,$id)
    {
        $user = new User();
        $user->find($id)->addMedia($request->image)->usingName('avatar')->toMediaCollection('avatar');
        return response()->json('upload successfully');
    }
    public function delete_profile($id)
    {
        $media = new Media();
        $media->destroy('avatar',$id);
        return response()->json('deleted successfully');
    }
}
