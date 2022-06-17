<div>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 grid grid-cols-2 grid-rows-1 bg-white mt-6">

        @livewire('show-users')


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
                <tr class="bg-white border-4 border-gray-200">
                    <td class="text-left">
                        <span class="ml-2">Dean Lynch bguysybtsbid ibsuii isbiuibsi ubibsi</span>
                    </td>
                    <td class="text-center px-6 py-2">
                        <button
                            class="bg-indigo-600 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                            Ver más
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    </div>
</div>
