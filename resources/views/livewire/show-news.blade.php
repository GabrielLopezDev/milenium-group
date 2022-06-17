<div>
    <!-- component -->
    <div class="ml-2">
        <div class="text-center pb-3">
            <h2 class="text-gray-600 text-lg font-semibold">Noticias</h2>
        </div>

        <table class="min-w-full table-auto">
            <thead class="justify-between">
                <tr class="bg-gray-800">
                    <th class="text-left px-6 py-2">
                        <span class="text-gray-300">TÍTULO</span>
                    </th>
                    <th class="px-6 py-2">
                        <span class="text-gray-300">ACCIÓN</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-gray-200">
                @if ($news->count())
                    @foreach ($news as $news_data)
                        <tr class="bg-white border-4 border-gray-200">
                            <td class="text-left">
                                <span class="ml-2">{{ $news_data->title }}</span>
                            </td>
                            <td class="text-center px-6 py-2">
                                <button
                                    wire:click="open({{ $news_data }})"
                                    class="bg-indigo-600 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                                    Ver más
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="bg-white border-4 border-gray-200">
                        <td class="text-center px-6 py-2" colspan="3">
                            <span class="text-gray-500">No se encontraron registros...</span>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div class="px-6 py-4">
            {{ $news->links() }}
        </div>
    </div>

    {{-- Modal --}}
    @if ($currently_news)
        <x-dialog-modal wire:model="open">
            <x-slot name="title">
                <h2 class="font-semibold">{{ $currently_news->title }}</h2>
            </x-slot>
            <x-slot name="content">
                <p class="text-sm">{{ $currently_news->date }}</p>
                <p class="text-lg">{{ $currently_news->lead_news }}</p>
            </x-slot>
            <x-slot name="footer">
                <button
                    wire:click="$set('open', false)"
                    class="bg-red-600 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-red-600 hover:text-black ">
                    Cerrar
                </button>
            </x-slot>
        </x-dialog-modal>
    @endif
</div>
