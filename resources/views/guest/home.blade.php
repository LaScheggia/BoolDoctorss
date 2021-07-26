<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Boolpress</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>


    {{-- <h1>Boolpress</h1> --}}
    <div id="app">

    </div>



    <div class="d-flex justify-content-center p-1">
        <div class="nav-item">
            <a class="btn btn-primary btn-sm" href="{{ route('login') }}">{{ __('Login') }}</a>
        </div>
        <div class="nav-item">
            <a class="btn btn-outline-success btn-sm" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    </div>

</body>

</html>
