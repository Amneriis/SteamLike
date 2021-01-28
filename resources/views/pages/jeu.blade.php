@extends('layouts.app')

@section('title')
    Jeu
@endsection

@section('content')

    <div class="flex flex-col items-center">
        <div>
            <div class="p-8 mt-4 ">
                <div class=" h-96 w-96 bg-center rounded-lg shadow-md bg-cover" style="background-image: url(https://www.psu.com/wp/wp-content/uploads/2019/07/Cyberpunk-2077-1024x576.jpg)"></div>
            </div>
            <div class="p-4 space-y-2 flex flex-col items-center"> 
                <h3>{{$jeux->nom_jeu}}</h3>
                <h3>Prix : {{$jeux->prix}} €</h3>
                <p>En stock</p>
                <p>Clé CD</p>
                <a class="bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none" href="{{ route('jeu.pay',['id'=>$jeux->id]) }}">Acheter</a>
            </div>
        </div>
        
    </div>
@endsection