<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h1>Détails de la catégorie n°{{$categorie->id}}</h1>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold">{{$categorie->nom_cat}}</h2>
                    <br>
                    <ul><span class="text-gray-400">Liste de tous les jeux de cette catégorie</span>
                        @foreach ($jeux as $jeu)
                        <li class="text-sm">- {{$jeu->titre}}</li>
                        @endforeach
                    </ul>
                    <div class="flex justify-end">
                        <x-buttons.modify :route="route('categories.edit',$categorie->id)" />
                        <x-buttons.delete :action="route('categories.destroy',$categorie->id)" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>