<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Message;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class MessageController extends Controller
{
    public function index()
    { 
		 try{       
			 $user = JWTAuth::parseToken()->authenticate(); 
		 }
		 catch (JWTException $e) {
			  return response()->json(['msg' => 'error in the current user please relogin'], 500);
		 }
        return Message::where('user_id', '=', $user->id)->get();
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

    public function show()
    {
		 $user = JWTAuth::parseToken()->authenticate(); 
		
        return Message::where('user_id', '=', $user->user_id)->get();
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
