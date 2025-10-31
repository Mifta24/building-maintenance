@props([
    'title' => ' ',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{ $title }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    {{-- IBM font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">

    {{-- TINY MCE --}}
    <x-head.tinymce-config />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

</head>

<body class="bg-gray-100 font-sans antialiased">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen">
        <!-- Sidebar -->
        <div :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" x-cloak
            class="fixed lg:relative lg:translate-x-0 z-30 w-64 flex-shrink-0 bg-white text-gray-600 flex flex-col border-r border-gray-200 transition-transform duration-300 ease-in-out h-screen">
            <x-layouts.admin-sidebar />
        </div>

        <!-- Overlay for mobile -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false" x-cloak
            class="fixed inset-0 bg-black bg-opacity-50 z-20 lg:hidden"></div>

        <!-- Page Content -->
        <main class="antialiased flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <x-layouts.admin-header />
            <div class="container mx-auto px-4 sm:px-6 py-4 sm:py-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
