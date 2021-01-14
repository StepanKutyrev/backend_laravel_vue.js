<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Resources\MessageResource;
use App\Http\Resources\MessageResourceCollection;

class MessageController extends Controller
{
    public function show(Message $message): MessageResource
    {
        return new MessageResource($message);
    }

    public function index():MessageResourceCollection
    {
        return new MessageResourceCollection(Message::paginate());

    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'to_user_id' => 'required',
            'message' => 'required'
        ]);
        $message = Message::create($request->all());
        return new MessageResource($message);
    }
    public function update(Message $message, Request $request): MessageResource
    {
        $message->update($request->all());
        return new MessageResource($message);

    }

    public function destroy(Message $message, Request $request)
    {
        $message->delete();
        return response()->json(null, 204);
    }
}
