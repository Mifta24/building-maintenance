@props(['service'])

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    @if ($service->image)
        <img src="{{ asset('images/services/' . $service->image) }}" alt="{{ $service->name }}"
            class="w-full h-48 object-cover">
    @else
        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
            <span class="text-gray-500">画像はありません</span>
        </div>
    @endif
    <div class="p-6">
        <h3 class="text-xl font-semibold mb-2">{{ $service->name }}</h3>
        <p class="text-gray-600">
            {{ $service->description }}
        </p>
    </div>
</div>
