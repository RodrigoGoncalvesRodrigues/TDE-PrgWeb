<form action="{{ url('pokemons') }}" method="POST">
    @csrf
    <h2>Criar Pokemon</h2>
    <hr>
    <label for="Nome">Nome:</label>
    <input type="text" name="nome" placeholder="Nome do Pokemon" required>
    <label for="Tipo">Tipo:</label>
    <input type="text" name="tipo" placeholder="Tipo do Pokemon" required>
    <label for="integer">Pontos de Poder:</label>
    <input type="integer" name="pontos de poder" placeholder="Pontos de Poder do Pokemon" required>
    <button type="submit">Criar Pokemon</button>
</form>