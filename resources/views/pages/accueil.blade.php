@extends('layouts.app')

@section('title')
    Accueil
@endsection

@section('content')
    <div class=" grid grid-cols-4 md:grid-cols-4 gap-2 mt-8">
    @foreach ($jeux as $jeu)
        <div class="flex flex-col items-center max-w-sm mx-auto">
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
    <div class="flex justify-center items-center mt-5">
        <a href="#" class="mx-1 px-3 py-2 bg-red-100 dark:bg-gray-800 text-gray-500 dark:text-gray-600 rounded-md cursor-not-allowed">
            Précédent
        </a>

        <a href="#" class="mx-1 px-3 py-2 bg-red-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200 rounded-md">
            1
        </a>

        <a href="#" class="mx-1 px-3 py-2 bg-red-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200 rounded-md">
            2
        </a>

        <a href="#" class="mx-1 px-3 py-2 bg-red-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200 rounded-md">
            3
        </a>

        <a href="#" class="mx-1 px-3 py-2 bg-red-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200 rounded-md">
            Suivant
        </a>
    </div>
@endsection
        

 