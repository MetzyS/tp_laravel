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
                        <label for="titre">Entrez le titre du jeu : </label>
                        <input type="text" name="titre" id="titre" value="{{$jeu->titre}}">
                        @error('titre')
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