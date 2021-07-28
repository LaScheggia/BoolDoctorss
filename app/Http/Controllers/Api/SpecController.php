<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecController extends Controller
{
    public function index(){
        /* $specs= Specialization::pluck('name'); */
        $specs = DB::table('specializations')
        ->select(
            'specialization.name',
        )
        ->get();
       return response()->json($specs);
    }
}
