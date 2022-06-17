<div>

    <!-- component -->
    <div class="mr-2">
        <div class="text-center pb-3">
            <h2 class="text-gray-600 text-lg font-semibold">Aprobar Usuarios</h2>
        </div>

        <table class="min-w-full table-auto">
            <thead class="justify-between">
                <tr class="bg-gray-800">
                    <th class="px-6 py-2">
                        <span class="text-gray-300">NOMBRE</span>
                    </th>
                    <th class="px-6 py-2">
                        <span class="text-gray-300">CORREO</span>
                    </th>
                    <th class="px-6 py-2">
                        <span class="text-gray-300">ACCIÓN</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-gray-200">
                @if ($users->count())
                    @foreach ($users as $user)
                        <tr class="bg-white border-4 border-gray-200">
                            <td class="text-left">
                                <span class="ml-2 font-semibold">{{ $user->name }}</span>
                            </td>
                            <td class="text-center px-6 py-2">
                                <span>{{ $user->email }}</span>
                            </td>
                            <td class="text-center px-6 py-2">
                                <button
                                    wire:click="accept({{ $user }})"
                                    class="bg-indigo-600 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                                    Aceptar
                                </button>
                                <button
                                    wire:click="delete({{ $user }})"
                                    class="bg-red-600 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-red-600 hover:text-black ">
                                    Rechazar
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
            {{ $users->links() }}
        </div>
    </div>

</div>
