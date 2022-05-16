@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(session()->get("cart"))
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Produit</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">total</th>
                        <th scope="col">opération</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (session()->get("cart") as $article)
                        <tr class="table-primary">
                            <th>{{ $article["nom"] }}</th>
                            <th>{{ $article["prix"]}} €</th>
                            <th>{{ $article["description"] }} </th>
                            <th>
                                <form action=" {{ route('panier.update_cart') }} " method="post">
                                    @csrf
                                    <input type="number" name="quantite" value="{{ intval($article["quantite"]) }}">
                                    <input type="hidden" name="id" value="{{ intval($article["id"]) }}">
                                    <button type="submit" class="btn btn-secondary">valider</button>
                                </form>
                            </th>
                            <th>{{ intval($article["quantite"]) * intval($article["prix"]) }} €</th>
                            <th>
                                <form action=" {{ route('panier.delete' ) }} " method="get">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ intval($article["id"]) }}">
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="alert alert-danger" role="alert">Votre panier est vide !!</div>
            @endif
        </div>
        @if(session()->get("cart"))
        <div class="col  d-flex justify-content-center">
            {{-- <form action="{{route('panier.empty_cart')}}" method="get">
                @csrf
                <input type="submit" class="btn btn-danger" value ="votre panier est vide">           
            </form> --}}
            <a href="{{route('panier.empty_cart')}}" class="btn btn-danger">vider le panier</a>
            
            <a href="{{route('validation.index')}}" class="btn btn-primary">Valider le panier</a>
        </div>
        @endif
        {{-- <div class="row">
            @foreach($adresses as $adresse )

            @endforeach
        </div> --}}
    </div>
@endsection
