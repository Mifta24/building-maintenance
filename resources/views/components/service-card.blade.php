@props([
    'imageUrl' => ' ',
    'title' => ' ',
    'description' => ' ',
])

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <img src="{{ $imageUrl }}" alt="Service Image" class="w-full h-48 object-cover" />
    <div class="p-6">
        <h3 class="text-xl font-semibold mb-2">{{ $title }}</h3>
        <p class="text-gray-600">
            {{ $description }}
        </p>
    </div>
</div>
