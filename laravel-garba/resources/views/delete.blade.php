<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<form method="POST" action="{{ route('supprimer', ['id' => $inscrip->id]) }}" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')">
    @csrf
    @method('GET')
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>


</body>
</html>