<x-layouts.admin-app>
    {{-- Mengatur judul halaman --}}
    <x-slot:title>
        Edit Artikel: {{ $article->headline }}
    </x-slot:title>

    {{-- Pesan Error Validasi --}}
    @if ($errors->any())
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <span class="font-medium">Whoops!</span> Ada masalah dengan input Anda.
            <ul class="mt-1.5 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Card untuk Form --}}
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">
            Formulir Edit Artikel
        </h2>

        <form action="{{ route('admin.article.update', $article->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            @method('PUT') {{-- Jangan lupa method PUT untuk update --}}

            <div>
                <label for="headline"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Headline</label>
                <input type="text" name="headline" id="headline" value="{{ old('headline', $article->headline) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    required>
                @error('headline')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="lead" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lead
                    (Paragraf Pengantar)</label>
                <textarea name="lead" id="lead" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Tulis paragraf pengantar singkat...">{{ old('lead', $article->lead) }}</textarea>
                @error('lead')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div x-data="{ imagePreview: '{{ $article->image ? asset('images/articles/' . $article->image) : null }}' }">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ganti Gambar
                    Artikel</label>

                <template x-if="imagePreview">
                    <div class="my-4">
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">Preview:</p>
                        <img :src="imagePreview" alt="Image Preview" class="rounded-lg max-w-sm h-auto shadow-md">
                    </div>
                </template>

                <input type="file" name="image" id="image"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    @change="imagePreview = URL.createObjectURL($event.target.files[0])">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Kosongkan jika tidak ingin
                    mengganti gambar.</p>
                @error('image')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="body-editor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi
                    Artikel</label>
                <x-forms.tinymce-editor>
                    {{ old('body', $article->body) }}
                </x-forms.tinymce-editor>
                @error('body')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end pt-4 border-t border-gray-200 dark:border-gray-700">
                <a href="{{ route('admin.article.index') }}"
                    class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Batal
                </a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Update Artikel
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin-app>
