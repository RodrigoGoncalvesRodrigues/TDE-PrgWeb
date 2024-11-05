<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function Listar()
{
    $pokemons = Pokemon::all();
    return view('pokemons.listar', compact('pokemons'));
}

public function criar()
{
    return view('pokemons.criar');
}
public function salvar(Request $request) 
{
    Pokemon::create($request->all());
    return redirect('pokemons')->with('success', 'Pokemons created successfully.');
}



public function editar($id)
{
    $pokemon = Pokemon::findOrFail($id);
    return view('pokemons.editar', compact('pokemon'));
}
public function atualizar(Request $request, $id)
{
    $pokemon = Pokemon::findOrFail($id);
    $pokemon->update($request->all());
    return redirect('pokemons')->with('success', 'Pokemon updated successfully.');
}



public function excluir($id)
{
    $pokemon = Pokemon::findOrFail($id);
    $pokemon->delete();
    return redirect('pokemons')->with('success', 'Pokemon deleted successfully.');
}
}
