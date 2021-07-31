<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use App\Specialization;
use Illuminate\Database\Eloquent\Builder;
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
    public function index(Request $request) {
        $doctors = User::select(
                'users.*',
                DB::raw('ROUND(AVG(reviews.rating)) AS rating_avg'),
                DB::raw('COUNT(reviews.id) AS reviews_count')
            )
            ->with('specializations', 'reviews', 'sponsors')
            ->join('reviews','reviews.user_id','=','users.id')
            ->groupBy('users.id');

        if ($request->query('spec') != null) {
            $spec = $request->query('spec');
            $doctors = $doctors->whereHas('specializations', function(Builder $query) use ($spec) {
                $query->where('id', '=', $spec);
            });
        }

        if ($request->query('sortRevCount') != null) {
            $sortBy = $request->query('sortRevCount');
            $doctors = $doctors->orderBy('reviews_count', $sortBy);
        }

        if ($request->query('avgRating') != null) {
            $avgRating = $request->query('avgRating');
            $doctors = $doctors->having('rating_avg', '=', $avgRating);
        }

        $doctors = $doctors->paginate(7);
        return response()->json($doctors);
    }


    public function getDocSpec($spec_id) {
        $toSearch = $spec_id;

        $doctors = User::with('specializations')->whereHas('specializations', function(Builder $query) use ($toSearch){
            $query->where('id', '=', $toSearch);
        })->paginate(5);

        return response()-> json($doctors);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = User::where('id', $id)->with(['specializations','reviews'])->first();
        if($doctor){
            if($doctor->propic && file_exists('storage/'. $doctor->propic)){
                $doctor->propic = url('storage/' . $doctor->propic);
            }else{
                $doctor->propic = url('img/neutraldoctor.png');
            }
            return response()->json([   //ho tradotto in file json x poter poi fare la chiamata api dentro a vue
                'success' => true,
                'result' => $doctor
            ]);
        }
        return response()->json([
            'success' => false,
            'error' => 'Non ho trovato nessun dottore'
        ]);

    }

    /* get reviews by user id */
    /* 2 api 1 x il doc e una x le reviews */


/*     public function alldoctors(){
        $doctors = User::with('specializations', 'reviews')
        ->orderBy('users.id', 'desc')
        ->get();
        return response ()->json($doctors);
    } */

}
