<x-layouts.app>
    <!-- Hero Section -->
    <main class="hero-bg bg-cover bg-center text-white">
        <div class="bg-black bg-opacity-50 min-h-[70vh] flex flex-col justify-center items-center text-center p-4">
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4">
                    Asia's Leading Show for the Building & Housing Industries
                </h1>
                <p
                    class="text-lg md:text-2xl font-semibold mb-6 bg-blue-900 bg-opacity-80 px-4 py-2 inline-block rounded">
                    December 9 - 11, 2025 | Tokyo Big Sight, Japan
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-8">
                    <a href="#"
                        class="w-full sm:w-auto bg-red-600 text-white px-8 py-4 rounded-md font-bold text-lg hover:bg-red-700 transition duration-300 transform hover:scale-105">
                        Become an Exhibitor
                    </a>
                    <a href="#"
                        class="w-full sm:w-auto bg-blue-800 text-white px-8 py-4 rounded-md font-bold text-lg hover:bg-blue-900 transition duration-300 transform hover:scale-105">
                        Visitor Information
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- About Section -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="prose max-w-none lg:prose-lg">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-4">What is JAPAN BUILD?</h2>
                    <p class="text-gray-600">
                        JAPAN BUILD is Asia's leading show covering the building and housing industries.
                    </p>
                    <p class="text-gray-600">
                        It consists of 8 specialised shows. It gathers Smart Building Technology,
                        Home AI/IoT Solutions, Building Materials, Housing Equipment, Renovation Technology, IT
                        for Real Estate, and more from all over the world.
                    </p>
                    <a href="#"
                        class="inline-block mt-4 bg-gray-800 text-white px-6 py-3 rounded-md font-semibold hover:bg-gray-900 transition duration-300">
                        View Brochure
                    </a>
                </div>
                <div>
                    <img src="https://placehold.co/600x400/E2E8F0/334155?text=Team+Discussion"
                        alt="Team discussing at the exhibition" class="rounded-lg shadow-xl w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Concurrent Shows Section -->
    <section class="py-16 sm:py-24 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold text-blue-900">8 Concurrent Shows</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">JAPAN BUILD consists of 8 specialised shows
                    covering the entire building life cycle.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Show Card 1 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/400x250/3B82F6/FFFFFF?text=Smart+Building"
                        class="w-full h-40 object-cover" alt="Smart Building Expo">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2 text-blue-800">Smart Building Expo</h3>
                        <p class="text-gray-700 text-sm">Show for next-generation building development.</p>
                    </div>
                </div>

                <!-- Show Card 2 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/400x250/10B981/FFFFFF?text=AI+Smart+Home"
                        class="w-full h-40 object-cover" alt="AI/Smart Home Expo">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2 text-green-800">AI/Smart Home Expo</h3>
                        <p class="text-gray-700 text-sm">Specialised show for housing with AI & IoT.</p>
                    </div>
                </div>

                <!-- Show Card 3 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/400x250/F59E0B/FFFFFF?text=Building+Material"
                        class="w-full h-40 object-cover" alt="Building Material Expo">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2 text-yellow-800">Building Material Expo</h3>
                        <p class="text-gray-700 text-sm">Show for high-performance building materials.</p>
                    </div>
                </div>

                <!-- Show Card 4 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/400x250/6366F1/FFFFFF?text=Housing+Equipment"
                        class="w-full h-40 object-cover" alt="Housing Equipment Expo">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2 text-indigo-800">Housing Equipment Expo</h3>
                        <p class="text-gray-700 text-sm">Show for housing & urban equipment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
