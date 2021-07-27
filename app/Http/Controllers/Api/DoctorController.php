<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $doctors = User::with(['specializations', 'reviews'])->paginate(3);


        return response()->json($doctors);
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctors = User::all();
        if($doctors){
            return response()->json([   //ho tradotto in file json x poter poi fare la chiamata api dentro a vue
                'success' => true,
                'result' => $doctors
            ]);
        }
        return response()->json([
            'success' => false,
            'error' => 'Non ho trovato nessun dottore'
        ]);
    }


}
