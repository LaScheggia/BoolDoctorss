<?php

namespace App\Http\Controllers\Admin;

use App\Message;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function showMessages(){
            // prendo i dati del dottore registrato in base al suo id
            $doctor_id = Auth::id();

            $user = User::where('id', $doctor_id)->first();

            // filtro i messaggi in base all'id del dottore
            $messages = Message::where('user_id', $doctor_id)->get();
        return view('admin.profiles.messages', compact('user', 'messages'));
    }
}
