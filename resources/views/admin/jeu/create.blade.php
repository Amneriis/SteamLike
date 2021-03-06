@extends('admin.admin')

@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('jeu')
<div class="bg-teal-lighter">
    <h3 class="">Créer un jeu</h3>
    <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4 flex items-center">
        
        <form action={{ route('jeu.store') }} class="mb-4 w-1/2 mx-auto" method="post">
            @csrf
            @method('POST')
            <div class="my-4">
                <label class="mb-2 uppercase font-bold text-lg text-gray-600 w-full" for="nom_jeu">Nom du Jeu :</label>
                <input type="text" id="nom-form" name="nom_jeu" class="bg-gray-100 p-2 rounded border-2" placeholder="Nom du jeu" required>
            </div>
            <div class="my-4">
                <label class="mb-2 uppercase font-bold text-lg text-gray-600" for="prix">Prix du Jeu :</label>
                <input type="text" id="prix-form" name="prix" class="bg-gray-100 p-2 rounded border-2" placeholder="Prix du jeu" required>
            </div>
            <div class="my-4">
                <label class="mb-2 uppercase font-bold text-lg text-gray-600" for="prix">URL Image :</label>
                <input type="text" id="url-form" name="url" class="bg-gray-100 p-2 rounded border-2" placeholder="URL Image">
            </div>

            <button class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg p-4 rounded" type="submit">Ajouter</button>
        </form>
    </div>
</div>
@endsection