<x-layouts.app>
    <div class="w-full">
        <div class="bg-[#0b2950] py-12 px-4">
            <h1 class="text-white text-3xl md:text-4xl font-bold text-center">
                Thank you for requesting exhibiting info.
            </h1>
        </div>

        <div class="max-w-4xl mx-auto text-center py-10 px-4">
            <p class="text-lg font-bold text-gray-800">
                {{ session('success') }}
            </p>
            <p class="mt-6 text-gray-700">
                After confirming your information, we will contact you by e-mail (to the registered e-mail address.)
            </p>
            <p class="mt-4 text-gray-700">
                If you do not receive any response from us, please contact Show Management.
            </p>
            <p class="mt-6 text-gray-700">
                (E-mail: 
                <a href="mailto:build-e.jp@rxglobal.com" class="text-sky-600 hover:underline inline-flex items-center">
                    build-e.jp@rxglobal.com
                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>                      
                </a>)
            </p>
        </div>
    </div>
</x-layouts.app>