@props([
    'title' => 'title',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layouts.head title="{{ $title }}" />

<body class='container'>
    {{ $slot }}
</body>


</html>
