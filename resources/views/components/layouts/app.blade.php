@props([
    'title' => ' ',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layouts.head title="{{ $title }}" />


<body class="bg-background-light text-text-dark font-sans antialiased">
    {{-- <x-layouts.header /> --}}
    {{-- header on landing page --}}
    <main class="flex-grow">
        {{ $slot }}
    </main>
    <x-layouts.footer />
</body>


</html>
