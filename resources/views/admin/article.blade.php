@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>modifier le produit {{ $article->nom }} </h2>
        <form method="POST" action="{{ route('article.update', $article) }}" class="pt-3 pb-3 ">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">nom </label>
                <input type="text" name="nom" value="{{ $article->nom }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description </label>
                <input type="text" name="description" value="{{ $article->description }}">
            </div>
            <div class="mb-3">
                <label for="description_detaillee" class="form-label">description_detaillee </label>
                <input type="text" name="description_detaillee" value="{{ $article->description_detaillee }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image </label>
                <input type="text" name="image" value="{{ $article->image }}">
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">prix </label>
                <input type="number" name="prix" value="{{ $article->prix }}">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">stock </label>
                <input type="number" name="stock" value="{{ $article->stock }}">
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">note </label>
                <input type="text" name="note" value="{{ $article->note }}">
            </div>

            @foreach ($gammes as $gamme)
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="{{ $gamme->id }}" id="flexCheckDefault"
                        name="gamme_id" {{ $article->gamme->id == $gamme->id ? "checked" : ""}} >
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $gamme->nom }}
                    </label>
                </div>

            @endforeach

            <input type="submit" class="btn btn-primary" value="Valider">
        </form>
    </div>
@endsection
