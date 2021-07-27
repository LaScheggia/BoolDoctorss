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

        /* $doctors = User::all(); */

/*         $doctors = DB::table('users')
        ->select(
            'users.id',
            'users.name',
            'users.surname',
            'users.email',
            'users.address',
            'users.bio',
            'users.service',
            'users.propic',
            'specializations.name as specializations'
        )
        ->join('specialization_user', 'users.id', 'specialization_user.user_id')
        ->join('specializations', 'specialization_user.specialization_id', 'specializations.id')
        ->paginate(3); */

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
