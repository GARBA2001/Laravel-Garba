@extends('/layouts/app')

@section('page-content')

    @if($errors)
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @endif
<br><br><br>
<form  method="POST" >
@method('post')
@csrf
<section class="form-container form"> <br>
      <h1 class=inscrire>S'INSCRIRE</h1>
      <input type="text" required placeholder="Nom" class="box" name="name"> <br> <br>
      <input type="text" required placeholder="Prénom" class="box" name="prenom"><br><br>
      <input type="text" required placeholder="Gmail" class="box" name="gmail"><br><br>
      <input type="text" required placeholder="Genre" class="box" name="genre"><br><br>
      <input type="text" required placeholder="Entrer votre numero" class="box" name="numero"><br><br>
      <input type="text" required placeholder="Personne a prévenir " class="box" name="personne"><br><br>
      <input type="submit" value="s'inscrire" class="btn" name="submit">
   </form>

@endsection