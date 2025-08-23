<x-layouts.app>
    <style>
        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-scroll-left {
            animation: scroll-left 15s linear infinite;
        }

        /* Hover untuk pause animasi */
        .animate-scroll-left:hover {
            animation-play-state: paused;
        }

        /* Smooth transition dan styling tambahan */
        .scroll-container {
            will-change: transform;
        }

        .scroll-container ul {
            display: flex;
            width: 200%;
            /* Double width untuk seamless loop */
        }
    </style>

    <!-- HERO SECTION -->
    <section id="section-hero" class="relative text-text-light">
        <div class="absolute inset-0 -z-10">
            <img src="{{ asset('images/landing/8e49a35a6b4daf521c4fbae8eee9ec3c6dc4b5e8.png') }}"
                alt="Skyscrapers background" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-[#1d1616] opacity-30"></div>
        </div>
        <div class="flex flex-col min-h-[808px]">
            <div class="flex-grow flex items-center">
                <div class="container mx-auto px-4 lg:px-6 text-white text-left">
                    <p class="text-2xl font-medium leading-tight">
                        日本のビル設備の未来をリードする
                    </p>
                    <h1 class="text-4xl md:text-6xl font-bold leading-tight mt-10 md:mt-[61px]">
                        比類なき専門性によるビルメンテナンス
                    </h1>
                    <p class="text-xl md:text-2xl leading-tight mt-[30px] max-w-[768px] mx-auto lg:mx-0">
                        ビルの管理において、信頼に妥協は許されません。
                        当社は、日本国内でごく限られた専門家だけが所有している特殊な資格を保持しており…
                    </p>
                    <a href="{{ route('services') }}"
                        class="mt-8 inline-block bg-blue-400 text-white font-semibold py-2 px-10 rounded-full hover:bg-blue-500 transition-colors shadow-lg">
                        詳細はこちら
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- PARTNER SECTION -->
    <section id="section-partners" class="py-12 bg-white">
        <div class="container mx-auto px-4 lg:px-6 text-center">
            <h3 class="text-lg font-semibold text-gray-600">パートナー企業 :</h3>

            <div
                class="mt-8 w-full overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-200px),transparent_100%)]">
                <div class="scroll-container">
                    <ul class="flex items-center [&_li]:mx-8 [&_img]:max-w-none animate-scroll-left">
                        <li>
                            <img src="{{ asset('images/landing/8_3.svg') }}"
                                class="h-10 object-contain flex-shrink-0" />
                        </li>
                        <li>
                            <img src="{{ asset('images/landing/8_18.svg') }}"
                                class="h-10 object-contain flex-shrink-0" />
                        </li>
                        <li>
                            <img src="{{ asset('images/landing/8_33.svg') }}"
                                class="h-10 object-contain flex-shrink-0" />
                        </li>
                        <li>
                            <img src="{{ asset('images/landing/8_50.svg') }}"
                                class="h-10 object-contain flex-shrink-0" />
                        </li>
                        <li>
                            <img src="{{ asset('images/landing/8_61.svg') }}"
                                class="h-10 object-contain flex-shrink-0" />
                        </li>

                        <li>
                            <img src="{{ asset('images/landing/8_3.svg') }}"
                                class="h-10 object-contain flex-shrink-0" />
                        </li>
                        <li>
                            <img src="{{ asset('images/landing/8_18.svg') }}"
                                class="h-10 object-contain flex-shrink-0" />
                        </li>
                        <li>
                            <img src="{{ asset('images/landing/8_33.svg') }}"
                                class="h-10 object-contain flex-shrink-0" />
                        </li>
                        <li>
                            <img src="{{ asset('images/landing/8_50.svg') }}"
                                class="h-10 object-contain flex-shrink-0" />
                        </li>
                        <li>
                            <img src="{{ asset('images/landing/8_61.svg') }}"
                                class="h-10 object-contain flex-shrink-0" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="section-about" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-6 flex flex-col md:flex-row items-center gap-8">
            <div class="flex-1">
                <h2 class="text-xl font-bold text-[#003355] mb-4">
                    KS Equipment株式会社について
                </h2>
                <p class="text-gray-800 font-semibold mb-3">
                    ビル管理において、信頼は決して妥協してはいけません。
                </p>
                <p class="text-gray-600 mb-4">
                    当社は、日本でも数名しか保有していない特殊な資格を持ち、国内有数のビルメンテナンス事業者です。
                </p>
                <p class="text-gray-600 mb-6">
                    当社を選んでいただくということは、単にメンテナンス会社を雇うのではなく、ビルの価値とオーナー様の安心を守る信頼できる専門家とパートナーになるということです。
                </p>
                <div class="mt-8">
                    <a href="{{ route('contact') }}"
                        class="inline-block bg-[#003858] text-white font-semibold py-3 px-10 rounded-md hover:bg-opacity-90 transition-opacity duration-300">
                        お問い合わせ
                    </a>
                </div>
            </div>

            <div class="flex-1">
                <img src="{{ asset('images/landing/12f871d57343edbdc73d2bc8d9e215e4231c4624.png') }}" alt="City View"
                    class="rounded-md shadow-lg object-cover w-full h-full" />
            </div>
        </div>
    </section>

    <!-- CHOOSE US SECTION -->
    <section id="section-choose-us" class="py-24">
        <div
            class="container mx-auto px-4 lg:px-6 flex flex-col-reverse lg:flex-row lg:items-stretch items-center gap-10 lg:gap-8">
            <div class="flex-[2] grid grid-cols-1 md:grid-cols-2 gap-[35px] w-full">
                <div class="bg-[#f6f6f7] border border-[#c2c5ca] rounded-[14px] shadow-md p-4 flex flex-col gap-2">
                    <img src="{{ asset('images/landing/96_22.svg') }}" alt="Gear icon" class="w-[40px] h-[36px]" />
                    <h3 class="text-2xl font-semibold text-primary leading-tight">
                        日常保守から高度な技術サービスまで対応する包括的なメンテナンスソリューション
                    </h3>
                    <p class="text-sm text-[#929498] leading-tight">
                        日々の業務から高度な技術サービスまで。
                    </p>
                </div>
                <div class="bg-[#f6f6f7] border border-[#c2c5ca] rounded-[14px] shadow-md p-4 flex flex-col gap-2">
                    <img src="{{ asset('images/landing/96_131.svg') }}" alt="Achievement icon"
                        class="w-[40px] h-[36px]" />
                    <h3 class="text-2xl font-semibold text-primary leading-tight">
                        希少な高度資格に裏打ちされた確かな専門知識
                    </h3>
                    <p class="text-sm text-[#929498] leading-tight">
                        珍しい高度な専門資格によって支持されています。
                    </p>
                </div>
                <div class="bg-[#f6f6f7] border border-[#c2c5ca] rounded-[14px] shadow-md p-4 flex flex-col gap-2">
                    <img src="{{ asset('images/landing/96_136.svg') }}" alt="Safety helmet icon"
                        class="w-[40px] h-[36px]" />
                    <h3 class="text-2xl font-semibold text-primary leading-tight">
                        業界最高水準による安全性と法令遵守の確保
                    </h3>
                    <p class="text-sm text-[#929498] leading-tight">
                        すべての建物が業界最高基準を満たすことを確実にします。
                    </p>
                </div>
                <div class="bg-[#f6f6f7] border border-[#c2c5ca] rounded-[14px] shadow-md p-4 flex flex-col gap-2">
                    <img src="{{ asset('images/landing/96_141.svg') }}" alt="Handshake icon"
                        class="w-[40px] h-[36px]" />
                    <h3 class="text-2xl font-semibold text-primary leading-tight">
                        オーナー様は本業に専念いただける安心感の提供
                    </h3>
                    <p class="text-sm text-[#929498] leading-tight">
                        私たちが全てを管理する間、あなたはビジネスに集中することができます。
                    </p>
                </div>
            </div>
            <div
                class="flex-1 bg-[#f6f6f7] border border-[#c2c5ca] rounded-[14px] shadow-md p-4 flex flex-col justify-center items-center text-center">
                <h2 class="text-[32px] font-bold text-text-muted tracking-[1.6px]">
                    当社を選ぶ理由
                </h2>
                <p class="text-[28px] font-medium text-text-muted tracking-[1.4px] leading-tight mt-7">
                    認定を受けた専門家チームが提供する価値：
                </p>
            </div>
        </div>
    </section>

    <!-- BLOG SECTION -->
    <section id="section-blog" class="py-24 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-6">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                    注目のトピックス＆サービスニュース
                </h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    最新のビルメンテナンス、カーボンニュートラリティ、サービス情報をお届けします。
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Card --}}
                @foreach ($articles as $article)
                    <x-blog-card :article="$article" />
                @endforeach
            </div>

            <div class="mt-16 text-center">
                <a href="{{ route('blog') }}#section-blog-posts"
                    class="bg-gray-800 text-white px-8 py-3 rounded-md font-semibold hover:bg-gray-700 transition-colors text-base">
                    すべての記事を見る
                </a>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="section-contact" class="py-24 relative text-white font-sans">
        <div class="absolute inset-0 -z-10">
            <img src="images/57918c7c238ece855591a13c827f50cdbfaa23fa.png" class="w-full h-full object-cover"
                alt="Abstract blue background" />
            <div class="absolute inset-0 bg-gradient-to-r from-[#003858] to-[#005f99] opacity-90"></div>
        </div>

        <div class="container mx-auto px-4 lg:px-6">
            <div class="flex flex-col lg:flex-row gap-16">
                <div class="lg:w-5/12">
                    <h2 class="text-3xl font-bold leading-tight">お問い合わせ</h2>
                    <div class="flex items-center mt-2">
                        <div class="w-44 h-1 bg-white"></div>
                    </div>

                    <p class="mt-8 text-base">
                        ご質問、サービスサポート、またはパートナーシップのご希望についてはKS
                        Equipment株式会社までご連絡ください。お手伝いできることを楽しみにしております。
                    </p>

                    <div class="mt-8">
                        <h3 class="text-3xl font-bold mb-12">KS設備株式会社</h3>
                    </div>

                    <div class="mt-8 space-y-3 text-lg">
                        <p>
                            <strong>住所 : </strong>〒183‑0034 東京都府中市住吉町3‑48‑47
                        </p>
                        <p class="flex items-center">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z">
                                </path>
                            </svg>
                            <strong>電話番号: </strong>042‑319‑1978
                        </p>
                        <p><strong>FAX番号: </strong>042‑319‑1967</p>
                        <p><strong>メールアドレス: </strong>k.sasaki@kssetubi.co.jp</p>
                        <p><strong>営業時間: </strong>月〜金曜 午前9時〜午後5時</p>
                    </div>
                </div>

                <div class="lg:w-7/12 lg:mt-4">
                    <!-- <h3 class="text-3xl font-bold mb-12">KS設備株式会社</h3> -->
                    <form action="#" method="POST" class="space-y-10">
                        <div>
                            <label for="name" class="block text-xl font-medium">氏名</label>
                            <input type="text" id="name" name="name"
                                class="w-full bg-transparent border-0 border-b-2 border-white pb-2 mt-2 focus:outline-none focus:border-cyan-300 transition-colors" />
                        </div>
                        <div>
                            <label for="email" class="block text-xl font-medium">メールアドレス
                            </label>
                            <input type="email" id="email" name="email"
                                class="w-full bg-transparent border-0 border-b-2 border-white pb-2 mt-2 focus:outline-none focus:border-cyan-300 transition-colors" />
                        </div>
                        <div>
                            <label for="message" class="block text-xl font-medium">メッセージ</label>
                            <input type="text" id="message" name="message"
                                class="w-full bg-transparent border-0 border-b-2 border-white pb-2 mt-2 focus:outline-none focus:border-cyan-300 transition-colors" />
                        </div>
                        <div class="pt-6">
                            <button type="submit"
                                class="w-full bg-[#003858] border-2 border-white text-white font-semibold py-3 rounded-lg hover:bg-white hover:text-[#003858] transition-colors duration-300">
                                送信
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
