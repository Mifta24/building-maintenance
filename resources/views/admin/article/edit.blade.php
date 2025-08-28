<x-layouts.admin-app>
    {{-- Set the page title --}}
    <x-slot:title>
        Edit Article: {{ $article->headline }}
    </x-slot:title>

    {{-- Validation Error Messages --}}
    @if ($errors->any())
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
            <span class="font-medium">Whoops!</span> There were some problems with your input.
            <ul class="mt-1.5 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Card --}}
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Edit Article Form
        </h2>

        <form action="{{ route('admin.article.update', $article->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            @method('PUT') {{-- Don't forget the PUT method for updates --}}

            <div>
                <label for="headline" class="block mb-2 text-sm font-medium text-gray-900">Headline</label>
                <input type="text" name="headline" id="headline" value="{{ old('headline', $article->headline) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
                @error('headline')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="lead" class="block mb-2 text-sm font-medium text-gray-900">Lead
                    (Introductory Paragraph)</label>
                <textarea name="lead" id="lead" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write a short introductory paragraph...">{{ old('lead', $article->lead) }}</textarea>
                @error('lead')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div x-data="{ imagePreview: '{{ $article->image ? asset('images/articles/' . $article->image) : null }}' }">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Change Article
                    Image</label>

                <template x-if="imagePreview">
                    <div class="my-4">
                        <p class="text-sm text-gray-500 mb-2">Preview:</p>
                        <img :src="imagePreview" alt="Image Preview" class="rounded-lg max-w-sm h-auto shadow-md">
                    </div>
                </template>

                <input type="file" name="image" id="image"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                    @change="imagePreview = URL.createObjectURL($event.target.files[0])">
                <p class="mt-1 text-sm text-gray-500" id="file_input_help">Leave blank if you don't want to
                    change the image.</p>
                @error('image')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="body-editor" class="block mb-2 text-sm font-medium text-gray-900">Article
                    Body</label>
                <x-forms.tinymce-editor>
                    {{ old('body', $article->body) }}
                </x-forms.tinymce-editor>
                @error('body')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end pt-4 border-t border-gray-200">
                <a href="{{ route('admin.article.index') }}"
                    class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                    Cancel
                </a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none">
                    Update Article
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin-app>
