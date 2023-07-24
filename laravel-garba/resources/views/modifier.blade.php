<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="{{ asset('style/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>
<body>
    <form action="{{ route('modif', ['id' => $inscrip->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="box">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="{{ $inscrip->nom }}" >
    </div>

    <div class="box">
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom" value="{{ $inscrip-->prenom }}" >
    </div>

    <div class="box">
        <label for="email">Gmail :</label>
        <input type="email" id="email" name="gmail" value="{{ $inscrip-->gmail }}" >
    </div>

    <div class="box">
        <label for="telephone">Genre:</label>
        <input type="text" id="telephone" name="genre" value="{{ $inscrip-->genre }}" >
    </div>

    <div class="box">
        <label for="telephone">Numero:</label>
        <input type="text" id="telephone" name="numero" value="{{ $inscrip-->numero }}" >
    </div>

    <div class="box">
        <label for="telephone">Personne:</label>
        <input type="text" id="telephone" name="personne" value="{{ $inscrip-->personne }}" >
    </div>

    <input type="submit" value="Enregistrer" class="btn" name="submit">
</form>
</body>
</html>