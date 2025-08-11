<x-layouts.app>
    <main>
        <section id="section-hero" class="relative text-text-light">
            <div class="absolute inset-0 -z-10">
                <img src="{{ asset('images/landing/8e49a35a6b4daf521c4fbae8eee9ec3c6dc4b5e8.png') }}"
                    alt="Skyscrapers background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-[#1d1616] opacity-30"></div>
            </div>
            <div class="container flex flex-col min-h-[808px] py-5">

                {{-- HEADER --}}
                <x-layouts.header></x-layouts.header>

                <div class="flex-grow flex items-center">
                    <div class="container mx-auto px-4 text-white text-left">
                        <p class="text-2xl font-medium leading-tight">Leading the Future of Building Equipment in
                            Japan</p>
                        <h1 class="text-4xl md:text-6xl font-bold leading-tight mt-10 md:mt-[61px]">Building
                            Maintenance with Unmatched Expertise</h1>
                        <p class="text-xl md:text-2xl leading-tight mt-[30px] max-w-[768px] mx-auto lg:mx-0">
                            When it comes to managing your building, trust should never be compromised. Our company
                            holds specialized certifications that only a handful of professionals in Japan
                            possess...</p>
                        <a href="#"
                            class="mt-8 inline-block bg-blue-400 text-white font-semibold py-2 px-10 rounded-full hover:bg-blue-500 transition-colors shadow-lg">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="section-partners" class="py-[50px] bg-background-light relative overflow-hidden">
            <div class="absolute inset-y-0 left-0 w-1/5 bg-gradient-to-r from-background-light to-transparent z-10">
            </div>
            <div class="container text-center">
                <h3 class="text-2xl font-bold text-text-muted">Partnering with :</h3>
                <div class="mt-8 flex justify-center lg:justify-around items-center flex-wrap gap-10">
                    <img src="{{ asset('images/landing/8_3.svg') }}" alt="Partner logo 1"
                        class="h-[45px] object-contain">
                    <img src="{{ asset('images/landing/8_18.svg') }}" alt="Partner logo 2"
                        class="h-[45px] object-contain">
                    <img src="{{ asset('images/landing/8_33.svg') }}" alt="Partner logo 3"
                        class="h-[45px] object-contain">
                    <img src="{{ asset('images/landing/8_50.svg') }}" alt="Partner logo 4"
                        class="h-[45px] object-contain">
                    <img src="{{ asset('images/landing/8_61.svg') }}" alt="Partner logo 5"
                        class="h-[45px] object-contain">
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 w-1/5 bg-gradient-to-l from-background-light to-transparent z-10">
            </div>
        </section> --}}

        {{-- <section id="section-partners" class="py-12 bg-white">
            <div class="container mx-auto text-center px-4">

                <h3 class="text-lg font-semibold text-gray-600">
                    Partnering with :
                </h3>

                <div class="mt-8 flex justify-center items-center flex-nowrap gap-x-12 md:gap-x-16">

                    <img src="{{ asset('images/landing/8_3.svg') }}" alt="Partner logo 1"
                        class="h-10 object-contain opacity-30">

                    <img src="{{ asset('images/landing/8_18.svg') }}" alt="Partner logo 2" class="h-10 object-contain">

                    <img src="{{ asset('images/landing/8_33.svg') }}" alt="Partner logo 3" class="h-10 object-contain">

                    <img src="{{ asset('images/landing/8_50.svg') }}" alt="Partner logo 4" class="h-10 object-contain">

                    <img src="{{ asset('images/landing/8_61.svg') }}" alt="Partner logo 5"
                        class="h-10 object-contain opacity-30">

                </div>
            </div>
        </section> --}}

        <section id="section-partners" class="py-12 bg-white">
            <div class="container mx-auto text-center px-4">
                <h3 class="text-lg font-semibold text-gray-600">
                    Partnering with :
                </h3>

                <div
                    class="mt-8 w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">

                    <ul
                        class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-scroll-right">
                        <li><img src="{{ asset('images/landing/8_3.svg') }}" class="h-10 object-contain"></li>
                        <li><img src="{{ asset('images/landing/8_18.svg') }}" class="h-10 object-contain"></li>
                        <li><img src="{{ asset('images/landing/8_33.svg') }}" class="h-10 object-contain"></li>
                        <li><img src="{{ asset('images/landing/8_50.svg') }}" class="h-10 object-contain"></li>
                        <li><img src="{{ asset('images/landing/8_61.svg') }}" class="h-10 object-contain"></li>

                        <li><img src="{{ asset('images/landing/8_3.svg') }}" class="h-10 object-contain"></li>
                        <li><img src="{{ asset('images/landing/8_18.svg') }}" class="h-10 object-contain"></li>
                        <li><img src="{{ asset('images/landing/8_33.svg') }}" class="h-10 object-contain"></li>
                        <li><img src="{{ asset('images/landing/8_50.svg') }}" class="h-10 object-contain"></li>
                        <li><img src="{{ asset('images/landing/8_61.svg') }}" class="h-10 object-contain"></li>
                    </ul>

                </div>
            </div>
        </section>

        <section class="bg-gray-50 py-10">
            <div class="container mx-auto flex flex-col md:flex-row items-center gap-8 px-6 md:px-12">

                <!-- Text Content -->
                <div class="flex-1">
                    <h2 class="text-xl font-bold text-[#003355] mb-4">ABOUT KS Equipment Co., Ltd.</h2>
                    <p class="text-gray-800 font-semibold mb-3">
                        When it comes to managing your building, trust should never be compromised.
                    </p>
                    <p class="text-gray-600 mb-4">
                        Our company holds specialized certifications that only a handful of professionals in Japan
                        possess,
                        making us one of the nation's most qualified building maintenance providers.
                    </p>
                    <p class="text-gray-600 mb-6">
                        By choosing us, you’re not just hiring a maintenance company—you’re partnering with a trusted
                        specialist
                        who safeguards your building’s value and your peace of mind.
                    </p>
                    <div class="mt-8">
                        <a href="#contact"
                            class="inline-block bg-[#003858] text-white font-semibold py-3 px-10 rounded-md hover:bg-opacity-90 transition-opacity duration-300">
                            Contact Us
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="flex-1">
                    <img src="{{ asset('images/landing/12f871d57343edbdc73d2bc8d9e215e4231c4624.png') }}"
                        alt="City View" class="rounded-md shadow-lg object-cover w-full h-full">
                </div>

            </div>
        </section>

        <section id="section-features" class="py-24">
            <div class="container flex flex-col-reverse lg:flex-row items-center gap-10 lg:gap-20">
                <div class="flex-[2] grid grid-cols-1 md:grid-cols-2 gap-[35px] w-full">
                    <div class="bg-[#f6f6f7] border border-[#c2c5ca] rounded-[14px] shadow-md p-4 flex flex-col gap-2">
                        <img src="{{ asset('images/landing/96_22.svg') }}" alt="Gear icon" class="w-[40px] h-[36px]">
                        <h3 class="text-2xl font-semibold text-primary leading-tight">Comprehensive Maintenance
                            Solutions</h3>
                        <p class="text-sm text-[#929498] leading-tight">From daily operations to advanced technical
                            services.</p>
                    </div>
                    <div class="bg-[#f6f6f7] border border-[#c2c5ca] rounded-[14px] shadow-md p-4 flex flex-col gap-2">
                        <img src="{{ asset('images/landing/96_131.svg') }}" alt="Achievement icon"
                            class="w-[40px] h-[36px]">
                        <h3 class="text-2xl font-semibold text-primary leading-tight">Proven Expertise</h3>
                        <p class="text-sm text-[#929498] leading-tight">Backed by rare, highly specialized
                            qualifications.</p>
                    </div>
                    <div class="bg-[#f6f6f7] border border-[#c2c5ca] rounded-[14px] shadow-md p-4 flex flex-col gap-2">
                        <img src="{{ asset('images/landing/96_136.svg') }}" alt="Safety helmet icon"
                            class="w-[40px] h-[36px]">
                        <h3 class="text-2xl font-semibold text-primary leading-tight">Reliable Safety and Compliance
                        </h3>
                        <p class="text-sm text-[#929498] leading-tight">Ensuring every building meets the highest
                            industry standards.</p>
                    </div>
                    <div class="bg-[#f6f6f7] border border-[#c2c5ca] rounded-[14px] shadow-md p-4 flex flex-col gap-2">
                        <img src="{{ asset('images/landing/96_141.svg') }}" alt="Handshake icon"
                            class="w-[40px] h-[36px]">
                        <h3 class="text-2xl font-semibold text-primary leading-tight">Peace of Mind</h3>
                        <p class="text-sm text-[#929498] leading-tight">You can focus on your business while we take
                            care of everything.</p>
                    </div>
                </div>
                <div class="flex-1 text-center lg:text-right">
                    <h2 class="text-[32px] font-bold text-text-muted tracking-[1.6px]">Why Choose Us</h2>
                    <p class="text-[28px] font-medium text-text-muted tracking-[1.4px] leading-tight mt-7">With our
                        team of certified experts, we deliver:</p>
                </div>
            </div>
        </section>

        {{-- <section id="section-blog" class="py-24">
            <div class="container">
                <div class="mb-14">
                    <h2 class="text-[32px] font-bold text-text-muted">Our Articles — Trending Topics & Service News
                    </h2>
                    <p class="text-base font-medium text-text-muted mt-2.5 max-w-[544px]">Stay up-to-date with the
                        latest in building maintenance, carbon neutrality, and our service offerings.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-10">
                    <article class="flex flex-col">
                        <img src="{{ asset('images/landing/a23a7c8f4629d3ef4f88b65e5955e4dcd49cae10.png') }}"
                            alt="ZEB Architecture" class="w-full h-[240px] object-cover rounded-lg mb-[18px]">
                        <h3 class="text-base font-semibold text-primary leading-tight mb-1.5 min-h-[42px]">What is
                            ZEB? Building the Future of Carbon Neutral Architecture</h3>
                        <p class="text-xs text-text-grey leading-tight mb-3.5 flex-grow">An introduction to ZEB and
                            how it reshapes building operations to reduce environmental impact.</p>
                        <div class="flex justify-between items-center">
                            <a href="#"
                                class="bg-secondary text-text-light text-xs py-1 px-[19px] rounded-[10px] transition-opacity hover:opacity-90">Read
                                More</a>
                            <span class="text-xs text-[#0c370f]">August 1, 2025</span>
                        </div>
                    </article>
                </div>
                <div class="text-center mt-14">
                    <a href="#"
                        class="inline-block bg-primary text-text-light text-base font-semibold py-2 px-[50px] rounded-[28px] transition-opacity hover:opacity-90">View
                        All Articles</a>
                </div>
            </div>
        </section> --}}

        <section class="bg-gray-50 py-16 sm:py-24">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12 md:mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                        Our Articles — Trending Topics & Service News
                    </h2>
                    <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                        Stay up-to-date with the latest in building maintenance, carbon neutrality, and our service
                        offerings.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <article
                        class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col transition-transform hover:scale-105 duration-300">
                        <img class="w-full h-48 object-cover"
                            src="https://images.unsplash.com/photo-1554302241-02a83a82479e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzOTAwNXwwfDF8c2VhcmNofDEzfHxza3lzY3JhcGVyfGVufDB8fHx8MTcyMzM0ODAxN3ww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Modern building architecture">
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">What is ZEB? Building the Future of Carbon
                                Neutral Architecture</h3>
                            <p class="text-gray-600 text-sm flex-grow mb-4">An introduction to ZEB and how it reshapes
                                building operations to reduce environmental impact.</p>
                            <div class="mt-auto flex justify-between items-center">
                                <a href="#"
                                    class="bg-cyan-500 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-cyan-600 transition-colors">Read
                                    More</a>
                                <span class="text-sm text-gray-500">August 4, 2025</span>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col transition-transform hover:scale-105 duration-300">
                        <img class="w-full h-48 object-cover"
                            src="https://images.unsplash.com/photo-1519727448744-f1b849a62582?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzOTAwNXwwfDF8c2VhcmNofDEyfHxjb25zdHJ1Y3Rpb24lMjB3b3JrZXJ8ZW58MHx8fHwxNzIzMzQ4MDQ0fDA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Worker performing maintenance">
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Reducing Life Cycle Costs Through Smart
                                Maintenance</h3>
                            <p class="text-gray-600 text-sm flex-grow mb-4">Learn how regular, efficient maintenance
                                contributes to long-term cost savings in building operations.</p>
                            <div class="mt-auto flex justify-between items-center">
                                <a href="#"
                                    class="bg-cyan-500 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-cyan-600 transition-colors">Read
                                    More</a>
                                <span class="text-sm text-gray-500">July 24, 2025</span>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col transition-transform hover:scale-105 duration-300">
                        <img class="w-full h-48 object-cover"
                            src="https://images.unsplash.com/photo-1521737852577-684897f092a7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzOTAwNXwwfDF8c2VhcmNofDIyfHxtZWV0aW5nJTIwZnJvbSUyMGFib3ZlfGVufDB8fHx8MTcyMzM0Nzc3MHww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Team meeting from a top-down view">
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Behind the Scenes: How KS Equipment
                                Operates In-House Services</h3>
                            <p class="text-gray-600 text-sm flex-grow mb-4">Discover the advantages of in-house service
                                models and our commitment to safety and quality.</p>
                            <div class="mt-auto flex justify-between items-center">
                                <a href="#"
                                    class="bg-cyan-500 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-cyan-600 transition-colors">Read
                                    More</a>
                                <span class="text-sm text-gray-500">July 10, 2025</span>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col transition-transform hover:scale-105 duration-300">
                        <img class="w-full h-48 object-cover" src="http/googleusercontent.com/file_content/0"
                            alt="HVAC System diagram">
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Understanding LCC: Designing for Long-Term
                                Cost Efficiency</h3>
                            <p class="text-gray-600 text-sm flex-grow mb-4">Dive into Life Cycle Costing and how
                                strategic design choices can reduce maintenance and operational costs.</p>
                            <div class="mt-auto flex justify-between items-center">
                                <a href="#"
                                    class="bg-cyan-500 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-cyan-600 transition-colors">Read
                                    More</a>
                                <span class="text-sm text-gray-500">June 28, 2025</span>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col transition-transform hover:scale-105 duration-300">
                        <img class="w-full h-48 object-cover"
                            src="https://images.unsplash.com/photo-1581092921449-41b43a3a4c33?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzOTAwNXwwfDF8c2VhcmNofDI3fHxjb25zdHJ1Y3Rpb24lMjB3b3JrZXJ8ZW58MHx8fHwxNzIzMzQ4MDQ0fDA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Construction worker inspecting a site">
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Legal Inspections in Japan: What Building
                                Owners Need to Know</h3>
                            <p class="text-gray-600 text-sm flex-grow mb-4">We break down mandatory inspection
                                requirements and how KS Equipment ensures full legal compliance.</p>
                            <div class="mt-auto flex justify-between items-center">
                                <a href="#"
                                    class="bg-cyan-500 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-cyan-600 transition-colors">Read
                                    More</a>
                                <span class="text-sm text-gray-500">June 10, 2025</span>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col transition-transform hover:scale-105 duration-300">
                        <img class="w-full h-48 object-cover"
                            src="https://images.unsplash.com/photo-1581093450029-1a75b1a3c501?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzOTAwNXwwfDF8c2VhcmNofDR8fGVuZ2luZWVyJTIwaW5zcGVjdGluZ3xlbnwwfHx8fDE3MjMzNDgxNDJ8MA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Engineer monitoring equipment">
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">From Manual to Smart: The Evolution of
                                Building Equipment Monitoring</h3>
                            <p class="text-gray-600 text-sm flex-grow mb-4">Explore the shift towards sensor-based
                                monitoring and its impact on building safety and energy usage.</p>
                            <div class="mt-auto flex justify-between items-center">
                                <a href="#"
                                    class="bg-cyan-500 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-cyan-600 transition-colors">Read
                                    More</a>
                                <span class="text-sm text-gray-500">May 25, 2025</span>
                            </div>
                        </div>
                    </article>

                </div>

                <div class="mt-16 text-center">
                    <a href="#"
                        class="bg-gray-800 text-white px-8 py-3 rounded-md font-semibold hover:bg-gray-700 transition-colors text-base">
                        View All Articles
                    </a>
                </div>
            </div>
        </section>

        {{-- <section id="section-contact" class="relative text-text-light py-24 overflow-hidden">
            <div class="absolute inset-0 -z-10">
                <img src="{{ asset('images/landing/9dce4b35fe754a255e520a2266dc84069fc40c8e.png') }}"
                    alt="Abstract blue pattern" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-contact-gradient"></div>
            </div>
            <div class="container flex flex-col lg:flex-row gap-12 lg:gap-20 items-start">
                <div class="flex-1 max-w-[450px] w-full text-center lg:text-left">
                    <h2 class="text-7xl lg:text-[88px] font-bold tracking-widest">Contact<span
                            class="tracking-normal -ml-5 lg:-ml-10">Us</span></h2>
                    <div class="w-[216px] h-2 bg-text-light mt-11 mx-auto lg:mx-0"></div>
                    <p class="text-base font-medium leading-tight tracking-wider mt-16">Reach out to KS Equipment
                        Co., Ltd. for inquiries, service support, or partnership opportunities. We look forward to
                        assisting you.</p>
                    <ul
                        class="mt-6 flex flex-col gap-2.5 text-xl lg:text-2xl font-semibold leading-tight tracking-wider items-center lg:items-start">
                        <li>Address: 3-48-47 Sumiyoshi-cho, Fuchu City, Tokyo 183-0034</li>
                        <li class="inline-flex items-center gap-2"><img src="{{ asset('images/landing/54_18.svg') }}"
                                alt="phone icon" class="inline">042-319-1978</li>
                        <li>Fax: 042-319-1967</li>
                        <li>Email: k.sasaki@kssetubi.co.jp</li>
                        <li>Business Hours: Monday – Friday, 9:00 AM – 5:00 PM</li>
                    </ul>
                </div>
                <div class="flex-1 w-full mt-0 lg:mt-24">
                    <h2 class="text-4xl font-bold text-center mb-14">KS Equipment Co., Ltd.</h2>
                    <form class="flex flex-col gap-10">
                        <div class="flex flex-col">
                            <label for="name" class="text-2xl font-medium tracking-wider mb-4">Name</label>
                            <input type="text" id="name" name="name"
                                class="bg-transparent border-0 border-b-4 border-text-light text-text-light text-xl py-2 focus:outline-none focus:border-secondary">
                        </div>
                        <div class="flex flex-col">
                            <label for="email" class="text-2xl font-medium tracking-wider mb-4">Email</label>
                            <input type="email" id="email" name="email"
                                class="bg-transparent border-0 border-b-4 border-text-light text-text-light text-xl py-2 focus:outline-none focus:border-secondary">
                        </div>
                        <div class="flex flex-col">
                            <label for="message" class="text-2xl font-medium tracking-wider mb-4">Message</label>
                            <textarea id="message" name="message" rows="3"
                                class="bg-transparent border-0 border-b-4 border-text-light text-text-light text-xl py-2 focus:outline-none focus:border-secondary"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-primary text-[#e6f5ff] text-xl font-medium py-4 px-2 rounded-xl border-[1.5px] border-[#e6f5ff] cursor-pointer transition-colors hover:bg-[#00507c] mt-6">Submit</button>
                    </form>
                </div>
            </div>
        </section> --}}
        <section class="relative text-white font-sans">
            <div class="absolute inset-0 -z-10">
                <img src="https://images.unsplash.com/photo-1557683316-973673baf926?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzOTAwNXwwfDF8c2VhcmNofDE0fHxibHVlJTIwYWJzdHJhY3R8ZW58MHx8fHwxNzIzMzQ5ODMyfDA&ixlib=rb-4.0.3&q=80&w=1080"
                    class="w-full h-full object-cover" alt="Abstract blue background">
                <div class="absolute inset-0 bg-gradient-to-r from-[#003858] to-[#005f99] opacity-90"></div>
            </div>

            <div class="container mx-auto px-4 py-20 lg:py-24">
                <div class="flex flex-col lg:flex-row gap-16">

                    <div class="lg:w-5/12">
                        <h2 class="text-7xl font-bold leading-tight">Contact</h2>
                        <div class="flex items-center mt-2">
                            <div class="w-44 h-1 bg-white"></div>
                            <span class="text-7xl font-bold ml-4">Us</span>
                        </div>

                        <p class="mt-8 text-base">
                            Reach out to KS Equipment Co., Ltd. for inquiries, service support, or partnership
                            opportunities. We look forward to assisting you.
                        </p>

                        <div class="mt-8 space-y-3 text-lg">
                            <p><strong>Address:</strong> 3-48-47<br>Sumiyoshi-cho, Fuchu City,<br>Tokyo 183-0034</p>
                            <p class="flex items-center">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z">
                                    </path>
                                </svg>
                                <strong>042-319-1978</strong>
                            </p>
                            <p><strong>Fax:</strong> 042-319-1967</p>
                            <p><strong>Email:</strong> k.sasaki@kssetubi.co.jp</p>
                            <p><strong>Business Hours:</strong> Monday –<br>Friday, 9:00 AM – 5:00 PM</p>
                        </div>
                    </div>

                    <div class="lg:w-7/12 lg:mt-4">
                        <h3 class="text-3xl font-bold mb-12">
                            KS Equipment Co., Ltd.
                        </h3>
                        <form action="#" method="POST" class="space-y-10">
                            <div>
                                <label for="name" class="block text-xl font-medium">Name</label>
                                <input type="text" id="name" name="name"
                                    class="w-full bg-transparent border-0 border-b-2 border-white pb-2 mt-2 focus:outline-none focus:border-cyan-300 transition-colors">
                            </div>
                            <div>
                                <label for="email" class="block text-xl font-medium">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full bg-transparent border-0 border-b-2 border-white pb-2 mt-2 focus:outline-none focus:border-cyan-300 transition-colors">
                            </div>
                            <div>
                                <label for="message" class="block text-xl font-medium">Message</label>
                                <input type="text" id="message" name="message"
                                    class="w-full bg-transparent border-0 border-b-2 border-white pb-2 mt-2 focus:outline-none focus:border-cyan-300 transition-colors">
                            </div>
                            <div class="pt-6">
                                <button type="submit"
                                    class="w-full bg-[#003858] border-2 border-white text-white font-semibold py-3 rounded-lg hover:bg-white hover:text-[#003858] transition-colors duration-300">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layouts.app>
