@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5 mt-5">{{ $article->nom }}</h1>
        <div class="row">
            <div class="col article_img">
                <img src="{{ asset("images/$article->image") }}" width="600" height="400">
            </div>
            <div class="col article_desc">
                <div class="row">

                    {{-- @if ($article->campagnes) --}}
                    {{-- <span class="promation">Promotion : {{ $article->campagnes[0]->nom }} de -{{$article->campagnes[0]->reduction}} %</span> --}}
                    {{-- <p class="prix"><span style="text-decoration: line-through">{{ $article->prix }}</span> <span>{{   $article->prix  - ($article->campagnes[0]->reduction * $article->prix /100 )  }}€</span></p>           --}}
                    {{-- @else --}}
                    <p class="prix"><span > Prix : {{ $article->prix }} €</span></p>
  
                    {{-- @endif --}}

                    <div>
                    @if ($article->stock != 0)

                    <span class="btn btn-primary mt-4 mb-4">En stock</span>   
                    @else 
                    <span class="btn btn-danger mt-4 mb-4">bientot en stock</span>   
                    @endif
                </div>
                </div>
             
                <p>{{ $article->description_detaillee }}</p>
                <div class="col">
                    <form method="POST" action="{{ route('panier.ajouter_au_panier') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$article->id}} ">
                        <input type="hidden" name="nom" value="{{ $article->nom }} ">
                        <input type="hidden" name="prix" value="{{$article->prix}} ">
                        <input type="number" name="quantite" >
                        <input type="submit" value="Ajouter au panier" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
