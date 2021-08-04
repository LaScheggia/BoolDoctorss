@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Le tue recensioni</h1>
        {{-- controllo se ci sono recensioni relative al dottore --}}
        @if (count($reviews) == 0)
            <h2 class="text-center mb-5">Nessuna recensione ricevuta</h2>
        @endif

        <div class="row d-flex justify-content-between">
            {{-- recensioni positive --}}
            <div class="col-md-5">
                <h3>Recensioni positive</h3>
                <div class="row">
                    @foreach ($reviews as $review)
                        @if ($review->rating === 3 || $review->rating === 4 || $review->rating === 5)
                            <div class="col-12 border border-success shadow p-3 mb-5 bg-body rounded"  style="background-color: rgba(38, 166, 154, 0.5)">
                                <h4 class="">{{ $review->title }}</h4>
                                <div class="d-flex justify-content-end">
                                    <h5>Valutazione: {{ $review->rating }}/5</h5>
                                </div>
                                <p class="m-3" style="font-size: 1.1rem;"><i>{{ $review->text }}</i></p>
                                <p><small>Inviato da: {{ $review->patient_name }}</small></p>
                                <div class="d-flex justify-content-end">
                                    <p><small>Data e orario del commento: {{ $review->added_on }}</small></p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- recensioni negative --}}
            <div class="col-md-5">
                <h3>Recensioni negative</h3>
                <div class="row">
                    @foreach ($reviews as $review)
                        @if ($review->rating === 1 || $review->rating === 2)
                            <div class="col-12 border border-danger shadow p-3 mb-5 bg-body rounded" style="background-color: rgb(198, 40, 40, 0.5)">
                                <h4 class="">{{ $review->title }}</h4>
                                <div class="d-flex justify-content-end">
                                    <h5>Valutazione: {{ $review->rating }}/5</h5>
                                </div>
                                <p class="m-3" style="font-size: 1.1rem;"><i>{{ $review->text }}</i></p>
                                <p><small>Inviato da: {{ $review->patient_name }}</small></p>
                                <div class="d-flex justify-content-end">
                                    <p><small>Data e orario del commento: {{ $review->added_on }}</small></p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        {{-- se il dottore ha ricevuto recensioni le mostro in pagina --}}

        <a class="btn btn-grad" href="{{ route('admin.home') }}">Torna alla Dashboard</a>
    </div>
@endsection
