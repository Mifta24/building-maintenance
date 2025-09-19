<aside class="w-64 flex-shrink-0 bg-white text-gray-600 flex flex-col border-r border-gray-200">
    <!-- Logo/Header Sidebar -->
    <div class="h-16 flex items-center justify-center text-gray-800 text-xl font-bold border-b border-gray-200">
        Admin Panel
    </div>

    <!-- Menu Navigasi -->
    <nav class="flex-grow px-4 py-4">
        <ul class="space-y-2">
            {{-- Tautan Dashboard --}}
            <li>
                <a href="{{ route('admin.index') }}"
                    class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200
                           {{ request()->routeIs('admin.index') ? 'bg-gray-100 text-gray-900' : 'hover:bg-gray-100 hover:text-gray-900' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- Tautan Artikel --}}
            <li>
                <a href="{{ route('admin.article.index') }}"
                    class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200
                           {{ request()->routeIs('admin.article.*') ? 'bg-gray-100 text-gray-900' : 'hover:bg-gray-100 hover:text-gray-900' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    <span>Artikel</span>
                </a>
            </li>

            {{-- Tautan Service --}}
            <li>
                <a href="{{ route('admin.service.index') }}"
                    class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200
                           {{ request()->routeIs('admin.service.*') ? 'bg-gray-100 text-gray-900' : 'hover:bg-gray-100 hover:text-gray-900' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span>Services</span>
                </a>
            </li>

            {{-- Tautan partner --}}
            <li>
                <a href="{{ route('admin.partner.index') }}"
                    class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200
                           {{ request()->routeIs('admin.partner.*') ? 'bg-gray-100 text-gray-900' : 'hover:bg-gray-100 hover:text-gray-900' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    <span>Partner</span>
                </a>
            </li>

        </ul>
    </nav>
</aside>
