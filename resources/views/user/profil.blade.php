@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="row justify-content-center ">
            <div class="col-lg-6 mb-5 mt-5  ">
                <h1 class="text-center app-title">Modification des mes informations</h1>
            </div>
        </div>
        <div class="container text-center w-50 add-message ">
            <form method="POST" action="{{ route('profil.update', $user) }}" class="pt-3 pb-3">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="nom" class="form-label">modifier votre nom </label>
                    <input name="nom" type="text" class="form-control" id="nom" aria-describedby="emailHelp"
                        value={{ $user->nom }}>
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">modifier votre prenom</label>
                    <input name="prenom" type="text" class="form-control" id="prenom" value={{ $user->prenom }}>
                </div>
                <input type="submit" class="btn btn-primary" value="Valider">
            </form>
        </div>
    </div>
    @if (count($user->adresses) < 2)
        <div class="container text-center w-50 add-message ">
            <h2>Ajouter une adresse </h2>
            <form method="POST" action="{{ route('adresse.store') }}" class="pt-3 pb-3">
                @csrf
                <div class="mb-3">
                    <label for="adresse" class="form-label">Ajouter votre adresse </label>
                    <input name="adresse" type="text" class="form-control" id="adresse" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="code_postal" class="form-label">Ajouter votre code postal </label>
                    <input name="code_postal" type="text" class="form-control" id="code_postal"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="ville" class="form-label">Ajouter votre ville </label>
                    <input name="ville" type="text" class="form-control" id="ville" aria-describedby="emailHelp">
                </div>
                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                <input type="submit" class="btn btn-primary" value="Valider">
            </form>
        </div>
    @endif

    @if (count($user->adresses) > 0)
        <h2 class="text-center">modifier votre / vos adresse </h2>
        @foreach ($user->adresses as $adresse)
            <div class="container text-center w-50 add-message ">

                <form method="POST" action="{{ route('adresse.update', $adresse) }}" class="pt-3 pb-3">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="adresse" class="form-label">modifier votre adresse </label>
                        <input name="adresse" type="text" class="form-control" id="adresse" aria-describedby="emailHelp"
                            value={{ $adresse['adresse'] }}>
                    </div>
                    <div class="mb-3">
                        <label for="code_postal" class="form-label">modifier votre code postal </label>
                        <input name="code_postal" type="text" class="form-control" id="code_postal"
                            aria-describedby="emailHelp" value={{ $adresse['code_postal'] }}>
                    </div>
                    <div class="mb-3">
                        <label for="ville" class="form-label">modifier votre ville </label>
                        <input name="ville" type="text" class="form-control" id="ville" aria-describedby="emailHelp"
                            value={{ $adresse['ville'] }}>
                    </div>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                    <input type="submit" class="btn btn-primary" value="Valider">
                </form>
                <form method="POST" action="{{ route('adresse.delete', $adresse) }}" class="pt-3 pb-3">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-danger" value="supprimer">
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">

                </form>
            </div>
        @endforeach
    @endif

    <div class="container text-center w-50 add-message ">
        <h2>modifier votre mot de passe</h2>
        <form method="POST" action="{{ route('profil.updatePassword') }}" class="pt-3 pb-3">
            @csrf
            @method("PUT")

            <div class="mb-3">
                <label for="oldpassword" class="form-label">enter votre ancien mot de passe </label>
                <input name="oldpassword" type="text" class="form-control" id="oldpassword" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="newPassword" class="form-label">enter votre nouvau mot de passe</label>
                <input name="newPassword" type="text" class="form-control" id="newPassword">
            </div>

            <input type="submit" class="btn btn-primary" value="Valider">
        </form>
    </div>
</div>  
  
 
@endsection
