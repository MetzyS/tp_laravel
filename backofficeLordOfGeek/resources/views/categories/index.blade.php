    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Liste de toutes les catégories') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table>
                            <thead>
                                <tr class="bg-slate-200 text-slate-600 box-border border">
                                    <th class="text-left px-5 py-3">ID</th>
                                    <th class="text-left px-5 py-3">TITRE</th>
                                    <th class="text-left px-5 py-3 flex items-center justify-between"><span>ACTIONS</span><x-buttons.create :route="route('categories.create')" /></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categorie)
                                <tr class=" border box-border">
                                    <td class="text-center px-5 py-5">{{$categorie->id}}</td>
                                    <td class="text-left px-5 py-5"><a href="{{route('categories.show', $categorie->id)}}">{{$categorie->nom_cat}}</a></td>
                                    <td class="px-5 py-5 inline-flex">
                                        <x-buttons.modify :route="route('categories.edit',$categorie->id)" />
                                        <x-buttons.see :route="route('categories.show',$categorie->id)" />
                                        <x-buttons.delete :action="route('categories.destroy',$categorie->id)" />
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </x-app-layout>