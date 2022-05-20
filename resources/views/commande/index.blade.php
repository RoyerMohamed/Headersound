@extends('layouts.app')

@section('content')
@php
$total = 0; 
@endphp
    <div class="container">
        <h2>Details de commande {{ $commande->numero }}</h2>
        <p>numéro : {{ $commande->numero }}</p>
        <p>montant : {{ $commande->prix }} €</p>
        <p>date : {{ $commande->created_at }}</p>
        <div class="container ">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">nom</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Description</th>
                        <th scope="col">quantité</th>
                        <th scope="col">prix ligne</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commande->articles as $article)
                        <tr>
                            <th scope="row">{{ $article->nom }}</th>
                            <td>{{ $article->prix }}€</td>
                            <td>{{ $article->description }}</td>
                            <td>
                                {{ $article->pivot->quantite }}
                            </td>
                            <td>
                                {{ $article->pivot->quantite * $article->prix }}€
                            </td>
                        </tr>
                        @php
                        $total += $article->pivot->quantite * $article->prix;
                        var_dump($total);  
                        @endphp                   
                    @endforeach
                </tbody>
            </table>
        </div>
        <p>Frais de port : {{$commande->prix - $total }}</p>
    </div>
@endsection
