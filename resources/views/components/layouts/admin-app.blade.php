@props([
    'title' => ' ',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layouts.head title="{{ $title }}" />


<body>
    {{ $slot }}
</body>


</html>
