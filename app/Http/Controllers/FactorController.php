<?php

namespace App\Http\Controllers;

use App\Http\Requests\FactorRequest;
use App\Models\Factor;
use Illuminate\Http\Request;

class FactorController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $factor = Factor::with('order','warranty')->find($id);
        } else {
            $factor = Factor::with('order')->paginate(10);
        }
        return response()->json($factor);
    }
    public function store(FactorRequest $request)
    {
        $factor = Factor::create($request->toArray());
        return response()->json($factor);
    }
    public function edit(FactorRequest $request){
        $factor = Factor::updated($request->toArray());
        return response()->json($factor);
    }
    public function delete($id)
    {
        $factor = Factor::destroy($id);
        return response()->json($factor);
    }
}
