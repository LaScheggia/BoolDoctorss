<?php

namespace App\Http\Controllers\Api;

use App\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $new_message = new Message();
        $new_message->fill($data);
        $new_message['user_id']=$data['user_id'];
        $new_message->save();
        return redirect('/confirmation2');
    }


}
