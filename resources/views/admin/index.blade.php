@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <button onclick="myFunction('produit')" class="btn btn-primary">produit</button>
            </div>
            <div class="col">
                <button onclick="myFunction('produit')" class="btn btn-primary">gamme</button>
            </div>
        </div>

        <div class="row">
            {{-- creat form , promo , produit , --}}
            <div class="col">
                <div id="produit" class="container text-center w-50 add-message ">
                    <h2>Ajouter un produit </h2>
                    <form method="POST" action="{{ route('article.store') }}" class="pt-3 pb-3 ">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">nom </label>
                            <input type="text" name="nom">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">description </label>
                            <input type="text" name="description">
                        </div>
                        <div class="mb-3">
                            <label for="description_detaillee" class="form-label">description_detaillee </label>
                            <input type="text" name="description_detaillee">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">image </label>
                            <input type="text" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="prix" class="form-label">prix </label>
                            <input type="number" name="prix">
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">stock </label>
                            <input type="number" name="stock">
                        </div>
                        <div class="mb-3">
                            <label for="note" class="form-label">note </label>
                            <input type="text" name="note">
                        </div>
                        @foreach ($gammes as $gamme)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $gamme->id }}"
                                    id="flexCheckDefault" name="gamme_id">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $gamme->nom }}
                                </label>
                            </div>
                        @endforeach



                        <input type="submit" class="btn btn-primary" value="Valider">
                    </form>
                </div>
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nom</th>
                            <th scope="col">description</th>
                            <th scope="col">description_detaillee</th>
                            <th scope="col">stock</th>
                            <th scope="col">note</th>
                            <th scope="col">prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{ $article->id }}</th>
                                <td>{{ $article->nom }}</td>
                                <td>{{ $article->description }}</td>
                                <td>{{ $article->description_detaillee }}</td>
                                <td>{{ $article->stock }}</td>
                                <td>{{ $article->note }}</td>
                                <td>{{ $article->prix }}</td>
                                <td>
                                    <form action="{{ route('article.delete', $article->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" name="delete">delete</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('article.edit', $article->id) }}" method="get">
                                        @csrf
                                        <button class="btn btn-primary" name="edit">edit</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>Ajouter une gamme </h2>
                <form method="POST" action="{{ route('gamme.store') }}" class="pt-3 pb-3 ">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">nom </label>
                        <input type="text" name="nom">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Valider">
                </form>
            </div>
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nom</th>
                            <th scope="col">edit</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gammes as $gamme)
                            <tr>
                                <th scope="row">{{ $gamme->id }}</th>
                                <td>{{ $gamme->nom }}</td>
                                <td>
                                    <form action="{{ route('gamme.delete', $gamme->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" name="delete">delete</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('gamme.edit', $gamme->id) }}" method="post">
                                        @csrf
                                        <button class="btn btn-primary" name="delete">edit</button>
                                    </form>
                                </td>


                            </tr>
                        @endforeach
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <h2>liste utilisateurs </h2>

            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">user</th>
                            <th scope="col">role</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->nom }}</td>
                                <td>{{ $user->role_id }}</td>
                                <td>
                                    <form action="{{ route('user.delete', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" name="delete">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h1> cree une campagne </h1>
                <form action="{{ route('campagne.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="nom" class="form-label">nom </label>
                        <input type="text" name="nom">
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">reduction </label>
                        <input type="number" name="reduction">
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">date de fin </label>
                        <input type="date" name="date_fin">
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">date de debut </label>
                        <input type="date" name="date_debut">
                    </div>

                    @foreach ($articles as $article)
                        <input type="checkbox" id="article{{ $article->id }}" name="article{{ $article->id }}"
                            value="{{ $article->id }}" {{}}>
                        <label for="article{{ $article->id }}">{{ $article->nom }}</label>
                    @endforeach
                    <input type="submit" class="btn btn-primary" value="Valider">


                </form>
            </div>
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nom</th>
                            <th scope="col">reduction</th>
                            <th scope="col">date de fin</th>
                            <th scope="col">date de debut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($campagnes as $campagne)
                            <tr>
                                <th scope="row">{{ $campagne->id }}</th>
                                <td>{{ $campagne->nom }}</td>
                                <td>{{ $campagne->reduction }}</td>
                                <td>{{ $campagne->date_debut }}</td>
                                <td>{{ $campagne->date_fin }}</td>
                                <td>
                                    <form action="{{ route('campagne.edit', $campagne->id) }}" method="get">
                                        @csrf
                                        <button class="btn btn-primary" name="edit">edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('campagne.delete', $campagne->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" name="delete">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    {{-- <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script> --}}
@endsection
