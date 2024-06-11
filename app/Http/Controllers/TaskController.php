<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $factor = Task::with('users','teams')->find($id);
        } else {
            $factor = Task::with('users','teams')->paginate(10);
        }
        return response()->json($factor);
    }
    public function store(TaskRequest $request)
    {
        $factor = Task::create($request->toArray());
        return response()->json($factor);
    }
    public function edit(TaskRequest $request){
        $task = Task::updated($request->toArray());
        return response()->json($task);
    }
    public function delete($id)
    {
        $factor = Task::destroy($id);
        return response()->json($factor);
    }
}
