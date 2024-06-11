<?php

namespace App\Http\Controllers;

use App\Http\Requests\WarrantyRequest;
use App\Models\Warranty;
use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $factor = Warranty::with('order','warranty')->find($id);
        } else {
            $factor = Warranty::paginate(10);
        }
        return response()->json($factor);
    }
    public function store(WarrantyRequest $request)
    {
        $factor = Warranty::create($request->toArray());
        return response()->json($factor);
    }
    public function edit(WarrantyRequest $request){
        $factor = Warranty::updated($request->toArray());
        return response()->json($factor);
    }
    public function delete($id)
    {
        $factor = Warranty::destroy($id);
        return response()->json($factor);
    }
}
