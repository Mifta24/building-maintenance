@props([
    'title' => ' ',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layouts.head title="{{ $title }}" />


<body class="flex flex-col min-h-screen">
    <main class="flex-grow">
        {{ $slot }}
    </main>
</body>


</html>
