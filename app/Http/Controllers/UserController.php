<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return response()->json(User::all());
    }

    public function storeMessage(Request $request)
    {
        $message = Message::create($request->all());

        return response()->json($message, 201);
    }
}
