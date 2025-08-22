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
                当社の強みとサービス内容
            </h1>
            <p class="text-lg md:text-xl lg:text-2xl mt-4 max-w-3xl mx-auto">
                比類なき専門性と、日本でも数少ない特殊資格で、お客様の資産価値を守ります。
            </p>
        </div>
    </section>

    <section id="expertise" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 lg:px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">
                    日本でごく限られた専門家だけの特殊資格
                </h2>
                <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
                    当社の技術者は、ビル設備管理の最高峰とも言える国家資格やメーカー認定資格を保有しています。これにより、他の管理会社では対応できない複雑な設備の点検・保守も、法令を遵守し、最高の品質でご提供することが可能です。
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="p-8 border border-gray-200 rounded-lg shadow-sm">
                    <div class="text-blue-500 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">法的基準の完全遵守</h3>
                    <p class="text-gray-600">
                        最新の建築基準法や消防法に精通し、お客様のビルが常に安全で適法な状態であることを保証します。
                    </p>
                </div>
                <div class="p-8 border border-gray-200 rounded-lg shadow-sm">
                    <div class="text-blue-500 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 16v-2m8-8h-2M4 12H2m15.364 6.364l-1.414-1.414M6.05 6.05L4.636 4.636m12.728 12.728L15.536 17M6.05 17.95l1.414-1.414m12.728-12.728L17.95 6.05">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">高度な技術力</h3>
                    <p class="text-gray-600">
                        特定のメーカー製最新鋭設備など、特殊な知識を要する機器のメンテナンスにも対応可能です。
                    </p>
                </div>
                <div class="p-8 border border-gray-200 rounded-lg shadow-sm">
                    <div class="text-blue-500 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">緊急時対応能力</h3>
                    <p class="text-gray-600">
                        万が一の設備トラブル発生時にも、資格保有者が迅速かつ的確な判断を下し、被害を最小限に抑えます。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="services-list" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">主なサービス内容</h2>
                <p class="mt-4 text-gray-600">
                    ビルの資産価値を維持・向上させるための包括的なサービスを提供します。
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-service-card imageUrl="https://i.pinimg.com/1200x/1a/c9/ee/1ac9ee1ba597e2a8991a51b72e1e5d2e.jpg"
                    title="電気設備保守" description="受変電設備から照明器具まで、電力の安定供給と安全を確保するための点検・保守を行います。"></x-service-card>

                <x-service-card imageUrl="https://i.pinimg.com/736x/5e/ee/82/5eee82491b7ebea4cf89761ff815eda7.jpg"
                    title="空調設備点検" description="快適な室内環境を維持するため、業務用エアコンや換気システムの定期的な性能チェックと清掃を実施します。"></x-service-card>

                <x-service-card imageUrl="https://i.pinimg.com/736x/5e/ee/82/5eee82491b7ebea4cf89761ff815eda7.jpg"
                    title="消防設備点検" description="消火器、火災報知器、スプリンクラーなどの消防用設備が正常に作動するかを法に基づき点検します。"></x-service-card>

                <x-service-card imageUrl="https://i.pinimg.com/736x/5e/ee/82/5eee82491b7ebea4cf89761ff815eda7.jpg"
                    title="給排水衛生設備管理" description="貯水槽の清掃や水質検査、ポンプの点検などを行い、安全で衛生的な水の供給を維持します。"></x-service-card>

                <x-service-card imageUrl="https://i.pinimg.com/736x/5e/ee/82/5eee82491b7ebea4cf89761ff815eda7.jpg"
                    title="建物全体診断" description="専門家が建物の構造、外壁、防水などを総合的に診断し、長期的な修繕計画の策定をサポートします。"></x-service-card>

                <x-service-card imageUrl="https://i.pinimg.com/736x/5e/ee/82/5eee82491b7ebea4cf89761ff815eda7.jpg"
                    title="省エネルギー提案" description="エネルギー消費量を分析し、LED化や高効率空調への更新など、コスト削減に繋がるご提案をします。"></x-service-card>
            </div>
        </div>
    </section>
</x-layouts.app>
