<x-layouts.app>
    <!-- Konten Utama -->
    <main class="container mx-auto px-4 py-16">

        <!-- Judul Halaman -->
        <section class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">Rilis Pers & Blog</h1>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Berita terbaru, pembaruan acara, dan wawasan industri dari
                kami.
            </p>
        </section>

        <!-- Wrapper Layout Utama (Konten + Sidebar) -->
        <div class="flex flex-col lg:flex-row gap-12">

            <!-- Kolom Konten Utama (Kiri) -->
            <div class="w-full lg:w-2/3">
                <div class="space-y-8">

                    <!-- Kartu Artikel 1 -->
                    <article
                        class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col md:flex-row group transition-shadow duration-300 hover:shadow-xl">
                        <a href="#" class="block md:w-1/3 flex-shrink-0">
                            <img src="https://placehold.co/600x400/3B82F6/FFFFFF?text=Berita+1"
                                alt="Gambar artikel berita" class="w-full h-48 md:h-full object-cover">
                        </a>
                        <div class="p-6 flex flex-col justify-center">
                            <p class="text-sm text-gray-500 mb-2">7 Agustus 2025</p>
                            <span
                                class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full mb-3 self-start">Rilis
                                Pers</span>
                            <h3
                                class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-700 transition-colors duration-300">
                                <a href="#">Pengumuman Pameran Teknologi Terbesar Tahun Ini</a>
                            </h3>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Kami dengan bangga mengumumkan penyelenggaraan acara tahunan kami yang akan menampilkan
                                lebih dari 500 peserta pameran...
                            </p>
                        </div>
                    </article>

                    <!-- Kartu Artikel 2 -->
                    <article
                        class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col md:flex-row group transition-shadow duration-300 hover:shadow-xl">
                        <a href="#" class="block md:w-1/3 flex-shrink-0">
                            <img src="https://placehold.co/600x400/10B981/FFFFFF?text=Blog" alt="Gambar artikel blog"
                                class="w-full h-48 md:h-full object-cover">
                        </a>
                        <div class="p-6 flex flex-col justify-center">
                            <p class="text-sm text-gray-500 mb-2">5 Agustus 2025</p>
                            <span
                                class="inline-block bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full mb-3 self-start">Blog</span>
                            <h3
                                class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-700 transition-colors duration-300">
                                <a href="#">5 Tren Industri Konstruksi yang Perlu Anda Ketahui</a>
                            </h3>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Industri konstruksi terus berkembang. Simak lima tren utama yang akan membentuk masa
                                depan
                                industri ini...
                            </p>
                        </div>
                    </article>

                    <!-- Kartu Artikel 3 -->
                    <article
                        class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col md:flex-row group transition-shadow duration-300 hover:shadow-xl">
                        <a href="#" class="block md:w-1/3 flex-shrink-0">
                            <img src="https://placehold.co/600x400/F59E0B/FFFFFF?text=Berita+2"
                                alt="Gambar artikel berita" class="w-full h-48 md:h-full object-cover">
                        </a>
                        <div class="p-6 flex flex-col justify-center">
                            <p class="text-sm text-gray-500 mb-2">2 Agustus 2025</p>
                            <span
                                class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full mb-3 self-start">Rilis
                                Pers</span>
                            <h3
                                class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-700 transition-colors duration-300">
                                <a href="#">Kemitraan Strategis untuk Mendorong Inovasi Digital</a>
                            </h3>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Sebuah langkah maju yang signifikan telah diambil melalui kemitraan baru kami dengan
                                pemimpin teknologi global...
                            </p>
                        </div>
                    </article>

                </div>

                <!-- Navigasi Halaman (Pagination) -->
                <nav class="mt-16 flex justify-center items-center space-x-1 md:space-x-2">
                    <a href="#"
                        class="px-3 py-2 text-gray-500 bg-white rounded-md hover:bg-blue-600 hover:text-white transition-colors duration-200 shadow-sm">&laquo;</a>
                    <a href="#" class="px-4 py-2 text-white bg-blue-600 rounded-md shadow-sm">1</a>
                    <a href="#"
                        class="px-4 py-2 text-gray-700 bg-white rounded-md hover:bg-blue-600 hover:text-white transition-colors duration-200 shadow-sm">2</a>
                    <a href="#"
                        class="px-4 py-2 text-gray-700 bg-white rounded-md hover:bg-blue-600 hover:text-white transition-colors duration-200 shadow-sm">3</a>
                    <span class="px-4 py-2 text-gray-500">...</span>
                    <a href="#"
                        class="px-4 py-2 text-gray-700 bg-white rounded-md hover:bg-blue-600 hover:text-white transition-colors duration-200 shadow-sm">10</a>
                    <a href="#"
                        class="px-3 py-2 text-gray-500 bg-white rounded-md hover:bg-blue-600 hover:text-white transition-colors duration-200 shadow-sm">&raquo;</a>
                </nav>
            </div>

            <!-- Kolom Sidebar (Kanan) -->
            <aside class="w-full lg:w-1/3 space-y-8">

                <!-- Widget Pencarian -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-lg mb-4 border-b border-gray-200 pb-3">Cari Artikel</h3>
                    <div class="relative">
                        <input type="text" placeholder="Kata kunci..."
                            class="w-full border border-gray-300 rounded-md py-2 pl-4 pr-10 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <button class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Widget Kategori -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-lg mb-4 border-b border-gray-200 pb-3">Kategori</h3>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="flex justify-between items-center text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200"><span>Semua</span>
                                <span class="text-xs text-gray-400">&gt;</span></a></li>
                        <li><a href="#"
                                class="flex justify-between items-center text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200"><span>Rilis
                                    Pers</span> <span class="text-xs text-gray-400">&gt;</span></a></li>
                        <li><a href="#"
                                class="flex justify-between items-center text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200"><span>Blog</span>
                                <span class="text-xs text-gray-400">&gt;</span></a></li>
                    </ul>
                </div>

                <!-- Widget Arsip -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-lg mb-4 border-b border-gray-200 pb-3">Arsip</h3>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="flex justify-between items-center text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200"><span>2025</span>
                                <span class="text-xs text-gray-400">&gt;</span></a></li>
                        <li><a href="#"
                                class="flex justify-between items-center text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200"><span>2024</span>
                                <span class="text-xs text-gray-400">&gt;</span></a></li>
                        <li><a href="#"
                                class="flex justify-between items-center text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200"><span>2023</span>
                                <span class="text-xs text-gray-400">&gt;</span></a></li>
                    </ul>
                </div>

            </aside>
        </div>

    </main>

</x-layouts.app>
