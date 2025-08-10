<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex gap-x-4 py-1 text-xs text-gray-600 border-b">
            <a href="{{ route('landing') }}" class="hover:text-blue-700">Home</a>
            <a href="#" class="hover:text-blue-700">Tokyo (December)</a>
            <a href="#" class="hover:text-blue-700">Osaka (August)</a>
        </div>
        <div class="flex justify-between items-center py-1 text-xs text-gray-600 border-b">
            <div>
                <a href="https://www.rxjapan.jp/en" class="hover:text-blue-700">RX Japan Ltd.</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="hover:text-blue-700">Exhibition Hub</a>
                <a href="#" class="hover:text-blue-700">Digital Hub</a>
                <div class="relative">
                    <button class="flex items-center space-x-1">
                        <span>Language (EN)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <nav class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <a href="{{ route('landing') }}" class="text-2xl font-extrabold text-blue-900">JAPAN BUILD</a>
            </div>
            <div class="hidden lg:flex items-center space-x-6 font-medium text-gray-700">
                <a href="{{ route('about') }}" class="hover:text-blue-700">About</a>
                <a href="{{ route('exhibit') }}" class="hover:text-blue-700">Exhibit</a>
                <a href="{{ route('visit') }}" class="hover:text-blue-700">Visit</a>
                <!-- Komponen Dropdown -->
                <div class="relative inline-block text-left group">
                    <!-- Tombol Pemicu Dropdown -->
                    <div>
                        <button type="button"
                            class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                            <span>Press</span>
                            <!-- Ikon Panah Bawah -->
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div
                        class="origin-top-right absolute right-0 pt-2 w-56 rounded-md shadow-lg/10 bg-white focus:outline-none hidden group-hover:block transition-all duration-300">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="menu-button">
                            <!-- Tautan di dalam dropdown -->
                            <a href="{{ route('mediaPartners') }}"
                                class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900"
                                role="menuitem">
                                Media Partners
                            </a>
                            <a href="{{ route('blog') }}"
                                class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900"
                                role="menuitem">
                                Press Release and Blog
                            </a>
                        </div>
                    </div>
                </div>
                <a href="{{ route('blog') }}" class="hover:text-blue-700">Blog</a>
            </div>
            <div class="flex items-center space-x-2">
                <a href="{{ route('auth.exhibitionRegistration.show') }}"
                    class="bg-blue-600 text-white px-5 py-2.5 rounded-md font-semibold hover:bg-blue-700 transition duration-300 text-sm">
                    Exhibiting Info (Free)
                </a>
                <button class="lg:hidden p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </nav>
    </div>
</header>
