@props(['partner'])

<a href="{{ route('admin.partner.show', $partner) }}"
    class="group block bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
    <div class="flex flex-col h-full">
        <div class="mb-4 flex-shrink-0">
            <img src="{{ $partner->image }}" alt="Media Partner Logo" class="h-16 w-auto mx-auto object-contain" />
        </div>

        <div class="flex-grow flex flex-col">
            <h3 class="font-bold text-lg text-gray-900 mb-2 transition-colors duration-300 group-hover:text-blue-700">
                {{ $partner->name }}
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed mt-auto">
                {{ $partner->description }}
            </p>
        </div>
    </div>
</a>
