@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            {{-- controllo se il dottore ha ricevuto dei messaggi privati --}}
            <h1 class="mb-4">I tuoi messaggi</h1>
            @if (count($messages) == 0)
            <div class="d-flex justify-content-lg-center align-items-center">
                <h2>Nessun messaggio ricevuto</h2>
            </div>
            @endif

            <div class="mb-5"> {{-- ciclo i messaggi del dottore --}}
                @foreach ($messages as $message)

                <div
                class="mb-3 p-3"
                style="background: rgb(128, 203, 196);
                    background: linear-gradient(338deg, rgba(200, 230, 201, .3) 0%, rgba(224, 242, 241, 0.3) 0%); border:1px solid rgb(0, 77, 64)">
                    <div class="mb-3">
                        <div class="d-flex justify-content-lg-between">
                            <h5>Inviato da: {{$message->patient_name}} {{$message->patient_surname}} <span class="badge badge-success">New</span></h5>
                            <div><a href="mailto:{{ $message->patient_mail }}">Rispondi <i class="far fa-share-square" style="color: rgb(0, 77, 64)"></i></a></div>
                        </div>
                        <h6><a href="mailto:{{ $message->patient_mail }}">{{$message->patient_mail}}</a></h6>
                    </div>
                    <h3 class="mb-3"><i>{{$message->text_message}}</i></h3>
                    <div class="d-flex justify-content-end">
                        <p><small>Ricevuto il: {{$message->added_on}}</small></p>
                    </div>
                </div>

                @endforeach
            </div>


            <a class="btn btn-grad" href="{{ route('admin.home') }}">Torna alla Dashboard</a>
        </div>
    </div>

    {{-- ps. sappiamo che verrete a copiarci il codice, futuri team del progetto finale di boolean --}}
@endsection
