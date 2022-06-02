@extends('layouts.app')

@section('content')
<div class="col">
    <h1> modifier une campagne </h1>
    <form action="{{ route('campagne.update' , $campagne ) }}" method="post">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="nom" class="form-label">nom </label>
            <input type="text" name="nom"  value="{{$campagne->nom}}">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">reduction </label>
            <input type="number" name="reduction" value="{{$campagne->reduction}}">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">date de debut </label>
            <input type="date" name="date_debut" value="{{$campagne->date_debut}}">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">date de fin </label>
            <input type="date" name="date_fin" value="{{$campagne->date_fin}}">
        </div>


        <div class="form-group">
            @foreach ($articles as $article)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="article{{ $article->id }}"
                        value="{{ $article->id }}" id="article{{ $article->id }}"
                        @foreach ($campagneArticlesIds as $id) @if ($article->id == $id->article_id)
            checked
            @break @endIf
                        @endforeach>
                    <label class="custom-control-label" for="article{{ $article->id }}">{{ $article->nom }}</label>
                </div>
            @endforeach
        </div>

        {{-- @foreach ($articles as $article)
        <input type="checkbox" id="article{{ $article->id }}" name="article{{ $article->id }}"
            value="{{ $article->id }}">
        <label for="article{{ $article->id }}">{{ $article->nom }}</label>
    @endforeach --}}

        

        <input type="submit" class="btn btn-primary" value="Valider">

    </form>
  </div>
  @endsection