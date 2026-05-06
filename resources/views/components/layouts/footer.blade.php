<footer class="bg-[#212121] text-white font-sans">
    <div class="container mx-auto px-6 pt-10 pb-5">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
            <!-- Kolom 1: Logo -->
            <div>
                <img src="{{ asset('images/logo/logo1.png') }}" class="mt-2 w-24 h-auto" />
            </div>

            <!-- Kolom 2: クイックリンク (ホーム, パートナーのみ) -->
            <div>
                <h3 class="text-lg font-bold mb-4">クイックリンク</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('pages.landing') }}" class="hover:text-gray-300 hover:underline">ホーム</a>
                    </li>
                    <li>
                        <a href="{{ route('pages.partners') }}" class="hover:text-gray-300 hover:underline">パートナー</a>
                    </li>
                </ul>
            </div>

            <!-- Kolom 3: Link lainnya (tanpa heading) -->
            <div>
                <h3 class="text-lg font-bold mb-4"><a href="{{ route('pages.about') }}" class="hover:text-gray-300 hover:underline">会社概要</a></h3>
                <ul class="space-y-3">
                    {{-- <li>
                        <a href="{{ route('pages.about') }}" class="hover:text-gray-300 hover:underline">会社概要</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('pages.customer-harassment-policy') }}" class="hover:text-gray-300 hover:underline">カスタマーハラスメント対応方針</a>
                    </li>
                    <li>
                        <a href="{{ route('pages.blog') }}" class="hover:text-gray-300 hover:underline">ブログ</a>
                    </li>
                    <li>
                        <a href="{{ route('pages.contact') }}" class="hover:text-gray-300 hover:underline">お問い合わせ</a>
                    </li>
                </ul>
            </div>

            <!-- Kolom 4: SNS -->
            <div>
                <h3 class="text-lg font-bold mb-4">SNSでつながる</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="hover:text-gray-300 hover:underline">Facebook</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-300 hover:underline">Instagram</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-300 hover:underline">YouTube</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-3 pt-3 border-t border-gray-700">
            <p class="text-sm text-gray-400">
                © 2025 KS Equipment Co., Ltd. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
