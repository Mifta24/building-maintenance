<header class="w-full fixed top-0 z-50 md:pt-6 transition-all duration-300">
    <div
        class="
        bg-white/95 backdrop-blur-sm shadow-lg flex justify-between items-center relative
        
        w-full py-4 px-6

        md:max-w-5xl md:mx-auto md:rounded-full md:py-3 md:px-8
    ">
        <div>
            <a href="#" class="text-xl font-bold text-gray-800">KS Equipment Co., Ltd</a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-8">
            <a href="#" class="text-gray-600 font-bold hover:text-blue-500 transition-colors">Home</a>
            <a href="#" class="text-gray-600 font-bold hover:text-blue-500 transition-colors">Partner</a>
            <a href="#" class="text-gray-600 font-bold hover:text-blue-500 transition-colors">About</a>
            <a href="#" class="text-gray-600 font-bold hover:text-blue-500 transition-colors">Blog</a>
            <a href="#" class="text-gray-600 font-bold hover:text-blue-500 transition-colors">Contacts</a>
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

    <div id="mobile-menu" class="md:hidden hidden mt-4 max-w-5xl mx-auto px-4">
        <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-lg py-4 px-6">
            <nav class="flex flex-col space-y-4">
                <a href="#"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2 border-b border-gray-100 last:border-b-0">Home</a>
                <a href="#"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2 border-b border-gray-100 last:border-b-0">Partner</a>
                <a href="#"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2 border-b border-gray-100 last:border-b-0">About</a>
                <a href="#"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2 border-b border-gray-100 last:border-b-0">Blog</a>
                <a href="#"
                    class="text-gray-600 font-bold hover:text-blue-500 transition-colors py-2">Contacts</a>
            </nav>
        </div>
    </div>
</header>

@push('scripts')
    <script>
        // Script ini HANYA akan dimuat jika komponen header ini digunakan
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        // Pastikan tombol ada sebelum menambahkan event listener
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        }
    </script>
@endpush
