<x-layouts.admin-app>
    {{-- Set the page title --}}
    <x-slot:title>
        contact Management
    </x-slot:title>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="p-3 sm:p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
            <span class="font-medium">Success!</span> {{ session('success') }}
        </div>
    @endif

    {{-- Main Card --}}
    <div class="bg-white shadow-md sm:rounded-lg overflow-hidden">
        <div class="p-3 sm:p-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-900">
                contact List
            </h2>
            <p class="mt-1 text-sm text-gray-500">
                Manage all news and contacts here.
            </p>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto">
            <table class="w-full text-xs sm:text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-3 sm:px-6 py-2 sm:py-3">No</th>
                        <th scope="col" class="px-3 sm:px-6 py-2 sm:py-3">Name</th>
                        <th scope="col" class="px-3 sm:px-6 py-2 sm:py-3">Email</th>
                        <th scope="col" class="hidden sm:table-cell px-3 sm:px-6 py-2 sm:py-3">Message</th>
                        <th scope="col" class="px-3 sm:px-6 py-2 sm:py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th scope="row"
                                class="px-3 sm:px-6 py-3 sm:py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $contacts->firstItem() + $loop->index }}
                            </th>
                            <td class="px-3 sm:px-6 py-3 sm:py-4 font-medium text-gray-900">
                                <div class="flex flex-col">
                                    <span>{{ $contact->name }}</span>
                                    <span
                                        class="sm:hidden text-xs text-gray-500 mt-1">{{ $contact->created_at->format('d M Y') }}</span>
                                </div>
                            </td>
                            <td class="px-3 sm:px-6 py-3 sm:py-4 font-medium text-gray-900">
                                <div class="flex flex-col">
                                    <span>{{ $contact->email }}</span>
                                    <span
                                        class="sm:hidden text-xs text-gray-500 mt-1">{{ $contact->created_at->format('d M Y') }}</span>
                                </div>
                            </td>
                            <td class="hidden sm:table-cell px-3 sm:px-6 py-3 sm:py-4">
                                {{ $contact->message }}
                            </td>
                            <td class="px-3 sm:px-6 py-3 sm:py-4 text-right">
                                <div class="flex justify-end items-center space-x-1 sm:space-x-2">
                                    {{-- Delete Button with Confirmation Modal --}}
                                    <div x-data="{ open: false }">
                                        <button @click="open = true"
                                            class="font-medium text-red-600 hover:underline text-xs sm:text-sm">Delete</button>

                                        {{-- Modal --}}
                                        <div x-show="open" @click.away="open = false"
                                            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 p-4"
                                            x-cloak>
                                            <div class="bg-white rounded-lg shadow-lg p-4 sm:p-6 w-full max-w-md">
                                                <h3 class="text-lg font-semibold text-gray-900">
                                                    Confirm Deletion</h3>
                                                <p class="mt-2 text-sm text-gray-600">Are you sure
                                                    you want to delete this contact? This action cannot be
                                                    undone.</p>
                                                <div
                                                    class="mt-4 sm:mt-6 flex flex-col sm:flex-row justify-end space-y-2 sm:space-y-0 sm:space-x-3">
                                                    <button @click="open = false"
                                                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 order-2 sm:order-1">Cancel</button>
                                                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}"
                                                        method="POST" class="order-1 sm:order-2">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="w-full sm:w-auto px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">Yes,
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
                            <td colspan="4" class="px-3 sm:px-6 py-3 sm:py-4 text-center text-gray-500">
                                No contacts found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="p-3 sm:p-4 border-t">
            {{ $contacts->links() }}
        </div>
    </div>
</x-layouts.admin-app>
