<?php
$arr = [
    [
        'title' => 'タイトルA',
        'content' => 'コンテントA',
    ],
    [
        'title' => 'タイトルB',
        'content' => 'コンテントB',
    ],
    [
        'title' => 'タイトルC',
        'content' => 'コンテントC',
    ],
    [
        'title' => 'タイトルD',
        'content' => 'コンテント',
    ],
    [
        'title' => 'タイトルA',
        'content' => 'コンテントA',
    ],
    [
        'title' => 'タイトルB',
        'content' => 'コンテントB',
    ],
    [
        'title' => 'タイトルC',
        'content' => 'コンテントC',
    ],
    [
        'title' => 'タイトルD',
        'content' => 'コンテント',
    ],
    [
        'title' => 'タイトルA',
        'content' => 'コンテントA',
    ],
    [
        'title' => 'タイトルB',
        'content' => 'コンテントB',
    ],
    [
        'title' => 'タイトルC',
        'content' => 'コンテントC',
    ],
    [
        'title' => 'タイトルD',
        'content' => 'コンテント',
    ],
];
?>

<x-test-components.app>
    {{-- header --}}
    <x-slot name="header">
        <p class="text-white">TEST1</p>
    </x-slot>

    {{-- contents --}}
    <div
        class="font-sans w-11/12 m-auto text-center text-gray-900 antialiased grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-6">
        @foreach ($arr as $value)
            <x-test-components.card title="{{ $value['title'] }}" content="{{ $value['content'] }}" :message=$message />
        @endforeach
        <x-test-components.card class=" bg-teal-200" />
    </div>
</x-test-components.app>
