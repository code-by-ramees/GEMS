@extends('layouts.app')

@section('title', 'Our Team | GEMS Child Development Centre')
@section('meta_description', 'Meet the certified pediatric specialists and developmental therapists at GEMS Kozhikode, Kerala dedicated to guiding children with personalized care plans.')

@section('content')
    {{-- HERO SECTION --}}
    <section class="relative overflow-hidden" style="background-color: #32A8B8;">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#32A8B8] opacity-90"></div>
            {{-- Design elements --}}
            <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 transform translate-x-20"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 lg:py-32 text-center">
            <span
                class="inline-block px-4 py-1.5 mb-4 sm:mb-6 text-xs sm:text-sm font-bold tracking-wider text-white uppercase bg-white/20 border border-white/30 rounded-full"
                data-aos="fade-up">
                Dedicated Professionals
            </span>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white mb-4 sm:mb-6 leading-tight" data-aos="fade-up"
                data-aos-delay="100">
                Meet Our Exceptional Team
            </h1>
            <p class="text-base sm:text-xl text-white/90 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up"
                data-aos-delay="200">
                A diverse group of passionate experts dedicated to unlocking every child's potential through compassion,
                patience, and evidence-based care.
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

    {{-- LEADERSHIP SECTION --}}
    <section class="py-16 lg:py-24 bg-white relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4" data-aos="fade-up">Our Leadership</h2>
                <div class="w-16 h-1 bg-[#32A8B8] mx-auto rounded-full" data-aos="fade-up" data-aos-delay="100"></div>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="glass-card rounded-[2.5rem] p-5 sm:p-8 lg:p-12 shadow-xl border-white/50 flex flex-col md:flex-row items-center gap-6 sm:gap-10"
                    data-aos="fade-up">
                    <div
                        class="w-48 h-48 lg:w-64 lg:h-64 rounded-[2rem] overflow-hidden flex-shrink-0 shadow-lg transform rotate-3 hover:rotate-0 transition-transform duration-500">
                        <img loading="lazy" decoding="async" src="{{ asset('images/Mushthaq.P.PNG') }}" alt="Mushtaq" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 space-y-6">
                        <div>
                            <h3 class="text-3xl font-bold text-gray-900 mb-1">Mushtaq</h3>
                            <p class="text-teal-600 font-bold uppercase tracking-wider text-sm">Founder & CEO</p>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-lg italic">
                            "Our mission is to create a world where every child, regardless of their challenges, can
                            discover their strengths and shine brightly. We believe in personalized care that addresses the
                            unique needs of each child."
                        </p>
                        <div class="flex gap-4">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-teal-50 flex items-center justify-center text-teal-600 hover:bg-teal-600 hover:text-white transition-all shadow-sm">
                                <span class="text-lg">in</span>
                            </a>
                            <a href="mailto:ceo@gemscdc.com"
                                class="w-10 h-10 rounded-full bg-pink-50 flex items-center justify-center text-pink-600 hover:bg-pink-600 hover:text-white transition-all shadow-sm">
                                <span class="text-lg">✉</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SPECIALISTS GRID --}}
    <section class="py-16 lg:py-24 bg-gray-50/50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4" data-aos="fade-up">Expert Specialists</h2>
                <p class="text-gray-600" data-aos="fade-up" data-aos-delay="100">Highly qualified clinicians providing
                    specialized care in every domain.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 justify-center max-w-6xl mx-auto">
                {{-- Specialist 1: Narmada Soman --}}
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-6 rounded-[2rem] h-full shadow-sm hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border"
                        style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.2);">
                        <div class="aspect-square rounded-[1.5rem] overflow-hidden mb-6 relative shadow-md">
                            <img loading="lazy" decoding="async" src="{{ asset('images/Narmada Soman .PNG') }}" alt="Narmada Soman"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                onerror="this.src='https://ui-avatars.com/api/?name=Narmada+Soman&background=32A8B8&color=fff&size=300'">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#32A8B8]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                        <div class="text-center space-y-2">
                            <h3 class="text-xl font-bold text-gray-900 uppercase">Narmada Soman</h3>
                            <p class="text-[#32A8B8] text-sm font-bold uppercase tracking-wide">Psychologist</p>
                            <div class="pt-2">
                                <span
                                    class="px-3 py-1 bg-white rounded-full text-xs font-medium text-gray-500 border border-gray-100">Clinical Psychology</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Specialist 2: Manjima K. --}}
                <div class="group" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6 rounded-[2rem] h-full shadow-sm hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border"
                        style="background-color: rgba(234, 111, 113, 0.05); border-color: rgba(234, 111, 113, 0.2);">
                        <div class="aspect-square rounded-[1.5rem] overflow-hidden mb-6 relative shadow-md">
                            <img loading="lazy" decoding="async" src="{{ asset('images/Manjima K.PNG') }}" alt="Manjima K."
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                onerror="this.src='https://ui-avatars.com/api/?name=Manjima+K&background=EA6F71&color=fff&size=300'">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#EA6F71]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                        <div class="text-center space-y-2">
                            <h3 class="text-xl font-bold text-gray-900 uppercase">Manjima K.</h3>
                            <p class="text-[#EA6F71] text-sm font-bold uppercase tracking-wide">Speech Language Pathologist</p>
                            <div class="pt-2">
                                <span
                                    class="px-3 py-1 bg-white rounded-full text-xs font-medium text-gray-500 border border-gray-100">Speech & Language Therapy</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Specialist 3: Prarthana.P P --}}
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-6 rounded-[2rem] h-full shadow-sm hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border"
                        style="background-color: rgba(233, 157, 29, 0.05); border-color: rgba(233, 157, 29, 0.2);">
                        <div class="aspect-square rounded-[1.5rem] overflow-hidden mb-6 relative shadow-md">
                            <img loading="lazy" decoding="async" src="{{ asset('images/Prarthana.P P.PNG') }}" alt="Prarthana.P P"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                onerror="this.src='https://ui-avatars.com/api/?name=Prarthana+P+P&background=E99D1D&color=fff&size=300'">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#E99D1D]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                        <div class="text-center space-y-2">
                            <h3 class="text-xl font-bold text-gray-900 uppercase">Prarthana.P P</h3>
                            <p class="text-[#E99D1D] text-sm font-bold uppercase tracking-wide">Psychologist</p>
                            <div class="pt-2">
                                <span
                                    class="px-3 py-1 bg-white rounded-full text-xs font-medium text-gray-500 border border-gray-100">Clinical Psychology</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Specialist 4: Malavika K. --}}
                <div class="group" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-6 rounded-[2rem] h-full shadow-sm hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border"
                        style="background-color: rgba(151, 180, 26, 0.05); border-color: rgba(151, 180, 26, 0.2);">
                        <div class="aspect-square rounded-[1.5rem] overflow-hidden mb-6 relative shadow-md">
                            <img loading="lazy" decoding="async" src="{{ asset('images/Malavika K.PNG') }}" alt="Malavika K."
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                onerror="this.src='https://ui-avatars.com/api/?name=Malavika+K&background=97B41A&color=fff&size=300'">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#97B41A]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                        <div class="text-center space-y-2">
                            <h3 class="text-xl font-bold text-gray-900 uppercase">Malavika K.</h3>
                            <p class="text-[#97B41A] text-sm font-bold uppercase tracking-wide">Special Educator</p>
                            <div class="pt-2">
                                <span
                                    class="px-3 py-1 bg-white rounded-full text-xs font-medium text-gray-500 border border-gray-100">Special Education</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Specialist 5: Thara Ranveendran --}}
                <div class="group" data-aos="fade-up" data-aos-delay="500">
                    <div class="p-6 rounded-[2rem] h-full shadow-sm hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border"
                        style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.2);">
                        <div class="aspect-square rounded-[1.5rem] overflow-hidden mb-6 relative shadow-md">
                            <img loading="lazy" decoding="async" src="{{ asset('images/Thara Ranveendran.PNG') }}" alt="Thara Ranveendran"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                onerror="this.src='https://ui-avatars.com/api/?name=Thara+Ranveendran&background=32A8B8&color=fff&size=300'">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#32A8B8]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                        <div class="text-center space-y-2">
                            <h3 class="text-xl font-bold text-gray-900 uppercase">Thara Ranveendran</h3>
                            <p class="text-[#32A8B8] text-sm font-bold uppercase tracking-wide">Coordinator</p>
                            <div class="pt-2">
                                <span
                                    class="px-3 py-1 bg-white rounded-full text-xs font-medium text-gray-500 border border-gray-100">Administration</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center">
                <p class="mb-8 text-gray-600">Want to join our amazing team of professionals?</p>
                <a href="/contact"
                    class="inline-flex items-center gap-2 bg-[#32A8B8] text-white px-8 py-4 rounded-xl font-bold shadow-lg hover:shadow-[#32A8B8]/20 transition-all hover:-translate-y-1">
                    View Career Opportunities
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- JOIN US SECTION --}}
    <section class="relative overflow-hidden py-24 lg:py-32" style="background-color: #32A8B8;">
        {{-- Background Decor --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#32A8B8] opacity-90"></div>
            <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 transform translate-x-20"></div>
            <div class="absolute bottom-0 left-0 w-1/2 h-full bg-black/5 -skew-x-12 transform -translate-x-20"></div>
        </div>

        {{-- Top Curve --}}
        <div class="absolute top-0 left-0 w-full overflow-hidden leading-none transform rotate-180">
            <svg class="relative block w-full h-[60px] sm:h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="fill-white"></path>
            </svg>
        </div>

        {{-- Content --}}
        <div class="relative z-10 max-w-3xl mx-auto px-4 text-center" data-aos="zoom-in">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 tracking-tight">
                Growing Together for a Better Future
            </h2>

            <p class="text-white/90 text-xl leading-relaxed mb-12">
                Our team is always looking for compassionate individuals who share our vision.
                If you have a passion for helping children, we'd love to hear from you.
            </p>

            <div class="flex flex-wrap justify-center gap-6">
                <a href="/contact"
                    class="bg-white text-[#32A8B8] px-10 py-5 rounded-2xl font-bold text-lg hover:bg-gray-50 transition-all shadow-2xl hover:-translate-y-1">
                    Contact Us Today
                </a>
            </div>
        </div>

        {{-- Bottom Curve --}}
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-[60px] sm:h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="fill-white"></path>
            </svg>
        </div>
    </section>

@endsection
