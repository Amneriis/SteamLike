@extends('layouts.app')

@section('title')
    Jeu
@endsection

@section('content')
    <div>
        <p>Bonjour, {{Auth::user()->name}}</p>
        {{-- <img src="" alt="avatar"> --}}
    </div>
        <table class=" mx-64 shadow-lg bg-white w-6/12">
            <thead>Historique de commande</thead>
            <tbody>
                <tr>
                    <th class="bg-blue-100 border text-left px-8 py-4">Id commande</th>
                    <th class="bg-blue-100 border text-left px-8 py-4">Nom du jeu</th>
                    <th class="bg-blue-100 border text-left px-8 py-4">Prix d'achat</th>
                    <th class="bg-blue-100 border text-left px-8 py-4">Date d'achat</th>
                </tr>
                @foreach ($transactions as $transaction)
                <tr>
                    <td class="border px-8 py-4">{{$transaction->id}}</td>
                    <td class="border px-8 py-4">{{$transaction->nom_jeu}}</td>
                    <td class="border px-8 py-4">{{$transaction->montant}}</td>
                    <td class="border px-8 py-4">{{$transaction->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection