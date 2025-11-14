@props(['article'])

<article
    class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col transition-transform hover:scale-105 duration-300">
    @if ($article->image)
        <img src="{{ $article->thumbnail ?? $article->image }}" alt="{{ $article->headline }}"
            class="w-full h-48 object-cover">
    @else
        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
            <span class="text-gray-500">画像はありません</span>
        </div>
    @endif
    <div class="p-6 flex flex-col flex-grow">
        <h3 class="text-lg font-bold text-gray-900 mb-2">
            {{ $article->headline }}
        </h3>
        <p class="text-gray-600 text-sm flex-grow mb-4">
            {{ $article->lead }}
        </p>
        <div class="mt-auto flex justify-between items-center">
            <a href="{{ route('pages.article.show', $article) }}"
                class="bg-cyan-500 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-cyan-600 transition-colors">続きを読む</a>
            <span class="text-sm text-gray-500">{{ $article->created_at->format('Y年n月j日') }}</span>
        </div>
    </div>
</article>
