@extends('layouts.app')

@section('title', 'Contact Us | GEMS')
@section('meta_description', 'Get in touch with GEMS Child Development Centre in Kozhikode, Kerala. Book a consultation, visit our clinic, or speak directly with our pediatric care team.')

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
                Get in Touch
            </h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                We are here to answer your questions and help you find the best path for your child.
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

    {{-- ================= CONTACT CONTENT ================= --}}
    <section class="py-16 lg:py-24 bg-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">

                {{-- Contact Info Cards --}}
                <div class="lg:col-span-1 space-y-6">
                    {{-- Address --}}
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-right">
                        <div
                            class="w-12 h-12 bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center text-2xl mb-4">
                            📍</div>
                        <p class="font-bold text-gray-900 text-lg mb-2">Visit Us</p>
                        <p class="text-gray-600 leading-relaxed">
                            GEMS Child Development Centre<br>
                            Pallipatu Ayyapa Temple Road
                            Civil Station,<br>
                            Kozhikode, Kerala, India - 673020
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-right"
                        data-aos-delay="100">
                        <div
                            class="w-12 h-12 bg-pink-100 text-pink-600 rounded-xl flex items-center justify-center text-2xl mb-4">
                            📞</div>
                        <p class="font-bold text-gray-900 text-lg mb-2">Call Us</p>
                        <p class="text-gray-600 mb-3">Mon-Sat from 9am to 6pm</p>
                        <a href="tel:+917994502501" class="text-lg font-bold text-teal-600 hover:text-teal-700 block">+91
                            7994502501</a>
                        <a href="tel:+918086497941" class="text-lg font-bold text-teal-600 hover:text-teal-700 block">+91
                            8086497941</a>
                    </div>

                    {{-- Email --}}
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-right"
                        data-aos-delay="200">
                        <div
                            class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center text-2xl mb-4">
                            ✉️</div>
                        <p class="font-bold text-gray-900 text-lg mb-2">Email Us</p>
                        <p class="text-gray-600 mb-3">We reply within 24 hours</p>
                        <a href="mailto:gemsrehab@gmail.com"
                            class="text-lg font-bold text-teal-600 hover:text-teal-700">gemsrehab@gmail.com</a>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="lg:col-span-2" data-aos="fade-left">
                    <div class="bg-white rounded-3xl shadow-xl p-8 sm:p-12 overflow-hidden relative">
                        <div class="absolute top-0 right-0 w-40 h-40 bg-teal-50 rounded-bl-full -z-0"></div>

                        <h2 class="text-3xl font-bold text-gray-900 mb-2 relative z-10">Send a Message</h2>
                        <p class="text-gray-600 mb-8 relative z-10">Fill out the form below and we'll get back to you
                            shortly.</p>

                        @if(session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl relative mb-6"
                                role="alert">
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl relative mb-6"
                                role="alert">
                                <ul class="list-disc list-inside">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6 relative z-10">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="name" class="text-sm font-semibold text-gray-700">Your Name</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 transition-all outline-none"
                                        placeholder="John Doe">
                                </div>
                                <div class="space-y-2">
                                    <label for="phone" class="text-sm font-semibold text-gray-700">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" required
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 transition-all outline-none"
                                        placeholder="+91 99999 99999">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="email" class="text-sm font-semibold text-gray-700">Email Address</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 transition-all outline-none"
                                    placeholder="john@example.com">
                            </div>

                            <div class="space-y-2">
                                <label for="service" class="text-sm font-semibold text-gray-700">Interested Service</label>
                                <select id="service" name="service"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 transition-all outline-none bg-white">
                                    <option value="" disabled selected>Select a service</option>
                                    <option value="speech">Speech Therapy</option>
                                    <option value="occupational">Occupational Therapy</option>
                                    <option value="behavioral">Behavioral Therapy</option>
                                    <option value="special_education">Special Education</option>
                                    <option value="psychology">Psychological Assessment</option>
                                    <option value="psychologycouncil">Psychotherapy & Counselling</option>

                                    <option value="other">Other / General Inquiry</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label for="message" class="text-sm font-semibold text-gray-700">Message</label>
                                <textarea id="message" name="message" rows="4" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 transition-all outline-none resize-none"
                                    placeholder="How can we help you?"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-[#32A8B8] text-white font-bold py-4 rounded-xl shadow-lg hover:shadow-xl hover:translate-y-[-2px] transition-all duration-300">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= MAP SECTION ================= --}}
    <section class="h-[400px] w-full bg-gray-200 relative">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3912.643596121176!2d75.79063037504932!3d11.28758808889399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDE3JzE1LjMiTiA3NcKwNDcnMzUuNSJF!5e0!3m2!1sen!2sin!4v1767009982802!5m2!1sen!2sin"
            width="100%" height="100%" class="border-0 filter grayscale hover:grayscale-0 transition-all duration-500"
            allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

@endsection