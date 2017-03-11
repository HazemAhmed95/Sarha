<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Message;

class MessageController extends Controller
{
    public function index()
    {
        return Message::all();
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $message = new Message($input);
        if (!$message->save()) {
            abort(500, "Saving failed.");
        }
        return $message;
    }

    public function show($id)
    {
        return Message::find($id);
    }

    public function update($id, Request $request)
    {
        $message = Message::find($id);
        $message->body = $request->input('body');
        if (!$message->save()) {
            abort(500, "Saving failed");
        }
        return $message;
    }

    public function destroy($id)
    {
        return Message::destroy($id);
    }
}
