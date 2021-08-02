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
        //faccio tre livelli di filtri che posso usare tutti insieme o singolarmente...
        $doctors = User::select(
                'users.*',
                DB::raw('ROUND(AVG(reviews.rating)) AS rating_avg'),
                DB::raw('COUNT(reviews.id) AS reviews_count')
            )
            ->with('specializations', 'reviews', 'sponsors')
            ->leftJoin('reviews', 'reviews.user_id', '=', 'users.id')
            /* ->leftJoin('sponsor_user', 'sponsor_user.user_id', '=', 'users.id') //qui mette già x primi quelli sponsored */
            /* ->joinJoin('sponsors', 'sponsors.id', '=', 'sponsor_user.sponsor_id') //qui mette già x primi quelli sponsored */
            ->groupBy('users.id');
            /* ->orderBy('sponsors.id', 'desc'); */

        //uno x la specializzazione quindi usando ?spec= e mi trova x specializzazione (bisogna usare i query params)
        if ($request->query('spec') != null) {
            $spec = $request->query('spec');
            $doctors = $doctors->whereHas('specializations', function(Builder $query) use ($spec) {
                $query->where('id', '=', $spec);
            });
        }

        //uno x il numero delle rews quindi usando ?rewscount= e mi ordina x numero di rews (bisogna usare i query params)
        if ($request->query('sortRevCount') != null) {
            $sortBy = $request->query('sortRevCount');
            $doctors = $doctors->orderBy('reviews_count', $sortBy);
        }

        //uno x la media delle rews quindi usando ?rewsavg= e mi ordina x media delle recensioni (bisogna usare i query params)
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

}
