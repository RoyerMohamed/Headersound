@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="text-center mb-5 mt-5">Ma boutique </h1>

        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="card" style="width: 18rem;">
                    <img src="images/{{ $article->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->nom }}</h5>
                        <p class="card-text">{{ $article->description }}</p>
                        <span class="prix">{{ $article->prix }}</span>
                        <br>
                        @if ($article->stock != 0)
                                <span class="btn btn-primary mt-4 mb-4">En stock</span>
                        @else
                               <span class="btn btn-danger mt-4 mb-4">bientot en stock</span>
                        @endif <form method="POST" action="{{ route('details') }}">
                                    @csrf
                                    <input type="submit" class="btn btn-primary" value="details du produit">
                                    <input type="hidden" class="btn btn-primary" value="{{ $article->id }}" name="article_id">
                                </form>
                                <form method="POST" action="{{ route('panier.ajouter_au_panier') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$article->id}} ">
                                    <input type="hidden" name="nom" value="{{ $article->nom }} ">
                                    <input type="hidden" name="prix" value="{{$article->prix}} ">
                                    <input type="hidden" name="description" value="{{$article->description}} ">
                                    <input type="hidden" name="article" value="{{$article}} ">

                                    <input type="number" name="quantite" value="1" >
                                    <input type="submit" value="Ajouter au panier" class="btn btn-primary">
                                </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
