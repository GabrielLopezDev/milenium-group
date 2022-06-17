<div>

    <!-- component -->
    <div class="ml-2">
        <div class="text-center pb-3">
            <h2 class="text-gray-600 text-lg font-semibold">Crear Noticias</h2>
        </div>

        <div class="grid grid-cols-2 grid-rows-2">

            <div class="mr-2 mt-4">
                <x-input-jet type="text" class="w-full" placeholder="Título" wire:model.defer="title"></x-input-jet>

                <x-input-error for="title" />
            </div>
            <div class="ml-2 mt-4">
                <x-input type="text" class="w-full" placeholder="Medio" wire:model.defer="lead_news"></x-input>

                <x-input-error for="lead_news" />
            </div>

            <div class="mr-2 mt-4">
                <x-input type="date" class="w-full" placeholder="Fecha" wire:model.defer="date"></x-input>

                <x-input-error for="date" />
            </div>
            <div class="ml-2 mt-4">
                <x-input type="file" class="w-full" placeholder="Imagen" wire:model.defer="image" id="{{ $id_image }}"></x-input>

                <x-input-error for="image" />
            </div>

        </div>

        <div class="text-center">
            <button
                wire:click="save"
                wire:loading.remove
                wire:target="save"
                class="bg-indigo-600 text-white px-6 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black mt-4">
                Guardar
            </button>

            <span wire:loading wire:target="save" class="py-2 mt-4" >Cargando...</span>
        </div>

    </div>

</div>
