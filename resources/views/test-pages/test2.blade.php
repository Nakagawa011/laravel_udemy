<x-test-components.app>
    {{-- header --}}
    <x-slot name="header">
        <p class="text-white">TEST2</p>
    </x-slot>
    <div
        class="font-sans w-11/12 m-auto text-center text-gray-900 antialiased grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-6">
        <x-test-components.card title="test" content="test-content" message="test-message" />
    </div>

</x-test-components.app>
