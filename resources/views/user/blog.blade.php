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
                <!-- Article Card 1 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="images/a23a7c8f4629d3ef4f88b65e5955e4dcd49cae10.png" alt="Construction site tools"
                        class="w-full h-48 object-cover" />
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-sm text-gray-500 mb-2">2025年8月4日</p>
                        <h3 class="text-xl font-bold text-[#003858] mb-3 flex-grow">
                            ZEBとは何ですか？カーボンニュートラル建築の未来を築く
                        </h3>
                        <p class="text-gray-700 mb-4">
                            ZEBの紹介とその建物運営への影響を減少させる方法について
                        </p>
                        <a href="#" class="font-semibold text-[#005f99] hover:text-[#003858] mt-auto">続きを読む
                            &rarr;</a>
                    </div>
                </div>

                <!-- Article Card 2 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="images/2b58a85011cdbe4307553093dceedea9b8253b80.png" alt="Building exterior"
                        class="w-full h-48 object-cover" />
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-sm text-gray-500 mb-2">2025年7月24日</p>
                        <h3 class="text-xl font-bold text-[#003858] mb-3 flex-grow">
                            スマートメンテナンスによるライフサイクルコストの削減
                        </h3>
                        <p class="text-gray-700 mb-4">
                            定期的で効率的なメンテナンスが建物の運営における長期的なコスト削減にどのように寄与するかを学びましょう。
                        </p>
                        <a href="#" class="font-semibold text-[#005f99] hover:text-[#003858] mt-auto">続きを読む
                            &rarr;</a>
                    </div>
                </div>

                <!-- Article Card 3 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="images/e7471a33f8fa940358b48fff2c6beb1d976536a4.png" alt="Abstract design"
                        class="w-full h-48 object-cover" />
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-sm text-gray-500 mb-2">July 10, 2025</p>
                        <h3 class="text-xl font-bold text-[#003858] mb-3 flex-grow">
                            舞台裏: KS設備が社内サービスをどのように運営しているか
                        </h3>
                        <p class="text-gray-700 mb-4">
                            社内サービスモデルの利点と、私たちの安全と品質へのコミットメントを発見してください。
                        </p>
                        <a href="#" class="font-semibold text-[#005f99] hover:text-[#003858] mt-auto">続きを読む
                            &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
