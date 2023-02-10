<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier la catégorie n°{{$categorie->id}},
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('categories.update', $categorie->id) }}" method="POST">
                        @method('PUT') @csrf
                        <label for="nom_cat">Entrez le nom de la catégorie : </label>
                        <input type="text" name="nom_cat" id="nom_cat" value="{{$categorie->nom_cat}}">
                        @error('nom_cat')
                        <div class="text-red-500">{{$message}}</div>
                        @enderror
                        <br>
                        <x-buttons.save /><x-buttons.cancel />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>