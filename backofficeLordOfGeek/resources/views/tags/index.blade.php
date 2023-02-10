    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Liste de tous les tags') }}
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
                                    <th class="text-left px-5 py-3">NOM</th>
                                    <th class="text-left px-5 py-3 flex items-center justify-between"><span>ACTIONS</span><x-buttons.create :route="route('tags.create')" /></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                <tr class=" border box-border">
                                    <td class="text-center px-5 py-5">{{$tag->id}}</td>
                                    <td class="text-left px-5 py-5"><a href="{{route('tags.show', $tag->id)}}">{{$tag->nom_tag}}</a></td>
                                    <td class="px-5 py-5 inline-flex">
                                        <x-buttons.modify :route="route('tags.edit',$tag->id)" />
                                        <x-buttons.see :route="route('tags.show',$tag->id)" />
                                        <x-buttons.delete :action="route('tags.destroy',$tag->id)" />
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