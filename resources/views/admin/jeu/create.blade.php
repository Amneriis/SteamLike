@extends('admin.admin')

@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('jeu')
<div class="flex items-center bg-teal-lighter">
    <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4">
        <h3 class="mb-8">Créer un jeu</h3>
        <form action={{ route('jeu.store') }} class="mb-4 md:flex md:flex-wrap md:justify-between" method="post">
            @csrf
            @method('POST')
            <div class="field-group mb-4 md:w-1/2 m-0 m-auto ">
                <label class="mb-2 uppercase font-bold text-lg text-gray-600" for="nom_jeu">Nom du Jeu :</label>
                <input type="text" id="nom-form" name="nom_jeu" class="bg-gray-100 p-2 rounded border-2" placeholder="Nom du jeu">
            </div>
            <div class="field-group mb-4 md:w-1/2 m-0 m-auto">
                <label class="mb-2 uppercase font-bold text-lg text-gray-600" for="prix">Prix du Jeu :</label>
                <input type="text" id="prix-form" name="prix" class="bg-gray-100 p-2 rounded border-2" placeholder="Prix du jeu">
            </div>
            <div class="field-group mb-4 md:w-1/2 m-0 m-auto">
                <label class="mb-2 uppercase font-bold text-lg text-gray-600" for="prix">URL Image :</label>
                <input type="text" id="url-form" name="url" class="bg-gray-100 p-2 rounded border-2" placeholder="URL Image">
            </div>

            <button class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Ajouter</button>
        </form>
    </div>
</div>
@endsection