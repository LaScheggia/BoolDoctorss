<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Message;
use App\Review;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function showStats(User $user, Message $messages, Review $reviews){


        // prendo i dati del dottore registrato
        $doctor_id = Auth::id();

        $user = User::where('id', $doctor_id)->first();
        // accedo alle tabelle dei messaggi e recensioni per prenderne i dati
        $messages = Message::where('user_id', $doctor_id)->get();

        $reviews = Review::where('user_id', $doctor_id)->get();


        return view('admin.profiles.stats', compact('user', 'messages', 'reviews'));
    }
}
