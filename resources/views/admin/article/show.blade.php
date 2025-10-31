<x-layouts.app>
    <div class="bg-white py-24 md:py-32">
        <div class="container mx-auto px-4 lg:px-6">

            <article class="max-w-4xl mx-auto">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                    {{ $article->headline }}
                </h1>

                <p class="text-gray-500 mb-8">
                    公開日 {{ $article->created_at->format('Y年n月j日') }}
                </p>

                @if ($article->image)
                    <img src="{{ $article->medium_image ?? $article->image }}" alt="{{ $article->headline }}"
                        class="w-full h-auto max-h-[500px] object-cover rounded-lg shadow-lg mb-8">
                @endif

                <div class="prose lg:prose-xl max-w-none text-gray-800">
                    {!! $article->body !!}
                </div>

                <div class="mt-12 text-center">
                    <a href="{{ route('pages.blog') }}#section-blog-posts"
                        class="inline-block bg-gray-800 text-white px-8 py-3 rounded-md font-semibold hover:bg-gray-700 transition-colors text-base">
                        &larr; 戻る
                    </a>
                </div>
            </article>

        </div>
    </div>
</x-layouts.app>
