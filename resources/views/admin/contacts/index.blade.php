@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Contact Messages</h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
        @endif

        <div class="overflow-x-auto bg-white rounded shadow">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Received</th>
                        <th class="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($contacts as $c)
                        <tr>
                            <td class="px-6 py-4">{{ $c->id }}</td>
                            <td class="px-6 py-4">{{ $c->name }}</td>
                            <td class="px-6 py-4">{{ $c->email }}</td>
                            <td class="px-6 py-4">{{ $c->created_at->format('Y-m-d H:i') }}</td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('admin.contacts.show', $c->id) }}" class="text-blue-600 mr-3">View</a>
                                <form action="{{ route('admin.contacts.destroy', $c->id) }}" method="POST"
                                    style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600"
                                        onclick="return confirm('Delete this message?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $contacts->links() }}
        </div>
    </div>
@endsection
