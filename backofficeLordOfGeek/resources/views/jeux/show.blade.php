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
                    <h2 class="text-2xl font-bold mb-3">{{$jeu->titre}}</h2>
                    <a href=" {{route('categories.show', $categorie->id)}}" class="mt-3 w-fit p-1.5 rounded-md bg-green-200 text-sm">{{$categorie->nom_cat}}</a>

                    @foreach ($tags as $tag)
                    <a href="{{route('tags.show', $tag->id)}}" class="mx-1 mt-3 w-fit p-1.5 rounded-md bg-orange-200 text-sm">
                        {{$tag->nom_tag}}
                    </a>
                    @endforeach

                    <div class="flex justify-end">
                        <x-buttons.modify :route="route('jeux.edit',$jeu->id)" />
                        <x-buttons.delete :action="route('jeux.destroy',$jeu->id)" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>