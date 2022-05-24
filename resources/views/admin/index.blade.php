@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    {{-- creat form , promo , produit ,  --}}

    <div class="">

        {{-- create produit --}}
        <h3 class="btn btn-primary">create produit</h3>
        <form action="{{route('article.create')}}" method="post">
            @csrf
            <input type="text" name="nom" >
            <input type="text" name="description" >
            <input type="text" name="description_detaillee" >
            <input type="text" name="image" >
            <input type="number" name="prix" >
            <input type="number" name="stock" >
            <input type="text" name="note" >

            {{-- boucle sur les gamme --}}
        </form>
        
    </div>
    <table class="table w-25 container">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col">description</th>
            <th scope="col">description_detaillee</th>
            <th scope="col">image</th>
            <th scope="col">prix</th>
            <th scope="col">stock</th>
            <th scope="col">note</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->nom}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->description_detaillee}}</td>
                <td>{{$article->image}}</td>
                <td>{{$article->prix}}</td>
                <td>{{$article->stock}}</td>
                <td>{{$article->note}}</td>
              </tr>
            @endforeach
        </tbody>
      </table>

    <div class="">
        {{-- create gamme --}}
        <h3 class="btn btn-primary">create gammes</h3>

        <form action="" method="post">
            @csrf
            <input type="text" name="nom" >
            {{-- boucle sur les gamme --}}
        </form>
    </div>


    </div>
    <div class="row"></div>

</div>
@endsection