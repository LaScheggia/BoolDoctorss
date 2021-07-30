<?php

namespace App\Http\Controllers\Api;

use App\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $data= $request->all();
        //dd($data);
        $new_review = new Review();
        $new_review->fill($data);
        $new_review['user_id']=$data['user_id'];
        $new_review->save();
        return redirect('/confirmation');
    }
}
