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
                    <br>
                    <p class="text-gray-500">{{$jeu->desc}}</p>
                    <div class="flex justify-end"><x-button-modify/><x-button-delete/></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>