@extends('layouts.app')

@section('content')
@php 
$total = 0; 
foreach ($validation as $article){
   $total += intval($article['quantite']) * intval($article['prix']); 
}

@endphp
    <div class="container">
        <h1 class="text-center">VALIDATION</h1>
        <div class="row">
            @if (count($validation) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Produit</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Description</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($validation as $article)
                            <tr class="table-primary">
                                <th>{{ $article['nom'] }}</th>
                                <th>{{ $article['prix'] }} €</th>
                                <th>{{ $article['description'] }} </th>
                                <th>{{ $article['quantite'] }}</th>
                                <th>{{ intval($article['quantite']) * intval($article['prix']) }} €</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <div class="row">
            <div class="container text-center w-50 add-message ">
                <h2>Adresse de livraision</h2>
                <form action="{{ route('validation.adresse_de_livraision') }}" method="POST">
                    @csrf

                    <select name="adresse_livraision_id" class="form-select" aria-label="Default select example">

                        @if (session()->has('adresse_livraision'))
                            @php $adresse_livraision = session()->get('adresse_livraision');@endphp
                            <option selected>
                                {{ $adresse_livraision->adresse . ' ' . $adresse_livraision->code_postal . ' ' . $adresse_livraision->ville }}
                            </option>
                        @endif

                        @foreach ($user->adresses as $adresse)
                            <option value="{{ $adresse->id }}">
                                {{ $adresse->adresse . ' ' . $adresse->code_postal . ' ' . $adresse->ville }}</option>
                        @endforeach
                    </select>

                    <input type="submit" value="valider">
                </form>
            </div>
            <div class="container text-center w-50 add-message ">
                <h2>Adresse de facturation</h2>
                <form action="{{ route('validation.adresse_de_facturation') }}" method="POST">
                    @csrf
                    <select name="adresse_de_facturation_id" class="form-select" aria-label="Default select example">
                        @if (session()->has('adresse_de_facturation'))
                            @php $adresse_de_facturation = session()->get('adresse_de_facturation');@endphp
                            <option selected>
                                {{ $adresse_de_facturation->adresse . ' ' . $adresse_de_facturation->code_postal . ' ' . $adresse_de_facturation->ville }}
                            </option>
                        @endif
                        @foreach ($user->adresses as $adresse)
                            <option value="{{ $adresse->id }}">
                                {{ $adresse->adresse . ' ' . $adresse->code_postal . ' ' . $adresse->ville }}</option>
                        @endforeach

                    </select>
                    <input type="submit" value="valider">
                </form>
            </div>
            <div class="container text-center w-50 mt-5 ">
                <form action="{{route('validation.frais_de_port')}}" method="post">
                    @csrf
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="4" @if(session()->has("frai_de_port") && session()->get("frai_de_port" ) === "4"  )  checked @endif
                        >
                        <label class="form-check-label" for="flexRadioDefault1">Point relais : 4€</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="5" @if(session()->has("frai_de_port") && session()->get("frai_de_port" ) === "5"  ) checked @endif >
                        <label class="form-check-label" for="flexRadioDefault2">clasique : 5€</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="9.90" @if(session()->has("frai_de_port") && session()->get("frai_de_port" ) === "9.90"  ) checked @endif >
                        <label class="form-check-label" for="flexRadioDefault2">express : 9.90 €</label>
                    </div>
                    <input type="submit" value="valider" >
                </form>

            </div> 
            
            @if(session()->has("frai_de_port") && session()->has('adresse_de_facturation') && session()->has('adresse_livraision'))
            <form action="{{ route('commande.store') }}" method="post">
                @csrf
                <h3 class="pt-5 pb-3 font-weight-bold">Total à payer : {{ intval(session()->get("frai_de_port" )) + $total }} €</h3>
                <input type="hidden" value="{{intval(session()->get("frai_de_port" )) + $total }}" name="total">
                <input type="submit" value="valider ">
            </form>
            @endif
        </div>
        {{-- total --}}
    </div>
@endsection
