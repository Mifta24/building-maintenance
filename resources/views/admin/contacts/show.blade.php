<x-layouts.admin-app>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Contact Message #{{ $contact->id }}</h1>

        <div class="bg-white p-6 rounded shadow">
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone ?? '-' }}</p>
            <p class="mt-4"><strong>Message:</strong></p>
            <div class="mt-2 p-4 bg-gray-50 rounded">{{ $contact->message }}</div>

            <div class="mt-6 flex gap-3">
                <a href="{{ route('admin.contacts.index') }}" class="px-4 py-2 bg-gray-200 rounded">Back</a>
                <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded"
                        onclick="return confirm('Delete this message?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin-app>
