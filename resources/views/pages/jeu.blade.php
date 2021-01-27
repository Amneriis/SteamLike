@extends('layouts.app')

@section('title')
    Jeu
@endsection

@section('content')

    <div class=" h-screen w-full bg-gray-400">
        <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4">
            <h3>{{$jeux->nom_jeu}}</h3>
            <h3>{{$jeux->prix}}</h3>
            <div class="bg-gray-300 h-64 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://www.psu.com/wp/wp-content/uploads/2019/07/Cyberpunk-2077-1024x576.jpg)"></div>
            <div class="space-y-5">
                <p>Jeu switch</p>
                <p>En stock</p>
                <p>Clé CD</p>
            </div>
            
            <div>
                <a class="bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none" href="{{ route('jeu.pay',['id'=>$jeux->id]) }}">Acheter</a>
            </div>
        </div>
    </div>
@endsection