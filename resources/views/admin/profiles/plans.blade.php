@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>I tuoi piani di pagamento</h1>

        @foreach ($sponsors as $sponsor)
        <h2>Il tuo abbonamento è di tipo: {{ $sponsor->name }}</h2>
        <h3>Durerà per: {{ $sponsor->duration }} ore.</h3>
        <h4>Costo dell'abbonamento: {{ $sponsor->price }} euro.</h4>

        @endforeach

        <h1>FAI UN UPGRADE AL TUO PROFILO</h1>
        <h3>Acquista un nuovo piano di pagamento</h3>


        {{-- sistemare questa select x fare in modo che venga salvato l'ide del piano selezionato in modo da metterlo  --}}
        {{-- nella parte sotto di braintree così si finisce il ciclo dei pagamenti --}}

        <div class="form-group">
            <label for="newplan">Scegli il tuo piano</label>
            <select class="form-control" id="newplan" name="selectPlan">
                @foreach ($sponsor_plans as $sponsor_plan)
                    <option value="{{ $sponsor_plan->id }}">
                        {{ Str::ucfirst($sponsor_plan->name) }} -
                        {{ $sponsor_plan->price }}€ -
                        {{ $sponsor_plan->duration / 24 }} giorni
                    </option>
                @endforeach
            </select>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="dropin-container"></div>
                <button id="submit-button">Request payment method</button>
            </div>
        </div>

        <a class="btn btn-grad" href="{{ route('admin.home') }}">Torna alla Dashboard</a>
    </div>

    <script>
        var button = document.querySelector('#submit-button');

        braintree.dropin.create({
            authorization: "{{ Braintree\ClientToken::generate() }}",
            container: '#dropin-container'
        }, function (createErr, instance) {
            button.addEventListener('click', function () {
                instance.requestPaymentMethod(function (err, payload) {
                    //fare un event listener che prende il value @onclick della select x il pagamento
                    //e metterlo al posto dell'1 così che si completa il pagamento e allo user viene upgradato il profilo
                    $.get('{{ route('admin.payment.sponsor', 1) }}', { payload }, function (response) {
                        if (response.success) {
                            alert('Payment successfull!');
                        } else {
                            alert('Payment failed');
                        }
                    }, 'json');
                });
            });
        });
    </script>
@endsection
