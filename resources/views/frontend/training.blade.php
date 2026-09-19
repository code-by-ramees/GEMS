@extends('layouts.app')

@section('title', 'Training Programs | GEMS')
@section('meta_description', 'Empower your skills with GEMS training programs in Kozhikode, Kerala: comprehensive courses for parents, educators, and shadow teachers in child development.')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="relative overflow-hidden bg-[#32A8B8]">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[#32A8B8] opacity-90"></div>
        {{-- Decorative skew --}}
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 transform translate-x-20"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 lg:py-32 text-center z-10">
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-6" data-aos="fade-up">
            Training &amp; Empowerment
        </h1>
        <p class="text-base sm:text-xl text-white/90 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Equipping parents, educators, and rehabilitation professionals with evidence-based strategies to champion child development and inclusive education.
        </p>
    </div>

    {{-- Curve divider --}}
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-10">
        <svg class="relative block w-full h-[60px] sm:h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                class="fill-white"></path>
        </svg>
    </div>
</section>

{{-- ================= CATEGORIES SECTION ================= --}}
<section class="py-16 lg:py-24 bg-white relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-down">
            <span class="inline-block px-5 py-2 rounded-full bg-teal-50 text-[#32A8B8] font-bold text-sm mb-4 tracking-wider border border-teal-100 shadow-sm">
                ✦ Learning Ecosystem ✦
            </span>
            <h2 class="text-3xl lg:text-5xl font-extrabold text-gray-900 mb-6" style="font-family: 'Fredoka', sans-serif;">
                Our Specialized Training Streams
            </h2>
            <p class="text-gray-500 text-lg font-medium">
                We believe that training the ecosystem around the child yields the most lasting developmental outcomes.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            {{-- Category 1: Parents --}}
            <div class="group bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.06)] overflow-hidden flex flex-col transform transition-all duration-500 hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.12)] border border-gray-100" data-aos="fade-up">
                <div class="relative h-56 overflow-hidden">
                    <img loading="lazy" decoding="async" src="{{ asset('images/image1.jpg') }}" alt="Parent Training" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <span class="px-3 py-1 bg-[#32A8B8] rounded-full text-xs font-bold uppercase tracking-wider">Parents & Families</span>
                    </div>
                </div>
                <div class="p-8 flex-grow flex flex-col">
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-[#32A8B8] transition-colors" style="font-family: 'Fredoka', sans-serif;">Parent Empowerment Program</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 font-medium">
                        Empowering parents with structured coaching, home-based therapy routines, positive behavior management tools, and emotional support to actively lead their child's therapy goals.
                    </p>
                    <ul class="space-y-3 mb-8 text-sm text-gray-600 font-semibold mt-auto">
                        <li class="flex items-center gap-3">
                            <span class="text-[#32A8B8]">✓</span> Home Activity Integration
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-[#32A8B8]">✓</span> Sensory Diet Management
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-[#32A8B8]">✓</span> Positive Behavioral Support
                        </li>
                    </ul>
                    <a href="#inquiry-form-section" onclick="selectProgram('Parent Empowerment Program')" class="mt-auto w-full text-center py-4 bg-teal-50 text-[#32A8B8] font-bold rounded-2xl group-hover:bg-[#32A8B8] group-hover:text-white transition-all duration-300">
                        Inquire Program
                    </a>
                </div>
            </div>

            {{-- Category 2: Teachers --}}
            <div class="group bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.06)] overflow-hidden flex flex-col transform transition-all duration-500 hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.12)] border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                <div class="relative h-56 overflow-hidden">
                    <img loading="lazy" decoding="async" src="{{ asset('images/image4.jpg') }}" alt="Teacher Training" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <span class="px-3 py-1 bg-[#EA6F71] rounded-full text-xs font-bold uppercase tracking-wider">Educators</span>
                    </div>
                </div>
                <div class="p-8 flex-grow flex flex-col">
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-[#EA6F71] transition-colors" style="font-family: 'Fredoka', sans-serif;">Inclusive Educator Training</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 font-medium">
                        Practical workshops for school teachers and administrators. Learn to spot early developmental red flags, tailor classroom tasks for neurodivergent students, and support unique learning styles.
                    </p>
                    <ul class="space-y-3 mb-8 text-sm text-gray-600 font-semibold mt-auto">
                        <li class="flex items-center gap-3">
                            <span class="text-[#EA6F71]">✓</span> Identifying Developmental Red Flags
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-[#EA6F71]">✓</span> Individual Education Plans (IEP)
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-[#EA6F71]">✓</span> Sensory-Friendly Classroom Setup
                        </li>
                    </ul>
                    <a href="#inquiry-form-section" onclick="selectProgram('Inclusive Educator Training')" class="mt-auto w-full text-center py-4 bg-rose-50 text-[#EA6F71] font-bold rounded-2xl group-hover:bg-[#EA6F71] group-hover:text-white transition-all duration-300">
                        Inquire Program
                    </a>
                </div>
            </div>

            {{-- Category 3: Students/Shadow --}}
            <div class="group bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.06)] overflow-hidden flex flex-col transform transition-all duration-500 hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.12)] border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                <div class="relative h-56 overflow-hidden">
                    <img loading="lazy" decoding="async" src="{{ asset('images/image12.jpg') }}" alt="Professional Training" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <span class="px-3 py-1 bg-[#97B41A] rounded-full text-xs font-bold uppercase tracking-wider">Professionals</span>
                    </div>
                </div>
                <div class="p-8 flex-grow flex flex-col">
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-[#97B41A] transition-colors" style="font-family: 'Fredoka', sans-serif;">Internships & Shadow Teacher Training</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 font-medium">
                        Professional grooming for clinical psychology, social work students, and aspiring shadow teachers. Gain hands-on case discussions, therapeutic exposure, and RCI guidelines compliance.
                    </p>
                    <ul class="space-y-3 mb-8 text-sm text-gray-600 font-semibold mt-auto">
                        <li class="flex items-center gap-3">
                            <span class="text-[#97B41A]">✓</span> Clinical Internships (15/30 Days)
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-[#97B41A]">✓</span> Shadow Teacher Certification
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-[#97B41A]">✓</span> Case Study and Practical Exposure
                        </li>
                    </ul>
                    <a href="#inquiry-form-section" onclick="selectProgram('Internship & Shadow Teacher')" class="mt-auto w-full text-center py-4 bg-lime-50 text-[#97B41A] font-bold rounded-2xl group-hover:bg-[#97B41A] group-hover:text-white transition-all duration-300">
                        Inquire Program
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= HIGHLIGHT STATISTICS ================= --}}
<section class="py-16 bg-slate-50 relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=\'400\' height=\'400\' viewBox=\'0 0 400 400\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' stroke=\'%2332A8B8\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3E%3Ccircle cx=\'200\' cy=\'200\' r=\'12\'/%3E%3Cpath d=\'M100 100 l 10 10\'/%3E%3Crect x=\'300\' y=\'100\' width=\'20\' height=\'20\' rx=\'4\'/%3E%3C/g%3E%3C/svg%3E'); background-size: 300px;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            @foreach([
                ['500+', 'Parents Empowered', '#32A8B8'],
                ['120+', 'Teachers Trained', '#EA6F71'],
                ['45+', 'Schools Partnered', '#E99D1D'],
                ['150+', 'Internships Completed', '#97B41A']
            ] as [$num, $label, $color])
            <div class="bg-white p-8 rounded-[2rem] shadow-[0_8px_30px_rgba(0,0,0,0.02)] border border-gray-100" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                <span class="text-4xl lg:text-5xl font-extrabold block mb-2" style="color: {{ $color }}; font-family: 'Fredoka', sans-serif;">
                    {{ $num }}
                </span>
                <p class="text-gray-600 font-bold text-sm lg:text-base">{{ $label }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ================= FAQ SECTION ================= --}}
<section class="py-16 lg:py-24 bg-white relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block px-5 py-2 rounded-full bg-teal-50 text-[#32A8B8] font-bold text-sm mb-4 tracking-wider border border-teal-100 shadow-sm">
                ✦ Common Doubts ✦
            </span>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900" style="font-family: 'Fredoka', sans-serif;">
                Frequently Asked Questions
            </h2>
        </div>

        <div class="space-y-4" data-aos="fade-up">
            @php
                $faqs = [
                    [
                        'q' => 'Who can participate in these training programs?',
                        'a' => 'Our programs are tailored for parents, caregivers, special educators, mainstream school teachers, shadow teachers, and students of psychology, social work, and rehabilitation sciences.'
                    ],
                    [
                        'q' => 'Will I receive a certificate upon completion?',
                        'a' => 'Yes. Certificates of completion or participation are provided for professional modules, shadow teacher certifications, and clinical internship runs.'
                    ],
                    [
                        'q' => 'Are the training sessions conducted online or offline?',
                        'a' => 'We utilize a hybrid model. Parent coaching and clinical internships are fully offline (at our Kozhikode center) for maximum hands-on learning. Teacher trainings and educational workshops are available in both online and offline formats.'
                    ],
                    [
                        'q' => 'How can I register for an upcoming batch?',
                        'a' => 'Simply fill out the inquiry form below, select your desired program, and our training coordinator will get in touch with you. You can also call us directly at +91 7994502501.'
                    ]
                ];
            @endphp

            @foreach($faqs as $index => $faq)
            <div class="faq-item border border-gray-100 rounded-3xl overflow-hidden bg-[#f8fafc] transition-all duration-300 hover:shadow-md">
                <button onclick="toggleFaq({{ $index }})" class="w-full flex items-center justify-between p-6 text-left focus:outline-none select-none">
                    <span class="font-bold text-gray-900 text-lg leading-snug">{{ $faq['q'] }}</span>
                    <span class="faq-icon text-xl text-[#32A8B8] transition-transform duration-300 font-bold" id="faq-icon-{{ $index }}">+</span>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-out" id="faq-content-{{ $index }}">
                    <div class="p-6 pt-0 text-gray-600 text-sm leading-relaxed border-t border-gray-200/50 mt-4">
                        {{ $faq['a'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ================= REGISTRATION & INQUIRY FORM ================= --}}
<section class="py-16 lg:py-24 bg-slate-50 relative" id="inquiry-form-section">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-[3rem] shadow-[0_20px_50px_rgba(0,0,0,0.08)] overflow-hidden border border-gray-100" data-aos="zoom-in">
            <div class="grid grid-cols-1 md:grid-cols-5">
                {{-- Banner Panel --}}
                <div class="md:col-span-2 bg-[#EA6F71] p-6 sm:p-8 lg:p-12 text-white flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/10 rounded-full"></div>
                    <div>
                        <span class="text-sm font-bold uppercase tracking-widest text-rose-100 block mb-2">Join Us</span>
                        <h2 class="text-2xl sm:text-3xl font-extrabold mb-4" style="font-family: 'Fredoka', sans-serif;">Request Admission</h2>
                        <p class="text-rose-50/95 text-sm leading-relaxed mb-6 font-medium">
                            Ready to upskill or seek help? Fill out this quick inquiry, and let’s start.
                        </p>
                    </div>
                    <div class="relative z-10">
                        <p class="text-xs text-rose-100/90 leading-relaxed font-semibold">
                            📞 Helpline: +91 7994502501<br>
                            ✉️ Email: gemsrehab@gmail.com
                        </p>
                    </div>
                </div>

                {{-- Form Panel --}}
                <div class="md:col-span-3 p-6 sm:p-8 lg:p-12">
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-emerald-50 text-emerald-800 border border-emerald-200 rounded-2xl text-sm font-semibold flex items-center gap-3">
                            <span>✓</span>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Your Name *</label>
                            <input type="text" name="name" id="name" required value="{{ old('name') }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#32A8B8] focus:border-transparent transition-all">
                            @error('name')
                                <p class="text-rose-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label for="phone" class="block text-sm font-bold text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#32A8B8] focus:border-transparent transition-all">
                                @error('phone')
                                    <p class="text-rose-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email Address *</label>
                                <input type="email" name="email" id="email" required value="{{ old('email') }}"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#32A8B8] focus:border-transparent transition-all">
                                @error('email')
                                    <p class="text-rose-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="service" class="block text-sm font-bold text-gray-700 mb-2">Choose Program *</label>
                            <select name="service" id="service" required
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#32A8B8] focus:border-transparent transition-all">
                                <option value="" disabled selected>Select a program</option>
                                <option value="Parent Empowerment Program" {{ old('service') == 'Parent Empowerment Program' ? 'selected' : '' }}>Parent Empowerment Program</option>
                                <option value="Inclusive Educator Training" {{ old('service') == 'Inclusive Educator Training' ? 'selected' : '' }}>Inclusive Educator Training</option>
                                <option value="Internship & Shadow Teacher Training" {{ old('service') == 'Internship & Shadow Teacher Training' ? 'selected' : '' }}>Internships & Shadow Teacher Training</option>
                                <option value="Other Training Inquiries" {{ old('service') == 'Other Training Inquiries' ? 'selected' : '' }}>Other General Inquiry</option>
                            </select>
                            @error('service')
                                <p class="text-rose-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-bold text-gray-700 mb-2">Your Message / Background Details *</label>
                            <textarea name="message" id="message" rows="4" required
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#32A8B8] focus:border-transparent transition-all placeholder-gray-400"
                                placeholder="Please let us know your educational background or child's details..."></textarea>
                            @error('message')
                                <p class="text-rose-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-[#32A8B8] to-[#2d96a5] hover:from-[#EA6F71] hover:to-[#d65f61] text-white font-bold py-4 px-6 rounded-xl shadow-lg transition-all duration-300 flex items-center justify-center gap-2 transform hover:-translate-y-1">
                            <span>Submit Inquiry</span>
                            <span>→</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // FAQ Toggle script
    function toggleFaq(index) {
        const content = document.getElementById(`faq-content-${index}`);
        const icon = document.getElementById(`faq-icon-${index}`);
        const allContents = document.querySelectorAll('.faq-content');
        const allIcons = document.querySelectorAll('.faq-icon');

        // Close all other items
        allContents.forEach((el, idx) => {
            if (idx !== index) {
                el.style.maxHeight = null;
                allIcons[idx].textContent = '+';
                allIcons[idx].style.transform = 'rotate(0deg)';
            }
        });

        // Toggle active item
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            icon.textContent = '+';
            icon.style.transform = 'rotate(0deg)';
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            icon.textContent = '−';
            icon.style.transform = 'rotate(180deg)';
        }
    }

    // Select dynamic program helper
    function selectProgram(programName) {
        const dropdown = document.getElementById('service');
        if (dropdown) {
            for (let i = 0; i < dropdown.options.length; i++) {
                if (dropdown.options[i].value.includes(programName)) {
                    dropdown.selectedIndex = i;
                    break;
                }
            }
        }
    }
</script>
@endpush
