<x-layouts.app>
    <!-- Hero Section -->
    <section id="section-partners-hero" class="relative text-text-light pt-24 pb-12 md:pt-32 md:pb-16">
        <div class="absolute inset-0 -z-10">
            <img src="{{ asset('images/landing/8e49a35a6b4daf521c4fbae8eee9ec3c6dc4b5e8.png') }}" alt="background"
                class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-[#1d1616] opacity-60"></div>
        </div>
        <div class="container mx-auto px-4 text-white text-center">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold leading-tight mt-10 md:mt-16">
                メディアパートナー
            </h1>
            <p class="text-lg md:text-xl lg:text-2xl mt-4 max-w-3xl mx-auto">
                このイベントの成功に向けて、業界のメディアリーダーと協力できることを誇りに思います。
            </p>
        </div>
    </section>

    <!-- Partners Grid Section -->
    <section class="bg-gray-50 py-16 md:py-20 lg:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grid yang responsif untuk partner -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($partners as $partner)
                    <x-partner-card :partner="$partner" />
                @empty
                    <div class="col-span-full text-center text-gray-500 py-12">
                        <p class="text-xl">現在表示できる記事はありません。</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layouts.app>
