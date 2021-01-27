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
                    <td>Nom du jeux</td>
                    <td>Prix d'achat</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection