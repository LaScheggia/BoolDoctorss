<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function showStats(){

        return view('admin.profiles.stats');
    }
}
