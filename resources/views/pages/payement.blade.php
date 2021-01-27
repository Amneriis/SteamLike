@extends('layouts.app')

@section('title')
    Accueil
@endsection

@section('payement')
    <form action="" method="get">
        <div>
            <label for="">Numéro de carte</label>
            <input type="text" name="numCarte" placeholder="Numéro de carte" required>
        </div>
        <div>
            <label for="">Titulaire de la carte</label>
            <input type="text" name="proprioCarte" placeholder="Numéro Titulaire de la carte carte" required>
        </div>
        <div>
            <label for="">Date d'expiration</label>
            <input type="text" name="expiration" placeholder="Date d'expiration" required>
        </div>
        <div>
            <label for="">Cryptogramme</label>
            <input type="text" name="cryptogramme" placeholder="Cryptogramme" required>
        </div>
    </form>
@endsection