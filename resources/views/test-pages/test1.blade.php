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
        <p>teaast</p>
    </x-slot>

    {{-- contents --}}
    @foreach ($arr as $value)
        <x-test-components.card title="{{ $value['title'] }}" content="{{ $value['content'] }}" />
    @endforeach
</x-test-components.app>
