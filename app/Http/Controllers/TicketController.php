<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $factor = Ticket::with('order','warranty')->find($id);
        } else {
            $factor = Ticket::paginate(10);
        }
        return response()->json($factor);
    }
    public function store(TicketRequest $request)
    {
        $factor = Ticket::create($request->toArray());
        return response()->json($factor);
    }
    public function edit(TicketRequest $request){
        $factor = Ticket::updated($request->toArray());
        return response()->json($factor);
    }
    public function delete($id)
    {
        $factor = Ticket::destroy($id);
        return response()->json($factor);
    }
}
