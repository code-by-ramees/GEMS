@extends('layouts.app')

@section('title', 'Our Services | GEMS')
@section('meta_description', 'Explore specialized pediatric therapy services at GEMS Kozhikode, Kerala: Speech Therapy, Occupational Therapy, Behavioral Therapy, and Special Education.')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="relative overflow-hidden" style="background-color: #32A8B8;">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[#32A8B8] opacity-90"></div>
        {{-- Design elements --}}
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 transform translate-x-20"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 lg:py-32 text-center">
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-6" data-aos="fade-up">
            Our Services
        </h1>
        <p class="text-base sm:text-xl text-white/90 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Comprehensive, evidence-based therapies designed to maximise your child’s potential in a supportive and nurturing environment.
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

{{-- ================= SERVICES GRID ================= --}}
<section class="py-16 lg:py-24 bg-white relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Psychological Assessment --}}
            <a id="psychological-assessment" href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img loading="lazy" decoding="async" src="{{ asset('images/image12.jpg') }}" alt="Psychological Assessment" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #32A8B8;">
                        🧠
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h2 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#32A8B8]" style="font-family: 'Fredoka', sans-serif;">Psychological Assessment</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        Understanding your child’s unique mind.<br><br>Our expert child psychologists conduct professional IQ tests, comprehensive learning evaluations, and personality assessments. As a leading child development centre, we craft personalised support plans to help every student reach their full potential.
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #32A8B8;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Behavioural Therapy --}}
            <a id="behaviour-therapy" href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img loading="lazy" decoding="async" src="{{ asset('images/image6.jpg') }}" alt="Behavioural Therapy" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #97B41A;">
                        🧩
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h2 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#97B41A]" style="font-family: 'Fredoka', sans-serif;">Behaviour Therapy</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        Better skills for a happier life.<br><br>We provide the best behaviour therapy to improve cognitive, social, and emotional skills. Our ABA therapy and evidence-based methods ensure that every child receives the best autism support.
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #97B41A;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Speech Therapy --}}
            <a id="speech-therapy" href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img loading="lazy" decoding="async" src="{{ asset('images/image15.jpg') }}" alt="Speech Therapy" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #32A8B8;">
                        🗣️
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h2 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#32A8B8]" style="font-family: 'Fredoka', sans-serif;">Speech Therapy</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        Helping every child find their voice.<br><br>We offer the best speech therapy to improve speech clarity, language development, and social interaction. Our paediatric therapy team ensures that "every voice matters."
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #32A8B8;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Occupational Therapy --}}
            <a id="occupational-therapy" href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img loading="lazy" decoding="async" src="{{ asset('images/image14.jpg') }}" alt="Occupational Therapy" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #97B41A;">
                        🤲
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h2 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#97B41A]" style="font-family: 'Fredoka', sans-serif;">Occupational Therapy</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        Building independence for daily life.<br><br>Our occupational therapy focuses on building independence. We help children improve motor skills and sensory processing. This vital paediatric therapy helps children perform daily tasks such as writing, playing, and self-care with confidence.
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #97B41A;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Special Education --}}
            <a id="special-education" href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img loading="lazy" decoding="async" src="{{ asset('images/image4.jpg') }}" alt="Special Education" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #EA6F71;">
                        📚
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h2 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#EA6F71]" style="font-family: 'Fredoka', sans-serif;">Special Education</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        Making learning easy and fun.<br><br>At our child development centre, we unlock learning potential. We support children with reading, writing, and math difficulties through Individualised Education Plans (IEPs) and multisensory teaching tools, ensuring no child is left behind.
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #EA6F71;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Psychotherapy & Counselling --}}
            <a id="psychotherapy-counselling" href="/contact" class="group block bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden text-center relative flex flex-col items-center pb-8 transform transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)] active:scale-[0.97] active:shadow-md cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="relative w-full h-[220px] overflow-hidden">
                    <img loading="lazy" decoding="async" src="{{ asset('images/image13.jpg') }}" alt="Psychotherapy & Counselling" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110" onerror="this.src='{{ asset('images/image2.jpg') }}'">
                    <div class="absolute bottom-[-1px] left-0 w-full overflow-hidden leading-none z-10 transition-transform duration-500 group-hover:translate-y-1">
                        <svg class="relative block w-full h-[50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,120 V60 C300,-20 900,140 1200,60 V120 Z" class="fill-white"></path>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-full border-[5px] border-white text-white flex items-center justify-center text-3xl absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-20 shadow-sm transition-transform duration-500 ease-out group-hover:-translate-y-2 group-hover:scale-110" style="background-color: #E99D1D;">
                        💬
                    </div>
                </div>
                <div class="px-6 pt-12 flex-grow flex flex-col items-center">
                    <h2 class="text-xl font-bold mb-3 text-gray-900 transition-colors duration-300 group-hover:text-[#E99D1D]" style="font-family: 'Fredoka', sans-serif;">Counselling & Psychotherapy</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-medium transition-colors duration-300 group-hover:text-gray-600">
                        Caring for mental health.<br><br>Our expert team offers child counselling and psychotherapy for anxiety, depression, personality disorders, relationship issues, low confidence, and emotional hurdles, helping them build resilience and achieve overall well-being.
                    </p>
                    <div class="w-10 h-10 rounded-full text-white flex items-center justify-center mt-auto shadow-md transition-all duration-500 ease-out group-hover:scale-110 group-hover:rotate-12 group-active:-rotate-12" style="background-color: #E99D1D;">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

{{-- ================= PROCESS SECTION ================= --}}
<section class="py-16 lg:py-24 bg-[#f8fafc] relative overflow-hidden">
    {{-- Doodle background --}}
    <div class="absolute inset-0 opacity-[0.04] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=\'400\' height=\'400\' viewBox=\'0 0 400 400\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' stroke=\'%2332A8B8\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3E%3Cpath d=\'M50 50 Q 70 30 90 50 T 130 50\'/%3E%3Ccircle cx=\'300\' cy=\'100\' r=\'15\'/%3E%3Cpath d=\'M350 300 l 15 15 m -15 0 l 15 -15\'/%3E%3Crect x=\'100\' y=\'300\' width=\'25\' height=\'25\' rx=\'5\'/%3E%3Cpath d=\'M200 150 c 15 0 15 20 30 20 s 15 -20 30 -20\'/%3E%3Ccircle cx=\'50\' cy=\'350\' r=\'5\' fill=\'%2332A8B8\'/%3E%3Cpath d=\'M300 50 l 20 0 m -10 -10 l 0 20\'/%3E%3Cpath d=\'M150 100 q 10 -10 20 0 t 20 0\'/%3E%3C/g%3E%3C/svg%3E'); background-size: 300px;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-down">
            <span class="inline-block px-5 py-2 rounded-full bg-white text-[#32A8B8] font-bold text-sm mb-4 tracking-wider border border-teal-100 shadow-sm">
                ✦ Our Process ✦
            </span>
            <h2 class="text-4xl lg:text-5xl font-extrabold text-[#1a2b4b] mb-4" style="font-family: 'Fredoka', sans-serif;">How It Works</h2>
            <p class="mt-4 text-gray-500 max-w-2xl mx-auto text-lg font-medium">A structured, caring approach to ensure the right care at the right time.</p>
        </div>

        <div class="relative">
            {{-- Connecting Dashed Line (Desktop Only) --}}
            <div class="hidden lg:block absolute top-[50px] left-[12.5%] w-[75%] h-[2px] border-t-2 border-dashed border-gray-300 z-0"></div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 relative z-10">
                @foreach ([
                    ['1', 'Initial Consultation', 'We begin with a warm, welcoming conversation to understand your child\'s unique history, your specific concerns, and the goals you have for their development.', '#32A8B8'],
                    ['2', 'Assessment', 'Our specialists conduct thorough, play-based evaluations using evidence-based tools to accurately identify your child\'s strengths and areas for growth.', '#97B41A'],
                    ['3', 'Therapy Plan', 'We craft a highly personalized, step-by-step intervention strategy designed specifically to nurture your child\'s abilities and build their confidence.', '#EA6F71'],
                    ['4', 'Progress Review', 'We continuously monitor milestones and adapt our strategies, keeping you fully informed and involved in every step of your child\'s journey.', '#E99D1D']
                ] as [$step, $title, $desc, $color])
                <div class="relative group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                    {{-- Card --}}
                    <div class="bg-white rounded-[2rem] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.12)] transition-all duration-500 hover:-translate-y-2 h-full flex flex-col items-center text-center border border-gray-100 relative overflow-hidden cursor-pointer">
                        
                        {{-- Background Decoration --}}
                        <div class="absolute -right-6 -top-6 w-32 h-32 rounded-full opacity-[0.06] transition-transform duration-700 ease-out group-hover:scale-[2.5]" style="background-color: {{ $color }};"></div>
                        
                        {{-- Number Badge --}}
                        <div class="w-16 h-16 rounded-[1.25rem] flex items-center justify-center text-2xl font-black mb-6 shadow-lg relative z-10 transition-all duration-500 group-hover:rotate-[10deg] group-hover:scale-110 text-white" style="background-color: {{ $color }}; font-family: 'Fredoka', sans-serif;">
                            {{ $step }}
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-3 relative z-10 transition-colors duration-300 group-hover:text-gray-800" style="font-family: 'Fredoka', sans-serif;">{{ $title }}</h3>
                        <p class="text-gray-500 text-sm font-medium leading-relaxed relative z-10">{{ $desc }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ================= CTA ================= --}}
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <div class="rounded-3xl p-8 md:p-12 shadow-2xl text-white" style="background: #EA6F71;">
            <h2 class="text-3xl font-bold mb-4">
                Not sure which service you need?
            </h2>
            <p class="text-white/90 text-lg mb-8">
                Our specialists will guide you after a preliminary assessment.
            </p>
            <a href="/contact"
               aria-label="Schedule an assessment"
               class="inline-block bg-white text-[#32A8B8] px-8 py-4 rounded-xl font-bold hover:bg-gray-100 transition-colors shadow-lg">
                Schedule an Assessment
            </a>
        </div>
    </div>
</section>

@endsection
