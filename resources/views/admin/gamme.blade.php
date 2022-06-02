@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>modifier la gamme {{ $gamme->nom }} </h2>
        <form method="POST" action="{{ route('gamme.update', $gamme) }}" class="pt-3 pb-3 ">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">nom </label>
                <input type="text" name="nom" value="{{ $gamme->nom }}">
            </div>

            <input type="submit" class="btn btn-primary" value="Valider">
            
        </form>
    </div>
@endsection
