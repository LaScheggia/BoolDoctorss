@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between m-3">
            <div class="mr-3">
                <h1>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h1>
                <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>
                <div class="d-flex justify-content-start align-items-baseline list-inline mt-3">
                    <i class="fas fa-map-marker-alt"></i>
                    <h5 class="list-inline-item ml-1">{{ Auth::user()->address }}</h5>
                </div>
            </div>
            <div style="height: 250px; width:250px">
                {{-- immagine profilo --}}
                @if (Auth::user()->propic && file_exists('storage/' . Auth::user()->propic))
                <div
                 style="height: 250px; width:250px;">
                    <img class="img-thumbnail img-fluid" style="height: 250px; width:250px" src="{{ asset('storage/' . Auth::user()->propic) }}" alt="Immagine di {{ Auth::user()->name }} {{ Auth::user()->surname}}">
                </div>
                @else
                <div
                style="height: 250px; width:250px">
                    <img style="height: 100%"  class="img-thumbnail img-fluid" src="{{ asset('img/neutraldoctor.png') }}" alt="Immagine di {{Auth::user()->name}} {{Auth::user()->surname}}">
                </div>
                 @endif
             </div>
        </div>

        <table class="table">
            <thead class="p-3 mb-2 custom-head text-dark">
                <tr>
                    <th class="text-uppercase" colspan="3"><i class="fas fa-user-md"></i> Il tuo curriculum</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {!! nl2br(e(Auth::user()->bio)) !!}
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="p-3 mb-2 custom-head text-dark">
                <tr>
                    <th class="text-uppercase" colspan="3"><i class="fas fa-stethoscope"></i> Le tue specializzazioni</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        @foreach (Auth::user()->specializations as $specialization)
                            <p>{{ $specialization->name }}</p>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="p-3 mb-2 custom-head text-dark">
                <tr>
                    <th class="text-uppercase" colspan="3"><i class="fas fa-stethoscope"></i>I tuoi servizi </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        @if (Auth::user()->services)
                        {!! nl2br(e(Auth::user()->services)) !!}
                        @else
                            -
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

{{--         <table class="table">
            <thead class="p-3 mb-2 custom-head text-dark">
                <tr>
                    <th class="text-uppercase" colspan="3"><i class="fas fa-clinic-medical"></i> I tuoi servizi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        @if (Auth::user()->services)
                        {!! nl2br(e(Auth::user()->services)) !!}
                        @else
                            -
                        @endif
                    </td>
                </tr>
            </tbody>
        </table> --}}

        {{-- inizialmente c'è un placeholder con un'iconcina (nella table troviamo il modo di mettere un'immagine fissa caricata da noi) --}}
        {{-- poi il dottore nell'edit può modificare la pic --}}

        {{-- valutare di fare due array di nomi: m/f --}}
        {{-- se m prende la propic maschile se f quella femminile --}}
        {{-- prendere spunto dalla funzione delle review --}}

        {{-- <h1>{{ Auth::user()->name }}</h1>
        <h1>{{ Auth::user()->surname }}</h1> --}}
    <div class="d-flex justify-content-between mt-3">
        <div> {{-- bottone copia-incollone da mettere in tutte le views --}}
            <a class="btn btn-grad" href="{{ route('admin.home') }}">Torna alla tua dashboard</a>
        </div>
        <div>
            <a class="btn btn-secondary" href="{{ route('admin.profile.edit', $user) }}">Modifica i tuoi dati</a>
        </div>
    </div>


    </div>
@endsection
