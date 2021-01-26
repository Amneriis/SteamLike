@extends('layouts.app')

@section('title')
    Jeu
@endsection

@section('content')

    <div class=" h-screen w-full bg-gray-400">
        <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4">
            <h3>Nom du jeu</h3>
            <div class="bg-gray-300 h-64 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://www.psu.com/wp/wp-content/uploads/2019/07/Cyberpunk-2077-1024x576.jpg)"></div>
            <div class="space-y-5">
                <p>Jeu switch</p>
                <p>En stock</p>
                <p>Clé CD</p>
            </div>
            
            <div>
                <button>Acheter</button>
            </div>
        </div>
    </div>
@endsection