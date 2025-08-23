@props([
    'imageUrl' => ' ',
    'title' => ' ',
    'description' => ' ',
])

<div
    class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 flex flex-col text-center transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:border-blue-500">
    <a href="#" class="block mb-4 flex-shrink-0">
        <img src="{{ $imageUrl }}" alt="Media Partner Logo" class="h-16 w-auto mx-auto object-contain" />
    </a>
    <div class="flex-grow flex flex-col">
        <h3 class="font-bold text-lg text-gray-900 mb-2">
            <a href="#" class="hover:text-blue-700">{{ $title }}</a>
        </h3>
        <p class="text-gray-600 text-sm leading-relaxed mt-auto">
            {{ $description }}
        </p>
    </div>
</div>
