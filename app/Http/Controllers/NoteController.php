<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $factor = Note::with('order','warranty')->find($id);
        } else {
            $factor = Note::with('order')->paginate(10);
        }
        return response()->json($factor);
    }
    public function store(NoteRequest $request)
    {
        $factor = Note::create($request->toArray());
        return response()->json($factor);
    }
    public function edit(NoteRequest $request){
        $factor = Note::updated($request->toArray());
        return response()->json($factor);
    }
    public function delete($id)
    {
        $factor = Note::destroy($id);
        return response()->json($factor);
    }
}
