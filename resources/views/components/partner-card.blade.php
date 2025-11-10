@props(['image', 'name', 'description'])

<div
    class="group block bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
    <div class="flex flex-col h-full">
        <div class="mb-4 flex-shrink-0">
            @if ($image)
                <img src="{{ $image }}" alt="Media Partner Logo" class="h-16 w-auto mx-auto object-contain" />
            @else
                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-500">画像はありません</span>
                </div>
            @endif
        </div>

        <div class="flex-grow flex flex-col">
            <h3 class="font-bold text-lg text-gray-900 mb-2 transition-colors duration-300 group-hover:text-blue-700">
                {{ $name }}
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed mt-auto">
                {{ $description }}
            </p>
        </div>
    </div>
</div>
