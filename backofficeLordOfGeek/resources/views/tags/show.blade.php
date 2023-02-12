<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h1>Détails du tag n°{{$tag->id}}</h1>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold">{{$tag->nom_tag}}</h2>
                    <br>
                    <legend class="text-xl text-gray-400">Liste des jeux avec ce tag</legend>
                    <ul>
                        @foreach ($jeux as $jeu)
                        <li>- <a href="{{route('jeux.show', $jeu->id)}}">{{$jeu->titre}}</a></li>
                        @endforeach
                    </ul>
                    <div class="flex justify-end">
                        <x-buttons.modify :route="route('tags.edit',$tag->id)" />
                        <x-buttons.delete :action="route('tags.destroy',$tag->id)" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>