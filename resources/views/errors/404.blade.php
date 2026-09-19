@extends('layouts.app')

@section('title', 'Page Not Found | GEMS')
@section('meta_description', 'The page you are looking for could not be found.')

@section('content')
    <section class="min-h-[70vh] flex items-center justify-center bg-gray-50 py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        {{-- Decorative background elements --}}
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute -top-20 -left-20 w-64 h-64 bg-teal-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-pulse"></div>
            <div class="absolute top-40 right-10 w-72 h-72 bg-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="max-w-xl w-full text-center space-y-8 relative z-10" data-aos="fade-up">
            <div class="relative">
                <h1 class="text-[150px] leading-none font-extrabold text-[#32A8B8] tracking-widest drop-shadow-md" style="font-family: 'Fredoka', sans-serif;">404</h1>
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <span class="bg-[#EA6F71] text-white px-4 py-1 text-sm sm:text-base font-bold rounded-full transform -rotate-12 uppercase tracking-wider shadow-lg">Oops!</span>
                </div>
            </div>
            
            <div class="space-y-4">
                <h2 class="text-3xl font-bold text-gray-900 tracking-tight sm:text-4xl" style="font-family: 'Fredoka', sans-serif;">Page Not Found</h2>
                <p class="text-lg text-gray-600 leading-relaxed max-w-md mx-auto">
                    The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-6">
                <a href="{{ url('/') }}" class="w-full sm:w-auto px-8 py-3.5 border border-transparent text-base font-bold rounded-xl text-white bg-[#32A8B8] hover:bg-[#288a99] hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    Back to Home
                </a>
                <a href="{{ url('/contact') }}" class="w-full sm:w-auto px-8 py-3.5 border-2 border-[#32A8B8] text-base font-bold rounded-xl text-[#32A8B8] bg-transparent hover:bg-teal-50 hover:-translate-y-1 transition-all duration-300">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection
