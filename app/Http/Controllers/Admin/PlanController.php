<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Sponsor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PlanController extends Controller
{
    public function showPlans(){
        // prendo i dati del dottore registrato in base al suo id
        $doctor_id = Auth::id();

        $user = User::find($doctor_id);
        $sponsors = $user->sponsors()->get();
        $sponsor_plans = Sponsor::all();

        return view('admin.profiles.plans', compact('sponsors', 'user', 'sponsor_plans'));
    }

    public function getSelectedPlan(){
        //return Input::get('selectPlan');
        //probabilemnte qua c'è da fare in modo di fare un barbatrucco x spostare l'input selezionato x il pagamento
    }
}
