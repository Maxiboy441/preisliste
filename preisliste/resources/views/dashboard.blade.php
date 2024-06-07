<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="wine-menu container mx-auto px-4 py-8">
        <x-product-list/>
    </section>
</x-app-layout>
