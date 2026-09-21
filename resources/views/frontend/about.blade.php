@extends('layouts.app')

@section('title', 'About Us | GEMS')
@section('meta_description', 'Learn about GEMS Child Development Centre in Kozhikode, Kerala. Our multidisciplinary team brings 10+ years of clinical excellence in pediatric child care.')

@section('content')
    {{-- ================= HERO SECTION ================= --}}
    <section class="relative overflow-hidden" style="background-color: #32A8B8;">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#32A8B8] opacity-90"></div>
            {{-- Pattern/Texture can go here --}}
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                    About GEMS
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    Dedicated to empowering children with developmental needs through holistic,
                    evidence-based care and unwavering support.
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

    {{-- ================= VISION & MISSION ================= --}}
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- Image --}}
                <div data-aos="fade-right">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/image2.jpg') }}" alt="GEMS Child Development Centre Vision and Mission" class="w-full h-auto object-cover" width="800" height="600" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    </div>
                </div>

                {{-- Content --}}
                <div data-aos="fade-left">
                    <div class="mb-12">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-1 bg-[#32A8B8] rounded-full"></span>
                            <h2 class="text-3xl font-bold text-gray-900">Our Vision</h2>
                        </div>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            To be a beacon of hope and excellence in child development, creating a world where every child
                            is understood,
                            valued, and empowered to reach their fullest potential, regardless of their developmental
                            challenges.
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-12 h-1 bg-[#EA6F71] rounded-full"></span>
                            <h2 class="text-3xl font-bold text-gray-900">Our Mission</h2>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex gap-4">
                                <span
                                    class="flex-shrink-0 w-8 h-8 rounded-full bg-[#EA6F711a] flex items-center justify-center text-[#EA6F71] font-bold">1</span>
                                <p class="text-gray-600">Provide comprehensive, multidisciplinary therapeutic services
                                    tailored to each child's unique needs.</p>
                            </li>
                            <li class="flex gap-4">
                                <span
                                    class="flex-shrink-0 w-8 h-8 rounded-full bg-[#EA6F711a] flex items-center justify-center text-[#EA6F71] font-bold">2</span>
                                <p class="text-gray-600">Empower parents and caregivers through education, training, and
                                    emotional support.</p>
                            </li>
                            <li class="flex gap-4">
                                <span
                                    class="flex-shrink-0 w-8 h-8 rounded-full bg-[#EA6F711a] flex items-center justify-center text-[#EA6F71] font-bold">3</span>
                                <p class="text-gray-600">Foster an inclusive community that advocates for the rights and
                                    acceptance of children with special needs.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= VALUES SECTION ================= --}}
    <section class="py-16 lg:py-24 bg-slate-50 relative overflow-hidden">
        {{-- Decorative Background Elements --}}
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-[#EA6F71] opacity-5 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 rounded-full bg-[#32A8B8] opacity-5 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-gray-900 text-2xl sm:text-3xl mb-2 block" style="font-family: 'Comic Sans MS', cursive;">What We Believe</span>
                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-6" style="font-family: 'Fredoka', sans-serif; font-weight: 800;">
                    Core Values
                </h2>
                <p class="text-gray-600 font-medium text-lg">
                    Our work is guided by a set of principles that ensure the highest quality of care for every child.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Value 1: Compassion --}}
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="tilt-card bg-white p-8 rounded-[2rem] shadow-lg hover:shadow-2xl group flex flex-col items-center text-center cursor-pointer h-full border-b-[6px] border-[#EA6F71]">
                        <div class="w-16 h-16 bg-[#EA6F71] text-white flex items-center justify-center mb-6 shadow-md group-hover:scale-110 group-hover:-rotate-3 transition-all duration-300" style="border-radius: 16px;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase tracking-wide" style="font-family: 'Fredoka', sans-serif;">Compassion</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            We approach every child and family with empathy, kindness, and understanding.
                        </p>
                    </div>
                </div>

                {{-- Value 2: Excellence --}}
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="tilt-card bg-white p-8 rounded-[2rem] shadow-lg hover:shadow-2xl group flex flex-col items-center text-center cursor-pointer h-full border-b-[6px] border-[#E99D1D]">
                        <div class="w-16 h-16 bg-[#E99D1D] text-white flex items-center justify-center mb-6 shadow-md group-hover:scale-110 group-hover:rotate-3 transition-all duration-300" style="border-radius: 32px 32px 8px 8px;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase tracking-wide" style="font-family: 'Fredoka', sans-serif;">Excellence</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            We are committed to the highest standards of clinical practice and continuous learning.
                        </p>
                    </div>
                </div>

                {{-- Value 3: Integrity --}}
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="tilt-card bg-white p-8 rounded-[2rem] shadow-lg hover:shadow-2xl group flex flex-col items-center text-center cursor-pointer h-full border-b-[6px] border-[#32A8B8]">
                        <div class="w-16 h-16 bg-[#32A8B8] text-white flex items-center justify-center mb-6 shadow-md group-hover:scale-110 group-hover:-rotate-6 transition-all duration-300" style="border-radius: 24px 24px 24px 6px;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase tracking-wide" style="font-family: 'Fredoka', sans-serif;">Integrity</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            We operate with honesty, transparency, and ethical responsibility in all we do.
                        </p>
                    </div>
                </div>

                {{-- Value 4: Collaboration --}}
                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="tilt-card bg-white p-8 rounded-[2rem] shadow-lg hover:shadow-2xl group flex flex-col items-center text-center cursor-pointer h-full border-b-[6px] border-[#97B41A]">
                        <div class="w-16 h-16 bg-[#97B41A] text-white flex items-center justify-center mb-6 shadow-md group-hover:scale-110 group-hover:rotate-6 transition-all duration-300" style="border-radius: 24px 8px 24px 8px;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 uppercase tracking-wide" style="font-family: 'Fredoka', sans-serif;">Collaboration</h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            We work as a team with families, schools, and other professionals for the child's benefit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= WHY CHOOSE GEMS ================= --}}
    <section class="py-16 lg:py-24 relative overflow-hidden" style="background-color: #EA6F71;">
        {{-- Child-friendly background pattern --}}
        <div class="absolute inset-0 pointer-events-none opacity-15" style="background-image: url('data:image/svg+xml,%3Csvg width=\'400\' height=\'400\' viewBox=\'0 0 400 400\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' stroke=\'white\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3E%3Cpath d=\'M200 100 c -20 0 -35 15 -35 35 c 0 15 10 25 15 30 l 0 15 l 40 0 l 0 -15 c 5 -5 15 -15 15 -30 c 0 -20 -15 -35 -35 -35 Z\'/%3E%3Cpath d=\'M185 185 l 30 0 m -30 5 l 30 0\'/%3E%3Cpath d=\'M200 85 l 0 -10 M230 115 l 10 -10 M170 115 l -10 -10\'/%3E%3Cpath d=\'M50 50 Q 70 30 90 50 T 130 50\'/%3E%3Ccircle cx=\'300\' cy=\'100\' r=\'20\'/%3E%3Cpath d=\'M350 300 l 20 20 m -20 0 l 20 -20\'/%3E%3Crect x=\'100\' y=\'300\' width=\'30\' height=\'30\' rx=\'5\'/%3E%3Cpath d=\'M40 250 c 10 0 10 20 20 20 s 10 -20 20 -20\'/%3E%3Ccircle cx=\'150\' cy=\'100\' r=\'5\' fill=\'white\'/%3E%3Ccircle cx=\'250\' cy=\'350\' r=\'8\'/%3E%3C/g%3E%3C/svg%3E'); background-size: 300px; animation: floatBackground 20s ease-in-out infinite;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-gray-900 text-2xl sm:text-3xl mb-2 block" style="font-family: 'Comic Sans MS', cursive;">Our Strengths</span>
                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-6" style="font-family: 'Fredoka', sans-serif; font-weight: 800; line-height: 1.2;">
                    Why Choose GEMS?
                </h2>
                <p class="text-gray-900 font-medium text-lg opacity-90 mx-auto max-w-2xl">
                    We combine clinical expertise with a heart-centered approach to ensure the best possible start for your
                    child.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                {{-- Point 1: Licensed Therapist --}}
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="tilt-card bg-white p-6 lg:p-8 rounded-[2rem] shadow-lg hover:shadow-2xl group flex flex-col items-center text-center cursor-pointer h-full">
                        <div class="w-16 h-16 bg-[#32A8B8] text-white flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 group-hover:rotate-6 transition-all duration-300" style="border-radius: 24px 24px 24px 6px;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"></path><path d="M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3" style="font-family: 'Fredoka', sans-serif;">Licensed Therapist</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Expert care from certified professionals dedicated to pediatric excellence.
                        </p>
                    </div>
                </div>

                {{-- Point 2: Precision in Diagnosis --}}
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="tilt-card bg-white p-6 lg:p-8 rounded-[2rem] shadow-lg hover:shadow-2xl group flex flex-col items-center text-center cursor-pointer h-full">
                        <div class="w-16 h-16 bg-[#E99D1D] text-white flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 group-hover:-rotate-3 transition-all duration-300" style="border-radius: 32px 32px 8px 8px;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v8"></path><path d="M8 12h8"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3" style="font-family: 'Fredoka', sans-serif;">Precision in Diagnosis</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Accurate assessments that form the foundation for highly tailored interventions.
                        </p>
                    </div>
                </div>

                {{-- Point 3: Multidisciplinary Team Care --}}
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="tilt-card bg-white p-6 lg:p-8 rounded-[2rem] shadow-lg hover:shadow-2xl group flex flex-col items-center text-center cursor-pointer h-full">
                        <div class="w-16 h-16 bg-[#97B41A] text-white flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 group-hover:rotate-3 transition-all duration-300" style="border-radius: 24px 8px 24px 8px;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3" style="font-family: 'Fredoka', sans-serif;">Multidisciplinary Team</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            A collaborative approach involving specialists across multiple therapeutic disciplines.
                        </p>
                    </div>
                </div>

                {{-- Point 4: Parent Support --}}
                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="tilt-card bg-white p-6 lg:p-8 rounded-[2rem] shadow-lg hover:shadow-2xl group flex flex-col items-center text-center cursor-pointer h-full">
                        <div class="w-16 h-16 bg-[#EA6F71] text-white flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 group-hover:-rotate-3 transition-all duration-300" style="border-radius: 16px;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3" style="font-family: 'Fredoka', sans-serif;">Parent Support</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Empowering families with tools, education, and emotional guidance throughout the journey.
                        </p>
                    </div>
                </div>

                {{-- Point 5: Evidence-Based Outcomes --}}
                <div data-aos="fade-up" data-aos-delay="500">
                    <div class="tilt-card bg-white p-6 lg:p-8 rounded-[2rem] shadow-lg hover:shadow-2xl group flex flex-col items-center text-center cursor-pointer h-full">
                        <div class="w-16 h-16 bg-[#32A8B8] text-white flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 group-hover:rotate-6 transition-all duration-300" style="border-radius: 32px 10px 32px 10px;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path><path d="M18 2H6v7a6 6 0 0 1-12 0V2z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3" style="font-family: 'Fredoka', sans-serif;">Evidence-Based Outcomes</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Committed to measurable progress and positive functional outcomes for every child.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .tilt-card {
                transform-style: preserve-3d;
                transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.4s ease;
                transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);
            }
            .tilt-card:active {
                transition: transform 0.1s ease !important;
                transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(0.95, 0.95, 0.95) !important;
            }
            .tilt-card.is-moving {
                transition: none;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const tiltCards = document.querySelectorAll('.tilt-card');
                
                tiltCards.forEach(card => {
                    card.addEventListener('mousemove', (e) => {
                        card.classList.add('is-moving');
                        const rect = card.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;
                        
                        const centerX = rect.width / 2;
                        const centerY = rect.height / 2;
                        
                        // Calculate rotation (-10 to 10 degrees max)
                        const rotateX = ((y - centerY) / centerY) * -10;
                        const rotateY = ((x - centerX) / centerX) * 10;
                        
                        // Add a slight pop effect (scale) while hovering
                        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
                    });
                    
                    card.addEventListener('mouseleave', () => {
                        card.classList.remove('is-moving');
                        // Return to resting state smoothly
                        card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)`;
                    });
                });
            });
        </script>
        </div>
    </section>

    {{-- ================= FOUNDER'S MESSAGE ================= --}}
    <section class="py-16 lg:py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-teal-50/50 -skew-x-12 transform translate-x-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="lg:w-1/3 text-center lg:text-left" data-aos="fade-right">
                    <div class="relative inline-block">
                        <img src="{{ asset('images/Mushthaq.P.PNG') }}" alt="Mushtaq - Founder of GEMS Child Development Centre" class="w-64 h-64 lg:w-80 lg:h-80 object-cover rounded-full border-8 border-white shadow-2xl" width="320" height="320" loading="lazy" decoding="async">
                        <div class="absolute bottom-4 right-4 bg-[#32A8B8] text-white p-3 rounded-full shadow-lg">
                            <span class="text-2xl">❝</span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <p class="text-2xl font-bold text-gray-900">Mushtaq</p>
                        <p class="text-[#32A8B8] font-medium text-lg">Founder & Director</p>
                    </div>
                </div>

                <div class="lg:w-2/3" data-aos="fade-left">
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">A Message from the Founder</h2>
                    <div class="space-y-6 text-lg text-gray-600 leading-relaxed">
                        <p>
                            "Welcome to GEMS Child Development Centre. Our journey began with a simple yet profound belief:
                            that every child is unique and capable of amazing things when given the right support."
                        </p>
                        <p>
                            "Over the past decade, we have had the privilege of walking alongside hundreds of families,
                            witnessing the incredible resilience of children and the transforming power of early
                            intervention. We understand that navigating developmental challenges can be overwhelming, which
                            is why we've built a center that isn't just a clinic, but a supportive community."
                        </p>
                        <p>
                            "Our team is not just highly skilled; they are passionate advocates for your child. We promise
                            to listen, to care, and to work tirelessly to help your child shine."
                        </p>
                    </div>
                    <!-- <div class="mt-8">
                        <img src="{{ asset('images/signature.png') }}" alt="Signature" class="h-16 opacity-60">
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative overflow-hidden py-24 lg:py-32" style="background-color: #97B41A;">
        {{-- Background Decor --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#97B41A] opacity-90"></div>
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
        <div class="relative max-w-4xl mx-auto px-4 text-center z-10" data-aos="zoom-in">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 tracking-tight">
                Ready to Start Your Journey?
            </h2>
            <p class="text-xl text-white/90 mb-12 max-w-2xl mx-auto leading-relaxed">
                Book a consultation with our experts today and let's discuss how we can
                support your child's growth.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="/contact"
                    class="bg-white text-[#97B41A] px-10 py-5 rounded-2xl font-bold text-lg hover:bg-gray-50 transition-all shadow-2xl hover:-translate-y-1">
                    Contact Us Now
                </a>
                <a href="/services"
                    class="border-2 border-white/30 backdrop-blur-sm text-white px-10 py-5 rounded-2xl font-bold text-lg hover:bg-white/10 transition-all hover:-translate-y-1">
                    View Services
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

