
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier le jeu n°{{$jeu->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Titre</p>
                <form method="POST" action="#">
                <input type="text" name="titre" id="titre" value="{{$jeu->titre}}">
                <br>
                <x-button-save/><x-button-cancel/>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
