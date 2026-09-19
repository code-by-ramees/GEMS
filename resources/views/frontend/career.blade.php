@extends('layouts.app')

@section('title', 'Careers | GEMS')
@section('meta_description', 'Build a rewarding career in child healthcare with GEMS in Kozhikode, Kerala. Openings for speech therapists, occupational therapists, and special educators.')

@section('content')
    {{-- ================= HERO SECTION ================= --}}
    <section class="relative overflow-hidden" style="background-color: #32A8B8;">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#32A8B8] opacity-90"></div>
            {{-- Design elements --}}
            <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 transform translate-x-20"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="text-center" data-aos="fade-up">
                <span
                    class="inline-block py-1 px-3 rounded-full bg-white/20 border border-white/30 text-white text-sm font-semibold mb-6">We're
                    Hiring!</span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                    Join Our Mission
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    Build a rewarding career helping children reach their full potential. Work with a passionate team in a
                    world-class environment.
                </p>
            </div>
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

    {{-- ================= CULTURE ================= --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Work With Us?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We believe in taking care of our team so they can take the best
                    care of our children.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl hover:shadow-xl transition-all duration-300 border hover:-translate-y-1"
                    style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.2);"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 bg-[#32A8B8] text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-sm">
                        🎓</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Professional Growth</h3>
                    <p class="text-gray-600">Continuous learning opportunities, workshops, and certifications to keep you at
                        the forefront of your field.</p>
                </div>

                <div class="p-8 rounded-3xl hover:shadow-xl transition-all duration-300 border hover:-translate-y-1"
                    style="background-color: rgba(234, 111, 113, 0.05); border-color: rgba(234, 111, 113, 0.2);"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 bg-[#EA6F71] text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-sm">
                        🤝</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Supportive Culture</h3>
                    <p class="text-gray-600">A collaborative, multidisciplinary team environment where every voice is heard
                        and valued.</p>
                </div>

                <div class="p-8 rounded-3xl hover:shadow-xl transition-all duration-300 border hover:-translate-y-1"
                    style="background-color: rgba(151, 180, 26, 0.05); border-color: rgba(151, 180, 26, 0.2);"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-14 h-14 bg-[#97B41A] text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-sm">
                        ⚖️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Work-Life Balance</h3>
                    <p class="text-gray-600">Flexible schedules and a supportive management team that understands the
                        importance of personal well-being.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= OPENINGS ================= --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center" data-aos="fade-up">Current Openings</h2>

            <div class="space-y-6">
                {{-- Job 1 --}}
                <div class="bg-white rounded-xl shadow-md p-6 sm:p-8 hover:shadow-lg transition-shadow border-l-4 border-[#32A8B8]"
                    data-aos="fade-up">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Senior Speech Therapist</h3>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                                <span class="flex items-center gap-1">📍 Calicut, Kerala</span>
                                <span class="flex items-center gap-1">🕒 Full Time</span>
                                <span class="flex items-center gap-1">💼 3+ Years Exp</span>
                            </div>
                        </div>
                        <a href="mailto:careers@aimscdc.com?subject=Application for Senior Speech Therapist"
                            class="inline-flex items-center justify-center bg-[#32A8B8] hover:bg-[#288a99] text-white font-semibold px-6 py-2.5 rounded-lg transition-colors">
                            Apply Now
                        </a>
                    </div>
                </div>

                {{-- Job 2 --}}
                <div class="bg-white rounded-xl shadow-md p-6 sm:p-8 hover:shadow-lg transition-shadow border-l-4 border-[#EA6F71]"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Occupational Therapist</h3>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                                <span class="flex items-center gap-1">📍 Calicut, Kerala</span>
                                <span class="flex items-center gap-1">🕒 Full Time</span>
                                <span class="flex items-center gap-1">💼 1-3 Years Exp</span>
                            </div>
                        </div>
                        <a href="mailto:careers@aimscdc.com?subject=Application for Occupational Therapist"
                            class="inline-flex items-center justify-center bg-[#EA6F71] hover:bg-[#d45d5f] text-white font-semibold px-6 py-2.5 rounded-lg transition-colors">
                            Apply Now
                        </a>
                    </div>
                </div>

                {{-- Job 3 --}}
                <div class="bg-white rounded-xl shadow-md p-6 sm:p-8 hover:shadow-lg transition-shadow border-l-4 border-[#97B41A]"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Special Educator</h3>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                                <span class="flex items-center gap-1">📍 Calicut, Kerala</span>
                                <span class="flex items-center gap-1">🕒 Part Time / Full Time</span>
                                <span class="flex items-center gap-1">💼 Fresher / Experienced</span>
                            </div>
                        </div>
                        <a href="mailto:careers@aimscdc.com?subject=Application for Special Educator"
                            class="inline-flex items-center justify-center bg-[#97B41A] hover:bg-[#829916] text-white font-semibold px-6 py-2.5 rounded-lg transition-colors">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-4">Don't see a matching role? We are always looking for talent.</p>
                <a href="mailto:careers@aimscdc.com" class="text-[#32A8B8] font-semibold hover:text-[#288a99]">Send your CV
                    to careeratgemscdc@gmail.com →</a>
            </div>
        </div>
    </section>
@endsection