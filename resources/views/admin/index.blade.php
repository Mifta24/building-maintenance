<x-layouts.admin-app>
    {{-- Pesan Selamat Datang --}}
    <div class="p-4 sm:p-6 mb-6 sm:mb-8 bg-white rounded-lg shadow">
        <h3 class="text-lg sm:text-xl font-semibold text-gray-900">
            Welcome Back, {{ Auth::user()->name }}!
        </h3>
        <p class="mt-1 text-sm sm:text-base text-gray-600">
            Here is a brief summary of your website's content.
        </p>
    </div>

    {{-- Grid untuk Kartu Statistik --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        <!-- Kartu Jumlah Article -->
        <div class="bg-white rounded-lg shadow p-4 sm:p-6">
            <div class="flex items-center">
                <div class="p-2 sm:p-3 rounded-full bg-blue-500 bg-opacity-20">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </div>
                <div class="ml-3 sm:ml-4">
                    <p class="text-xs sm:text-sm font-medium text-gray-500">Total Article</p>
                    <p class="text-xl sm:text-2xl font-bold text-gray-900">{{ $totalArticles }}</p>
                </div>
            </div>
        </div>
        <!-- Kartu Jumlah Service -->
        <div class="bg-white rounded-lg shadow p-4 sm:p-6">
            <div class="flex items-center">
                <div class="p-2 sm:p-3 rounded-full bg-green-500 bg-opacity-20">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <div class="ml-3 sm:ml-4">
                    <p class="text-xs sm:text-sm font-medium text-gray-500">Total Services</p>
                    <p class="text-xl sm:text-2xl font-bold text-gray-900">{{ $totalServices }}</p>
                </div>
            </div>
        </div>
        <!-- Kartu Jumlah Contacts -->
        <div class="bg-white rounded-lg shadow p-4 sm:p-6">
            <div class="flex items-center">
                <div class="p-2 sm:p-3 rounded-full bg-yellow-500 bg-opacity-20">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-yellow-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12H8m0 0l3-3m-3 3l3 3M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-3 sm:ml-4">
                    <p class="text-xs sm:text-sm font-medium text-gray-500">Total Contacts</p>
                    <p class="text-xl sm:text-2xl font-bold text-gray-900">{{ $totalContacts ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent contacts list --}}
    <div class="mt-6">
        <div class="bg-white rounded-lg shadow p-4 sm:p-6">
            <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Recent Contact Messages</h3>
            <p class="mt-1 text-sm sm:text-base text-gray-600">Latest messages submitted through the contact form.</p>

            <div class="mt-4">
                @if (!empty($recentContacts) && $recentContacts->count())
                    <ul class="space-y-3">
                        @foreach ($recentContacts as $c)
                            <li class="flex items-center justify-between border-b pb-2">
                                <div>
                                    <p class="font-medium">{{ $c->name }} <span class="text-sm text-gray-500">—
                                            {{ $c->email }}</span></p>
                                    <p class="text-sm text-gray-500">
                                        {{ \Illuminate\Support\Carbon::parse($c->created_at)->format('Y-m-d H:i') }}</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.contacts.show', $c->id) }}" class="text-blue-600">View</a>
                                    <form action="{{ route('admin.contacts.destroy', $c->id) }}" method="POST"
                                        onsubmit="return confirm('Delete this message?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600">Delete</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-4">
                        <a href="{{ route('admin.contacts.index') }}" class="text-sm text-gray-700">View all
                            messages</a>
                    </div>
                @else
                    <p class="text-gray-500">No recent messages.</p>
                @endif
            </div>
        </div>
    </div>

</x-layouts.admin-app>
