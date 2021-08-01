<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Review;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function showReviews(){

        // prendo i dati del dottore registrato in base al suo id
        $doctor_id = Auth::id();

        $user = User::where('id', $doctor_id)->first();

        // filtro le recensioni in base all'id del dottore
        $reviews = Review::where('user_id', $doctor_id)->get();



        return view('admin.profiles.reviews', compact('user', 'reviews'));
    }
}
