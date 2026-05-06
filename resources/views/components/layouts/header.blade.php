<header class="w-full relative z-50 bg-white/95 backdrop-blur-sm shadow transition-all duration-300">
    <div class="mx-auto flex justify-between items-center w-full max-w-7xl px-6 py-4 md:py-3 md:px-8">
        <div>

            <a href="{{ route('pages.landing') }}" class="text-xl font-bold text-gray-800">
                <span class="sr-only">Ks Equipment - Landing</span>
                <img src="{{ asset('images/logo/logo1.png') }}" class="h-10 w-auto" />
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-8">
            <a href="{{ route('pages.landing') }}"
                class="text-gray-600 font-bold hover:text-blue-500 transition-colors">ホーム</a>
            <a href="{{ route('pages.partners') }}"
                class="text-gray-600 font-bold hover:text-blue-500 transition-colors">パートナー
            </a>
            <a href="{{ route('pages.about') }}"
                class="text-gray-600 font-bold hover:text-blue-500 transition-colors">会社概要
            </a>
            <a href="{{ route('pages.customer-harassment-policy') }}"
                class="text-gray-600 font-bold hover:text-blue-500 transition-colors">カスタマーハラスメント対応方針
            </a>
            <a href="{{ route('pages.blog') }}"
                class="text-gray-600 font-bold hover:text-blue-500 transition-colors">ブログ
            </a>
            <a href="{{ route('pages.contact') }}"
                class="text-gray-600 font-bold hover:text-blue-500 transition-colors">お問い合わせ</a>
            @if (auth()->check() && auth()->user()->role === 'admin')
                <a href="{{ route('admin.index') }}"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors">管理者ダッシュボード</a>
            @endif
        </nav>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-700 focus:outline-none p-2">
                <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden mt-2 px-6 pb-4">
        <div class="bg-white/95 text-center backdrop-blur-sm rounded-2xl shadow py-4 px-6">
            <nav class="flex flex-col space-y-4">
                <a href="{{ route('pages.landing') }}"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2 border-b border-gray-100 last:border-b-0">ホーム</a>
                <a href="{{ route('pages.partners') }}"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2 border-b border-gray-100 last:border-b-0">パートナー</a>
                <a href="{{ route('pages.about') }}"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2 border-b border-gray-100 last:border-b-0">会社概要</a>
                <a href="{{ route('pages.customer-harassment-policy') }}"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2 border-b border-gray-100 last:border-b-0">カスハラ対応方針</a>
                <a href="{{ route('pages.blog') }}"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2 border-b border-gray-100 last:border-b-0">ブログ</a>
                <a href="{{ route('pages.contact') }}"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2">お問い合わせ</a>
                @if (auth()->check() && auth()->user()->role === 'admin')
                    <a href="{{ route('admin.index') }}"
                        class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2">管理者ダッシュボード</a>
                @endif
            </nav>
        </div>
    </div>
</header>

@push('scripts')
    <script>
        // This script will ONLY be loaded if this header component is used
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        // Make sure the button exists before adding the event listener
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        }
    </script>
@endpush
