<x-layouts.admin-app>
    {{-- Set the page title --}}
    <x-slot:title>
        Service Management
    </x-slot:title>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
            <span class="font-medium">Success!</span> {{ session('success') }}
        </div>
    @endif

    {{-- Main Card --}}
    <div class="bg-white shadow-md sm:rounded-lg overflow-hidden">
        <div class="p-4">
            <h2 class="text-xl font-semibold text-gray-900">
                Service List
            </h2>
            <p class="mt-1 text-sm text-gray-500">
                Manage all news and services here.
            </p>
        </div>

        {{-- Table Header & Action Buttons --}}
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 p-4 border-t">
            {{-- Search (Optional, can be implemented later) --}}
            <div class="w-full md:w-1/2">
                {{-- <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Search for services...">
                    </div>
                </form> --}}
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <a href="{{ route('admin.service.create') }}"
                    class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none">
                    <svg class="h-3.5 w-3.5 me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Add Service
                </a>
            </div>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Image</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Date Created</th>
                        <th scope="col" class="px-6 py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $services->firstItem() + $loop->index }}
                            </th>
                            <td class="px-6 py-4">
                                @if ($service->image)
                                    <img src="{{ asset('images/services/' . $service->image) }}"
                                        alt="{{ $service->name }}" class="h-16 w-24 object-cover rounded">
                                @else
                                    <div class="h-16 w-24 flex items-center justify-center bg-gray-100 rounded text-xs">
                                        No Image</div>
                                @endif
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900">
                                {{ $service->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $service->created_at->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end items-center space-x-2">
                                    <a href="{{ route('admin.service.edit', $service->id) }}"
                                        class="font-medium text-blue-600 hover:underline">Edit</a>

                                    {{-- Delete Button with Confirmation Modal --}}
                                    <div x-data="{ open: false }">
                                        <button @click="open = true"
                                            class="font-medium text-red-600 hover:underline">Delete</button>

                                        {{-- Modal --}}
                                        <div x-show="open" @click.away="open = false"
                                            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
                                            x-cloak>
                                            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
                                                <h3 class="text-lg font-semibold text-gray-900">
                                                    Confirm Deletion</h3>
                                                <p class="mt-2 text-sm text-gray-600">Are you sure
                                                    you want to delete this service? This action cannot be
                                                    undone.</p>
                                                <div class="mt-6 flex justify-end space-x-3">
                                                    <button @click="open = false"
                                                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">Cancel</button>
                                                    <form action="{{ route('admin.service.destroy', $service->id) }}"
                                                        method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">Yes,
                                                            Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                No services found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="p-4 border-t">
            {{ $services->links() }}
        </div>
    </div>
</x-layouts.admin-app>
