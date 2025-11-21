<x-layouts.app>
    <!-- Hero Section -->
    <section id="section-contact-hero" class="relative text-text-light pt-24 pb-12 md:pt-32 md:pb-16">
        <div class="absolute inset-0 -z-10">
            <img src="{{ asset('images/landing/8e49a35a6b4daf521c4fbae8eee9ec3c6dc4b5e8.png') }}" alt="background"
                class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-[#1d1616] opacity-60"></div>
        </div>
        <div class="container mx-auto px-4 text-white text-center">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold leading-tight mt-10 md:mt-16">
                お問い合わせ
            </h1>
            <p class="text-lg md:text-xl lg:text-2xl mt-4 max-w-3xl mx-auto">
                お問い合わせ・ご相談・ご質問など、お気軽にご連絡ください。
            </p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="section-contact-form" class="bg-white py-16 md:py-20 lg:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto bg-gray-50 rounded-lg shadow-lg border border-gray-200 p-6 sm:p-8 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contact Info -->
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-[#003355] mb-4">
                            お気軽にご連絡ください
                        </h2>
                        <p class="text-base md:text-lg text-gray-700 mb-8">
                            下記のフォームにご記入いただければ、担当者より追ってご連絡差し上げます。
                            または、以下の連絡先からもご連絡いただけます。
                        </p>

                        <div class="space-y-6 text-base md:text-lg">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-[#005f99] mt-1 mr-4 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-bold text-[#003858]">住所</h3>
                                    <p class="text-gray-700">
                                        東京都府中市住吉町3-48-47（〒183-0034）
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-[#005f99] mt-1 mr-4 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <div>
                                    <h3 class="font-bold text-[#003858]">電話番号</h3>
                                    <p class="text-gray-700">042-319-1978</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-[#005f99] mt-1 mr-4 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <div>
                                    <h3 class="font-bold text-[#003858]">メールアドレス</h3>
                                    <p class="text-gray-700 break-all">
                                        k.sasaki@kssetubi.co.jp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form -->
                    <div>
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            @if (session('success'))
                                <div class="bg-green-100 text-green-800 p-3 rounded">{{ session('success') }}</div>
                            @endif
                            <div class="space-y-6">
                                <div>
                                    <label for="name"
                                        class="block text-base md:text-lg font-medium text-gray-700">お名前
                                    </label>
                                    <input type="text" name="name" id="name" required
                                        class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#005f99] focus:border-[#005f99] text-base md:text-lg" />
                                </div>
                                <div>
                                    <label for="email"
                                        class="block text-base md:text-lg font-medium text-gray-700">メールアドレス</label>
                                    <input type="email" name="email" id="email" required
                                        class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#005f99] focus:border-[#005f99] text-base md:text-lg" />
                                </div>
                                <div>
                                    <label for="message"
                                        class="block text-base md:text-lg font-medium text-gray-700">メッセージ
                                    </label>
                                    <textarea id="message" name="message" rows="5" required
                                        class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#005f99] focus:border-[#005f99] text-base md:text-lg"></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="w-full inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base md:text-lg font-medium rounded-md text-white bg-[#005f99] hover:bg-[#003858] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005f99]">
                                        メッセージを送信
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
