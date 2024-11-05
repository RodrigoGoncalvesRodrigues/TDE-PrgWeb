@foreach($pokemons as $pokemon)
    <div>
        <h3>{{ $pokemon->nome }}</h3>
        <h3>{{ $pokemon->tipo }}</h3>
        <h3>{{ $pokemon->pontos_de_poder }}</h3>
        <a href="{{ url('pokemons/'.$pokemon->id.'/editar') }}">Editar</a>
        <form action="{{ url('pokemons/'.$pokemon->id.'/excluir') }}" method="GET">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
