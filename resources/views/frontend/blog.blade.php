@extends('layouts.app')

@section('title', 'Blog | GEMS')
@section('meta_description', 'Read expert insights on child development, parenting tips, speech milestones, and sensory wellness from the therapeutic specialists at GEMS Kozhikode, Kerala.')

@section('content')
    {{-- ================= HERO SECTION ================= --}}
    <section class="relative overflow-hidden" style="background-color: #32A8B8;">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#32A8B8] opacity-90"></div>
            {{-- Design elements --}}
            <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 transform translate-x-20"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 text-center">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6" data-aos="fade-up">
                Our Blog
            </h1>
            <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                Insights, tips, and updates on child development, parenting, and our center's activities.
            </p>
        </div>

        {{-- Curve divider --}}
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-[60px] sm:h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="fill-white"></path>
            </svg>
        </div>
    </section>

    {{-- ================= BLOG LISTING ================= --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">

                {{-- Main Content --}}
                <div class="lg:col-span-2 space-y-12">
                    {{-- Blog Post 1 --}}
                    <article
                        class="flex flex-col rounded-[2.5rem] overflow-hidden border shadow-sm hover:shadow-xl transition-all duration-300"
                        style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.1);"
                        data-aos="fade-up">
                        <div class="h-64 sm:h-80 overflow-hidden relative">
                            <img src="{{ asset('images/image1.png') }}" alt="5 Early Signs of Speech Delay in Toddlers"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                            <div
                                class="absolute top-6 left-6 bg-white/95 backdrop-blur-sm px-4 py-2 rounded-xl text-sm font-bold text-[#32A8B8] shadow-sm">
                                Dec 15, 2023
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span
                                    class="text-xs font-bold tracking-widest text-[#EA6F71] uppercase bg-white/50 px-3 py-1 rounded-full">Therapy
                                    Tips</span>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-[#32A8B8] transition-colors">
                                <a href="#">5 Early Signs of Speech Delay in Toddlers</a>
                            </h2>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Understanding milestones is crucial for early intervention. Learn what to look for and when
                                to seek professional help for your child's speech development.
                            </p>
                            <a href="#"
                                class="inline-flex items-center font-bold text-[#32A8B8] hover:gap-3 transition-all">
                                Read Article <span class="ml-2">→</span>
                            </a>
                        </div>
                    </article>

                    {{-- Blog Post 2 --}}
                    <article
                        class="flex flex-col rounded-[2.5rem] overflow-hidden border shadow-sm hover:shadow-xl transition-all duration-300"
                        style="background-color: rgba(234, 111, 113, 0.03); border-color: rgba(234, 111, 113, 0.1);"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="h-64 sm:h-80 overflow-hidden relative">
                            <img src="{{ asset('images/image2.jpg') }}" alt="Creating a Sensory-Friendly Home Environment"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                            <div
                                class="absolute top-6 left-6 bg-white/95 backdrop-blur-sm px-4 py-2 rounded-xl text-sm font-bold text-[#EA6F71] shadow-sm">
                                Nov 28, 2023
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span
                                    class="text-xs font-bold tracking-widest text-[#32A8B8] uppercase bg-white/50 px-3 py-1 rounded-full">Parenting</span>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-[#EA6F71] transition-colors">
                                <a href="#">Creating a Sensory-Friendly Home Environment</a>
                            </h2>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Practical tips for parents to create a calming and supportive home space for children with
                                sensory processing differences.
                            </p>
                            <a href="#"
                                class="inline-flex items-center font-bold text-[#EA6F71] hover:gap-3 transition-all">
                                Read Article <span class="ml-2">→</span>
                            </a>
                        </div>
                    </article>

                    {{-- Pagination Placeholder --}}
                    <div class="flex justify-center gap-3 mt-8">
                        <button
                            class="w-12 h-12 rounded-2xl bg-[#32A8B8] text-white font-bold shadow-lg shadow-[#32A8B8]/20">1</button>
                        <button
                            class="w-12 h-12 rounded-2xl bg-white text-gray-600 hover:bg-gray-100 border border-gray-100 font-bold transition-colors">2</button>
                        <button
                            class="w-12 h-12 rounded-2xl bg-white text-gray-600 hover:bg-gray-100 border border-gray-100 font-bold transition-colors">3</button>
                    </div>
                </div>

                {{-- Sidebar --}}
                <aside class="space-y-8" data-aos="fade-left">
                    {{-- Search --}}
                    <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100">
                        <h3 class="font-bold text-gray-900 mb-4 text-lg">Search</h3>
                        <form class="relative">
                            <input type="text" placeholder="Search articles..."
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            <button type="submit"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-teal-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>

                    {{-- Categories --}}
                    <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100">
                        <h3 class="font-bold text-gray-900 mb-4 text-lg">Categories</h3>
                        <ul class="space-y-3">
                            <li><a href="#"
                                    class="flex items-center justify-between text-gray-600 hover:text-teal-600"><span>Therapy
                                        Tips</span> <span
                                        class="bg-gray-100 px-2 py-0.5 rounded-full text-xs font-medium">12</span></a></li>
                            <li><a href="#"
                                    class="flex items-center justify-between text-gray-600 hover:text-teal-600"><span>Child
                                        Development</span> <span
                                        class="bg-gray-100 px-2 py-0.5 rounded-full text-xs font-medium">8</span></a></li>
                            <li><a href="#"
                                    class="flex items-center justify-between text-gray-600 hover:text-teal-600"><span>Parenting</span>
                                    <span class="bg-gray-100 px-2 py-0.5 rounded-full text-xs font-medium">5</span></a></li>
                            <li><a href="#"
                                    class="flex items-center justify-between text-gray-600 hover:text-teal-600"><span>Success
                                        Stories</span> <span
                                        class="bg-gray-100 px-2 py-0.5 rounded-full text-xs font-medium">4</span></a></li>
                        </ul>
                    </div>

                    {{-- Newsletter --}}
                    <div class="bg-gradient-to-br from-teal-500 to-teal-600 p-6 rounded-2xl shadow-lg text-white">
                        <h3 class="font-bold text-white mb-2 text-lg">Subscribe</h3>
                        <p class="text-teal-100 text-sm mb-4">Get the latest updates directly in your inbox.</p>
                        <input type="email" placeholder="Your email"
                            class="w-full bg-white/20 border border-white/30 text-white placeholder-teal-100 rounded-lg px-4 py-2 mb-3 focus:outline-none focus:ring-2 focus:ring-white">
                        <button
                            class="w-full bg-white text-teal-600 font-bold py-2 rounded-lg hover:bg-teal-50 transition-colors">Subscribe
                            Now</button>
                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection