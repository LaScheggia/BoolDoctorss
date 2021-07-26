<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        /* $user = Auth::user(); */
        /* dd($user->name); */

        return view('guest.home'); //questa è la home pubblica che gestiremo con vue


    }
}
