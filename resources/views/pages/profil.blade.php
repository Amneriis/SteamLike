@extends('layouts.app')

@section('title')
    Jeu
@endsection

@section('content')
    <div>
        <p>Pseudo</p>
        {{-- <img src="" alt="avatar"> --}}
    </div>
    
    <div>
        <table>
            <thead>Historique de commande</thead>
            <tbody>
                <tr>
                    <td>Id commande</td>
                    <td>Nom du jeu</td>
                    <td>Prix d'achat</td>
                    <td>Date d'achat</td>
                </tr>
                @foreach ($transactions as $transaction)
                <tr>
                    <td>{{$transaction->id}}</td>
                    <td>{{$transaction->nom_jeu}}</td>
                    <td>{{$transaction->montant}}</td>
                    <td>{{$transaction->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection