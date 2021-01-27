@extends('layouts.app')

@section('title')
    Accueil
@endsection

@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div class="w-8/12">
        <a>NOM : {{$jeux->nom_jeu}} || PRIX : {{$jeux->prix}}€</a>
    </div>
    <form action={{ route('transactions.store') }} method="post">
    @csrf
    @method('POST')
    <input type="hidden" name="id_jeu" value="{{$jeux->id}}">
        <div>
            <label for="">Numéro de carte :</label>
            <input type="text" name="numCarte" placeholder="Numéro de carte" required class="rounded-lg">
        </div>
        <div>
            <label for="">Titulaire de la carte :</label>
            <input type="text" name="proprioCarte" placeholder="Numéro Titulaire de la carte carte" required class="rounded-lg">
        </div>
        <div>
            <label for="">Date d'expiration :</label>
            <input type="text" name="expiration" placeholder="Date d'expiration" required class="rounded-lg">
        </div>
        <div>
            <label for="">Cryptogramme :</label>
            <input type="text" name="cryptogramme" placeholder="Cryptogramme" required class="rounded-lg">
        </div>
        <div>
            <button type="submit" class="bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Acheter</button>
        </div>
    </form>
@endsection