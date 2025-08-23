<x-layouts.app>
    <!-- Hero Section -->
    <section id="section-blog-hero" class="relative text-text-light pt-24 pb-12 md:pt-32 md:pb-16">
        <div class="absolute inset-0 -z-10">
            <img src="{{ asset('images/landing/8e49a35a6b4daf521c4fbae8eee9ec3c6dc4b5e8.png') }}" alt="background"
                class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-[#1d1616] opacity-60"></div>
        </div>
        <div class="container mx-auto px-4 text-white text-center">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold leading-tight mt-10 md:mt-16">
                当社ブログ
            </h1>
            <p class="text-lg md:text-xl lg:text-2xl mt-4 max-w-3xl mx-auto">
                KS
                Equipmentチームによる最新ニュース、プロジェクト紹介、専門的な見解をお届けします。
            </p>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section id="section-blog-posts" class="bg-gray-50 py-16 md:py-20 lg:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-[#003355] mb-12 text-center">
                最新の記事
            </h2>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($articles as $article)
                    <x-blog-card :article="$article" />
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
