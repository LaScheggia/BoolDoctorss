{{-- use Illuminate\Support\Facades\Auth; --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> {{-- questo è l'header con lo scriptino che cambia il mess di benve --}}
                    <?php
                     /* Questo mi prende l'ora attuale nmel formato h24 */
                     $time = date("H");
                     /* Prende la timezone in cui sono */
                     $timezone = date("e");
                     /* <12 -> Buongiorno */
                     if ($time < "12") {
                         echo "Buongiorno";
                     } else
                     /* dalle 12 alle 16.59 -> Buon pomeriggio */
                     if ($time >= "12" && $time < "17") {
                         echo "Buon pomeriggio";
                     } else
                     /* dalle 17 alle 18.59 -> Buonasera */
                     if ($time >= "17" && $time < "23") {
                         echo "Buonasera";
                     } else
                     /* dopo le 23 */
                     if ($time >= "23") {
                         echo "Che ci fai qua a quest'ora? Sei un gufo?";
                     }
                     ?>
                     <span>Dr. {{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="row justify-content-center"> {{-- cards dottore --}}
                        <div class="card m-2" style="width: 18rem;"> {{-- visualizza profilo --}}
                            <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Vedi il tuo porfilo</h5>
                              <p class="card-text">Qua vedrai il tuo porfilo personale e i tuoi dati aggiornati.</p>
                              <a href="{{ route('admin.profile.index') }}" class="btn btn-primary">Vai al tuo profilo</a>
                            </div>
                        </div>

                        <div class="card m-2" style="width: 18rem;"> {{-- modifica dati --}}
                            <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Modifica i tuoi dati personali</h5>
                              <p class="card-text">Qua potrai modificare i tuoi dati e tenere aggiornato il profilo.</p>
                              <a href="{{ route('admin.profile.edit', Auth::user()->id) }}" class="btn btn-primary">Vai alla modifica</a>
                            </div>
                        </div>

                        <div class="card m-2" style="width: 18rem;"> {{-- visualizza messaggi --}}
                            <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Vedi i tuoi messaggi</h5>
                                <p class="card-text">Qua potrai vedere tutti i messaggi ricevuti.</p>
                                <a href="{{ route('admin.message') }}" class="btn btn-primary">Vai ai messaggi</a>
                            </div>
                        </div>

                        <div class="card m-2" style="width: 18rem;"> {{-- visualizza recensioni --}}
                            <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Vedi le tue recensioni</h5>
                                <p class="card-text">Qua potrai vedere le recensioni lasciate dai tuoi pazienti.</p>
                                <a href="{{ route('admin.review') }}" class="btn btn-primary">Vai alle tue recensioni</a>
                            </div>
                        </div>

                        <div class="card m-2" style="width: 18rem;"> {{-- visualizza piani pagamento --}}
                            <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Vedi i tuoi upgrade</h5>
                                <p class="card-text">Qua potrai vedere vedere il tuo piano di upgrade e i suoi dettagli.</p>
                                <a href="{{ route('admin.plan') }}" class="btn btn-primary">Vai ai tuoi upgrade</a>
                            </div>
                        </div>

                        <div class="card m-2" style="width: 18rem;"> {{-- vedi le tue stats --}}
                            <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Vedi le tue statistiche</h5>
                              <p class="card-text">Qua potrai eliminare vedere le tue statistiche.</p>
                              <a href="{{ route('admin.stat') }}" class="btn btn-primary">Vai alle statistiche</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
