@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-gray-800 w-full max-w-sm rounded-lg shadow-md overflow-hidden mx-auto mt-4">
    <div class="py-4 px-6">
        <h2 class="text-center font-bold text-gray-700 dark:text-white text-3xl">SteamLike</h2>

        <h3 class="mt-1 mb-1 text-center font-medium text-gray-600 dark:text-gray-200 text-xl">Ravis de vous revoir !</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mt-4 w-full">
                                <input type="email" placeholder="Adresse mail" class="w-full mt-2 py-2 px-4 bg-white dark:bg-gray-800 text-gray-700 border border-gray-300 dark:border-gray-600 rounded block placeholder-gray-500 dark:placeholder-gray-400 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        

                        <div class="mt-4 w-full">
                                <input placeholder="Mot de passe" type="password" class="w-full mt-2 py-2 px-4 bg-white dark:bg-gray-800 text-gray-700 border border-gray-300 dark:border-gray-600 rounded block placeholder-gray-500 dark:placeholder-gray-400 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mt-4 w-full">
                                <button type="submit" class="py-2 px-4 bg-gray-700 text-white rounded hover:bg-gray-600 focus:outline-none">
                                    {{ __('Se connecter') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
                </div>
            </div>

            <div class="flex items-center justify-center py-4 bg-gray-100 dark:bg-gray-700 text-center">
                <span class="text-gray-600 dark:text-gray-200 text-sm">Tu n'as pas encore de compte ? </span>
                
                <a href="/register" class="text-blue-600 dark:text-blue-400 font-bold mx-2 text-sm hover:text-blue-500">Inscris toi !</a>
            </div>
        </div>
@endsection
