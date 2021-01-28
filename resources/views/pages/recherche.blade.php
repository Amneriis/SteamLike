@extends('layouts.app')

@section('content')

<div class=" w-full rounded ">
    <h3 class="font-bold text-center">Liste des Jeux</h3>

    <div class="bg-gray-200 m-2  rounded ">
        @foreach ($jeux as $jeu)
        <div class="flex flex-col justify-center items-center max-w-sm mx-auto">
            <div class="bg-gray-300 h-64 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url({{$jeu->urlAvatar}})"></div>

            <div class="w-56 md:w-64 bg-white dark:bg-gray-800 -mt-10 shadow-lg rounded-lg overflow-hidden">
                <h3 class="py-2 text-center font-bold uppercase tracking-wide text-gray-800 dark:text-white">{{$jeu->nom_jeu}}</h3>
                
                <div class="flex items-center justify-between py-2 px-3 bg-gray-200 dark:bg-gray-700">
                    <span class="text-gray-800 dark:text-gray-200 font-bold">{{$jeu->prix}}€</span>
                    <a class="bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none" href="{{ route('jeu.show',['id'=>$jeu->id]) }}" >Acheter</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection