@props([
    'title' => ' ',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layouts.head title="{{ $title }}" />


<body class="flex flex-col min-h-screen">
    <x-layouts.header />
        <main class="flex-grow">
            {{ $slot }}
        </main>
    <x-layouts.footer />
</body>


</html>
