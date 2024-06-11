<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $factor = Team::with('order','warranty')->find($id);
        } else {
            $factor = Team::paginate(10);
        }
        return response()->json($factor);
    }
    public function store(TeamRequest $request)
    {
        $factor = Team::create($request->toArray());
        return response()->json($factor);
    }
    public function edit(TeamRequest $request){
        $factor = Team::updated($request->toArray());
        return response()->json($factor);
    }
    public function delete($id)
    {
        $factor = Team::destroy($id);
        return response()->json($factor);
    }
}
