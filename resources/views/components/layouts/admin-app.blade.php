@props([
    'title' => ' ',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layouts.head title="{{ $title }}" />


<body>
    <x-layouts.header />
    {{ $slot }}
    <x-layouts.footer />
</body>


</html>
