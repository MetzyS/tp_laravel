<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h1>Détails du jeu n°{{$jeu->id}}</h1>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold">{{$jeu->titre}}</h2>
                    <p>{{$categorie->nom_cat}}</p>
                    <br>
                    <div class="flex justify-end">
                        <x-buttons.modify :route="route('jeux.edit',$jeu->id)" />
                        <x-buttons.delete :action="route('jeux.destroy',$jeu->id)" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>