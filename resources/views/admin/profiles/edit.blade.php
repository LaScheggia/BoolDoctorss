@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Modifica i tuoi dati</h1>
        <h3>Compila i campi necessari per rendere completo il tuo profilo.</h3>
        <p>Un profilo più completo e con una bella immagine attirerà più clienti.</p>
    </div>
    {{-- @if ($errors->any())
        <div class="alert alert-danger container">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <div class="container">
        <form action="{{ route('admin.profile.update', Auth::user()) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-row">
                {{-- input nome --}}
                <div class="form-group col-md-6">
                    <label for="input-group-text">Nome</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', Auth::user()->name) }}" id="name" name="name" placeholder="Nome">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                {{-- input cognome --}}
                <div class="form-group col-md-6"> {{-- input cognome --}}
                    <label for="input-group-text">Cognome</label>
                    <input type="text" class="form-control @error('surname') is-invalid @enderror"
                        value="{{ old('surname', Auth::user()->surname) }}" id="surname" name="surname"
                        placeholder="Cognome">
                    @error('surname')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- input indirizzo --}}
            <div class="form-group">
                <label for="inputAddress">Indirizzo</label>
                {{-- corretto old(address) --}}
                <input type="text" class="form-control @error('address') is-invalid @enderror"
                    value="{{ old('address', Auth::user()->address) }}" id="address" name="address"
                    placeholder="Indirizzo">
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- input specializations checkbox --}}
            <div class="form-row p-1">
                <div class="mb-3">
                    <h6 class="mb-3">Specializzazioni</h6>
                    @foreach ($specializations as $specialization)
                        <div class="d-inline-block mr-3">
                            <input type="checkbox"
                            id="specialization{{ $loop->iteration }}"
                            name="specialization[]"
                            value="{{ $specialization->id }}"
                            @if (in_array($specialization->id, old('specialization', []))) checked
                            @elseif (Auth::user()->specializations->contains($specialization->id)) checked
                            @endif>
                            <label for="tag{{ $loop->iteration }}">{{ $specialization->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- input specializations multiselect --}}
            {{-- <div class="form-group mb-3">
                <div class="">
                    <label id="specializations" class="input-group-text" for="specializations">Specializzazioni*
                    </label>
                </div>
                <select class="custom-select" multiple id="specialization" name="specialization[]">
                    @foreach ($specializations as $specialization)
                        <option
                        value="{{ old('specializations', $specialization->id) }}">
                            {{ $specialization->name }}
                        </option>
                    @endforeach
                </select>
                @error('specializations')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <p class="small">* Tieni premuto CTRL o CMD per selezionare più valori</p> --}}

            {{-- input specializations select 1 --}}
            {{-- <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="specialization">Specializzazione 1</label>
                </div>
                <select class="custom-select" id="specialization" name="specialization[]">
                    @foreach ($specializations as $specialization)
                        <option value="{{ old('specializations', $specialization->id) }}">
                            {{ $specialization->name }}
                        </option>
                    @endforeach
                </select>
            </div> --}}
            {{-- input specializations select 2 --}}
            {{-- <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="specialization">Specializzazione 2</label>
                </div>
                <select class="custom-select" id="specialization" name="specialization[]">
                    @foreach ($specializations as $specialization)
                        <option value="{{ old('specializations', $specialization->id) }}">
                            {{ $specialization->name }}
                        </option>
                    @endforeach
                </select>
            </div> --}}

            {{-- bio --}}
                <div class="input-group mb-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text">La tua Bio</span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea" id="bio" name="bio" rows="10">{{ old('bio', Auth::user()->bio) }}
                    </textarea>
                </div>

                {{-- input servizi --}}
                <div class="input-group mb-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Servizi</span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea" id="services" name="services" rows="5">{{ old('services', Auth::user()->services) }}
                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Conferma le modifiche</button>
        </form>
    </div>

    <script>
        function previewFile() {
            var preview = document.querySelector('img');
            var file = document.querySelector('input[type=file]').files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                preview.src = reader.result;
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
    </script>





@endsection
