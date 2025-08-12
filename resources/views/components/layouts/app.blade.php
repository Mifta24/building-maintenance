@props([
    'title' => ' ',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layouts.head title="{{ $title }}" />

<body class="antialiased">
    <x-layouts.header></x-layouts.header>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-layouts.footer></x-layouts.footer>
    {{-- @vite('resources/js/app.js') --}}

    @stack('scripts')
</body>


</html>
