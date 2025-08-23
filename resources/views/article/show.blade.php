<x-layouts.app>
    <div class="bg-white py-12 md:py-24">
        <div class="container mx-auto px-4 lg:px-6">

            <article class="max-w-4xl mx-auto">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                    {{ $article->headline }}
                </h1>

                <p class="text-gray-500 mb-8">
                    Dipublikasikan pada {{ $article->created_at->format('d F Y') }}
                </p>

                @if ($article->image)
                    <img src="{{ asset('images/article/' . $article->image) }}" alt="{{ $article->headline }}"
                        class="w-full h-auto max-h-[500px] object-cover rounded-lg shadow-lg mb-8">
                @endif

                <div class="prose lg:prose-xl max-w-none text-gray-800">
                    {!! $article->body !!}
                </div>

                <div class="mt-12 text-center">
                    <a href="{{ route('landing') }}#section-blog"
                        class="inline-block bg-gray-800 text-white px-8 py-3 rounded-md font-semibold hover:bg-gray-700 transition-colors text-base">
                        &larr; Kembali ke Semua Artikel
                    </a>
                </div>
            </article>

        </div>
    </div>
</x-layouts.app>
