<div>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 grid grid-cols-2 grid-rows-1 bg-white mt-6">

        @livewire('show-users')
        @livewire('show-news')

    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 grid grid-cols-1 grid-rows-1 bg-white mt-6">

        @livewire('create-news')

    </div>
</div>
