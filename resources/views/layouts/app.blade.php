<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>@yield('title')</title>

    </head>
    <body>
        <nav class="bg-white dark:bg-gray-800 shadow">
            <div class="container mx-auto px-6 py-3 md:flex md:justify-between md:items-center">
                <div class="flex justify-between items-center">
                    <div>
                        <a class="text-gray-800 dark:text-white text-xl font-bold md:text-2xl hover:text-gray-700 dark:hover:text-gray-300" href="/home">SteamLike</a>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button type="button" class=""text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
    
                 <!-- Barre de recherche -->
                <div class="relative bg-gray-100 p-2 rounded border-2 ">
                    <form action={{ route('jeu.search') }} method="get">
                        <input type="search" id="site-search" name="search" placeholder="Recherche" class="ml-8 bg-transparent">
                        <button href="/home" type="submit">Go</button>
                    </form>
                </div>
                

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div class="md:flex items-center">
                    <div class="flex flex-col md:flex-row md:mx-6">
                        <a class="my-1 text-sm text-gray-700 dark:text-gray-200 font-medium hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Accueil</a>
                    </div>


                    <div class="flex items-center py-2 -mx-1 md:mx-0">
                        @guest
                            @if (Route::has('login'))
                                    <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-gray-500 font-medium text-white leading-5 hover:bg-blue-600 md:mx-2 md:w-auto" 
                                    href="{{ route('login') }}">Se connecter</a>
                            @endif

                            @if (Route::has('login'))
                                    <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-blue-500 font-medium text-white leading-5 hover:bg-blue-600 md:mx-0 md:w-auto" 
                                    href="{{ route('register') }}">S'inscrire</a>
                            @endif
                        @else 
                    </div>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-blue-500 font-medium text-white leading-5 hover:bg-blue-600 md:mx-0 md:w-auto" 
                        href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    @endguest
                </div>
            </div>
        </nav>

         @yield('content')
    </body>

    <footer class="shadow-inner mt-5 w-screen absolute bottom-0 ">
            <p class="text-center my-5">SteamLike est un projet étudiant. Il ne permet en aucun cas d'acheter réellement un jeu. &copy; Copyright {{ date('Y')}}</p>
    </footer>
</html>