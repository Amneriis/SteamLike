@extends('layouts.app')

@section('title')
    Accueil
@endsection

@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div class="w-6/12">
        <a>NOM : {{$jeux->nom_jeu}} || PRIX : {{$jeux->prix}}€</a>
    
        <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4 flex items-center">
            <form action={{ route('transactions.store') }} method="post" class="mb-4 w-1/2 mx-auto">
            @csrf
            @method('POST')
            <input type="hidden" name="id_jeu" value="{{$jeux->id}}">
                <div class="my-4">
                    <label for="">Numéro de carte :</label>
                    <input type="text" name="numCarte" placeholder="Numéro de carte" required class="bg-gray-100 p-2 rounded border-2">
                </div>
                <div class="my-4">
                    <label for="mb-2 uppercase font-bold text-lg text-gray-600 w-full">Titulaire de la carte :</label>
                    <input type="text" name="proprioCarte" placeholder="Numéro Titulaire de la carte carte" required class="bg-gray-100 p-2 rounded border-2">
                </div>
                <div class="my-4">
                    <label for="mb-2 uppercase font-bold text-lg text-gray-600 w-full">Date d'expiration :</label>
                    <input type="text" name="expiration" placeholder="Date d'expiration" required class="bg-gray-100 p-2 rounded border-2">
                </div>
                <div class="my-4">
                    <label for="mb-2 uppercase font-bold text-lg text-gray-600 w-full">Cryptogramme :</label>
                    <input type="text" name="cryptogramme" placeholder="Cryptogramme" required class="bg-gray-100 p-2 rounded border-2">
                </div>
                <div class="my-4">
                    <button type="submit" class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg p-4 rounded">Acheter</button>
                </div>
            </form>
        </div>
    </div>
@endsection