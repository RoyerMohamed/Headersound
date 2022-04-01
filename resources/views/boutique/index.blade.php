@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-5 mt-5">Ma boutique </h1>

    <div class="row justify-content-around">
        @foreach ($articles as $article)
        <div class="card" style="width: 18rem;">
            <img src="{{ asset("images/$article->image") }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$article->nom}}</h5>
              <p class="card-text">{{$article->description}}</p>
              <form action="" method="post">
                  <input type="submit" class="btn btn-primary" value="details">
                  <input type="hidden" class="btn btn-primary" value="{{$article->id}}" name="article_id">
              </form>
            </div>
          </div>
            
        @endforeach
    </div>
</div>
@endsection