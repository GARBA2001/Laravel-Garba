<form method="POST" action="{{ route('/detail', ['id' => $inscrip->id]) }}">
    @csrf
    @method('GET')
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
