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
                <!-- Partner Card 1 -->
                <x-partner-card imageUrl="{{ asset('images/landing/8_3.svg') }}" title="グローバル建設メディア"
                    description="世界の建設業界向けの主要なニュースソースで、最新のトレンド、技術、プロジェクトをカバーしています。"></x-partner-card>

                <!-- Partner Card 2 -->
                <x-partner-card imageUrl="{{ asset('images/landing/8_18.svg') }}" title="アジア建築ジャーナル"
                    description="アジア全体の革新的な建築デザインを紹介する月刊誌です。"></x-partner-card>

                <!-- Partner Card 3 -->
                <x-partner-card imageUrl="{{ asset('images/landing/8_33.svg') }}" title="ビルディングテックウィークリー"
                    description=" 建設および不動産業界における技術と革新に焦点を当てたオンラインプラットフォーム。"></x-partner-card>

                <!-- Partner Card 4 -->
                <x-partner-card imageUrl="{{ asset('images/landing/8_50.svg') }}" title="インドネシア不動産雑誌"
                    description="インドネシアの不動産市場、投資、ライフスタイルを扱う、主要な印刷およびデジタルメディアです。"></x-partner-card>

                <!-- Partner Card 5 -->
                <x-partner-card imageUrl="{{ asset('images/landing/8_61.svg') }}" title="エンジニアリングポスト"
                    description="土木および構造工学分野の専門家向けに、深いニュースと分析を提供します。"></x-partner-card>

                <!-- Partner Card 6 -->
                <x-partner-card imageUrl="{{ asset('images/landing/8_61.svg') }}" title="インテリアデザイン今"
                    description="プロフェッショナルやデザイン愛好者向けのインテリアデザインの最新のインスピレーションとトレンド。"></x-partner-card>

            </div>
        </div>
    </section>
</x-layouts.app>
