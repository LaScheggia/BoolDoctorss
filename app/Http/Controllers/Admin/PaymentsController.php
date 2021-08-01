<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Sponsor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Braintree\Transaction;
use DateInterval;
use DateTime;

class PaymentsController extends Controller
{
    public function sponsor($id, Request $request) {
        $sponsor = Sponsor::find($id);

        $payload = $request->input('payload', false);
        $nonce = $payload['nonce'];

        $status = Transaction::sale([
            'amount' => $sponsor->price,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);

        if ($status->success) {
            $doctor = User::with('sponsors')
                ->find(Auth::id());

            $end_date = new DateTime();
            $end_date->add(new DateInterval('PT'.$sponsor->duration.'H'));

            /* TODO: gestire i pagamenti dopo il primo (estensione del periodo di sponsor)
            if ($doctor->sponsors->count() > 0) {
                $db_date = $doctor->sponsors->first();
                $end_date = $db_date->add(new DateInterval('PT'.$sponsor->duration.'H'));
            }
            */

            $doctor->sponsors()->attach($sponsor->id, ['end_date' => $end_date]);
        }

        return response()->json($status);
    }
}
