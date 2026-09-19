@extends('layouts.app')

@section('title', 'Gallery | GEMS')
@section('meta_description', 'Take a look inside GEMS Child Development Centre in Kozhikode, Kerala. Browse photos of our modern therapy facilities, sensory rooms, and child milestones.')

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
                Our Gallery
            </h1>
            <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                Glimpses of our center, activities, and the happy smiles of our children.
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

    {{-- ================= GALLERY GRID ================= --}}
    {{-- ================= GALLERY GRID ================= --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 text-center">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($galleries as $gallery)
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg aspect-w-4 aspect-h-3 bg-gray-200"
                        data-aos="fade-up">
                        <img loading="lazy" decoding="async" src="{{ asset('storage/' . $gallery->image) }}"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                            alt="{{ $gallery->title }}">

                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <p class="text-white font-bold text-lg">
                                {{ $gallery->title ?? $gallery->category }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
