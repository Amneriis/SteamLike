@extends('layouts.app')

@section('title')
    Accueil
@endsection

@section('content')
    <a href="/admin">Panel admin</a>

    <div class="flex flex-col justify-center items-center max-w-sm mx-auto">
        <div class="bg-gray-300 h-64 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://www.psu.com/wp/wp-content/uploads/2019/07/Cyberpunk-2077-1024x576.jpg)"></div>

        <div class="w-56 md:w-64 bg-white dark:bg-gray-800 -mt-10 shadow-lg rounded-lg overflow-hidden">
            <h3 class="py-2 text-center font-bold uppercase tracking-wide text-gray-800 dark:text-white">Cyberpunk 2077</h3>
            
            <div class="flex items-center justify-between py-2 px-3 bg-gray-200 dark:bg-gray-700">
                <span class="text-gray-800 dark:text-gray-200 font-bold">70€</span>
                <button class="bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none" href="/acheter-jeu" >Add to cart</button>
            </div>
        </div>
    </div>
@endsection
        

 