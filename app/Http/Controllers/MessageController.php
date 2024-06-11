<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MessageController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $factor = Message::with('order','warranty')->find($id);
        } else {
            $factor = Message::paginate(10);
        }
        return response()->json($factor);
    }
    public function store(MessageRequest $request)
    {
        $factor = Message::create($request->toArray());
        return response()->json($factor);
    }
    public function edit(MessageRequest $request){
        $factor = Message::updated($request->toArray());
        return response()->json($factor);
    }
    public function delete($id)
    {
        $factor = Message::destroy($id);
        return response()->json($factor);
    }
    public function attach_media(Request $request)
    {
        $message = new Message();
        $message->addMedia($request->media)->toMediaCollection();
        return response()->json('attached media successfully');
    }
    public function detach_media($id)
    {
        $media = new Media();
        $media->delete($id);
        return response()->json('detached media successfully');
    }
}
