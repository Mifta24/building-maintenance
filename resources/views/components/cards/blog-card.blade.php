@props([
    'imageUrl' => ' ',
    'title' => ' ',
    'descriptionOverview' => ' ',
    'date' => ' ',
])

<article
    class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col transition-transform hover:scale-105 duration-300">
    <img class="w-full h-48 object-cover" src="{{ $imageUrl }}" alt="Blog Image" />
    <div class="p-6 flex flex-col flex-grow">
        <h3 class="text-lg font-bold text-gray-900 mb-2">
            {{ $title }}
        </h3>
        <p class="text-gray-600 text-sm flex-grow mb-4">
            {{ $descriptionOverview }}
        </p>
        <div class="mt-auto flex justify-between items-center">
            <a href="article-zeb.html"
                class="bg-cyan-500 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-cyan-600 transition-colors">続きを読む</a>
            <span class="text-sm text-gray-500">{{ $date }}</span>
        </div>
    </div>
</article>
