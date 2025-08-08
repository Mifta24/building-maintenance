<x-layouts.app>
    <div class="flex min-h-screen items-center justify-center p-4">

        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-2xl">

            <div class="text-center mb-8">
                {{-- <span class="text-4xl">🚀</span> --}}
                <h1 class="text-3xl font-bold text-gray-800 mt-2">Exhibiting Information Request (Free)</h1>
                <p class="text-gray-500">Complete the form and click "Submit" button to proceed.</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 text-red-700 px-4 py-3 rounded-lg mb-6" role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg class="h-6 w-6 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold">Oops! Something went wrong.</p>
                            <ul class="list-disc pl-5 text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('auth.exhibitionRegistration.send') }}">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    {{-- First Name --}}
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <input type="text" name="firstName" id="firstName" required
                                value="{{ old('firstName') }}"
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                    </div>

                    {{-- Last Name --}}
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <input type="text" name="lastName" id="lastName" required value="{{ old('lastName') }}"
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                    </div>
                </div>

                {{-- Company --}}
                <div class="mb-4">
                    <label for="companyName" class="block text-sm font-medium text-gray-700 mb-1">Company Name</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="text" name="companyName" id="companyName" required
                            value="{{ old('companyName') }}"
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                </div>

                {{-- Email --}}
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                <path
                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                            </svg>
                        </span>
                        <input type="email" name="email" id="email" required value="{{ old('email') }}"
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                </div>

                {{-- Phone Number --}}
                <div class="mb-4">
                    <label for="phoneNumber" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <!-- Ikon Telepon -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.1a1.5 1.5 0 01-2.112 1.651l-1.123-.668a.5.5 0 00-.573.046l-.34.34a.5.5 0 00.046.573l1.123.668a1.5 1.5 0 01.39 2.404l-3.1 3.1a1.5 1.5 0 01-2.122-2.122l3.1-3.1a1.5 1.5 0 012.404.39l.668 1.123a.5.5 0 00.573.046l.34-.34a.5.5 0 00.046-.573l-.668-1.123a1.5 1.5 0 011.65-2.112l3.1.716A1.5 1.5 0 0118 5.648V7a1.5 1.5 0 01-1.5 1.5h-1.352a1.5 1.5 0 01-1.465-1.175l-.716-3.1a1.5 1.5 0 012.112-1.651l1.123.668a.5.5 0 00.573-.046l.34-.34a.5.5 0 00-.046-.573l-1.123-.668a1.5 1.5 0 01-.39-2.404l3.1-3.1a1.5 1.5 0 012.122 2.122l-3.1 3.1a1.5 1.5 0 01-2.404-.39l-.668-1.123a.5.5 0 00-.573-.046l-.34.34a.5.5 0 00.046.573l.668 1.123a1.5 1.5 0 01-1.65 2.112l-3.1-.716A1.5 1.5 0 013.5 18H2A1.5 1.5 0 01.5 16.5v-13z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="tel" name="phoneNumber" id="phoneNumber" required
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                </div>

                {{-- Country --}}
                <div class="mb-4">
                    <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <!-- Ikon Globe/Dunia -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.74 7.343 6 8 6v2c-1.131 0-2.093-.421-2.848-1.118a5.965 5.965 0 00-1.82 3.145H4.332zM10 14a1 1 0 100-2 1 1 0 000 2zm-.668-5.118a5.965 5.965 0 00-1.82-3.145C8.093 5.421 9.131 6 10 6V4c.857 0 1.488-.26 2.168-.732a6.012 6.012 0 011.912 2.706h-1.97c-.32-.681-.79-1.28-1.34-1.74a4.032 4.032 0 00-1.828 4.882H10V9.118a1 1 0 00-.668-.236z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="text" name="country" id="country" required
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                </div>

                {{-- Website --}}
                <div class="mb-4">
                    <label for="website" class="block text-sm font-medium text-gray-700 mb-1">Website</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <!-- Ikon Tautan/Link -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.665l3-3z" />
                                <path
                                    d="M8.603 3.799a.75.75 0 00-1.06 1.06l1.225 1.224a2.5 2.5 0 01-3.536 3.536l-1.224 1.224a.75.75 0 001.06 1.06l1.225-1.224a4 4 0 005.656-5.656l-3-3a4 4 0 00-5.865.225.75.75 0 001.138.977 2.5 2.5 0 013.665-.142l-1.224-1.224z" />
                            </svg>
                        </span>
                        <input type="text" name="website" id="website" required
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                </div>

                {{-- Exhibition --}}
                <div class="mb-4">
                    <label for="exhibition" class="block text-sm font-medium text-gray-700 mb-1">Select
                        Exhibition</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <!-- Ikon Tiket -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M1.5 1.5A1.5 1.5 0 000 3v2.5a1.5 1.5 0 001.5 1.5h1.5a1.5 1.5 0 001.5-1.5V3A1.5 1.5 0 003 1.5H1.5zM1.5 9.5A1.5 1.5 0 000 11v2.5a1.5 1.5 0 001.5 1.5h1.5a1.5 1.5 0 001.5-1.5V11A1.5 1.5 0 003 9.5H1.5zM5.5 1.5A1.5 1.5 0 004 3v12.5a1.5 1.5 0 001.5 1.5h11A1.5 1.5 0 0018 15.5V3a1.5 1.5 0 00-1.5-1.5h-11z" />
                            </svg>
                        </span>
                        <input type="text" name="exhibition" id="exhibition" required
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-3 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 ease-in-out font-semibold">
                        Submit
                    </button>
                </div>
            </form>

            {{-- Or Create Account --}}
            {{-- <div class="flex items-center my-6">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="mx-4 text-gray-500 text-sm">OR</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <p class="mt-6 text-sm text-center text-gray-600">
                Already have an account?
                <a href="{{ route('auth.login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Log in
                </a>
            </p> --}}
        </div>
    </div>
</x-layouts.app>
