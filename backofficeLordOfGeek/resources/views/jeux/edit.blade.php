<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier le jeu n°{{$jeu->id}},
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('jeux.update', $jeu->id) }}" method="POST">
                        @method('PUT') @csrf
                        <label for="titre" class="text-slate-800 font-bold">Titre </label>
                        <br>
                        <input type="text" name="titre" id="titre" value="{{$jeu->titre}}" class="rounded-lg border-gray-200 shadow-sm">
                        @error('titre')
                        <div class="text-red-500">{{$message}}</div>
                        @enderror
                        <br>
                        <div class="my-5">
                            <label for="categorie">Catégorie</label>
                            <select name="categorie" id="categorie">
                                @foreach ($categorie as $categories)
                                <option value="{{$categories->id}}">{{$categories->id}} - {{$categories->nom_cat}}</option>
                                @endforeach
                            </select>
                        </div>
                        <x-buttons.save /><x-buttons.cancel />
                    </form>

                    <form action="">
                        <div>
                            <legend class="text-slate-800 font-bold my-5">Liste des tags:</legend>
                            <ul class="my-5">
                                @foreach ($tags as $tag)
                                <span class="bg-orange-200 p-2 rounded w-fit">{{$tag->nom_tag}}</span>
                                @endforeach
                            </ul>
                            <label for="tags" class="text-slate-800 font-bold my-5">Nouveau Tag:</label>
                            <input type="text" name="tags" id="tags"><button class="mx-5 bg-blue-600 p-2 rounded text-white">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>