<x-layouts.plain-app>
    <div class="flex min-h-screen items-center justify-center">

        <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm ">
            <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

            @if (session('error'))
                <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('auth.login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ old('email') }}">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex items-center justify-between mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2">
                        <span class="text-sm">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Login
                </button>
            </form>

            <p class="mt-4 text-sm text-center text-gray-600">
                Don't have an account?
                <a href="{{ route('auth.register') }}" class="text-blue-500 hover:underline">Register</a>
            </p>
        </div>
    </div>

</x-layouts.plain-app>
