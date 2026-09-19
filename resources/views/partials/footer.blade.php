<footer class="bg-gradient-to-br from-gray-900 to-slate-950 text-gray-300 overflow-hidden">
    {{-- Wave divider --}}
    <div class="relative -top-1">
        <svg class="w-full h-16" viewBox="0 0 1440 120" fill="none" preserveAspectRatio="none">
            <path
                d="M0 120L48 110C96 100 192 80 288 70C384 60 480 60 576 70C672 80 768 100 864 100C960 100 1056 80 1152 60C1248 40 1344 20 1392 10L1440 0V120H1392C1344 120 1248 120 1152 120C1056 120 960 120 864 120C768 120 672 120 576 120C480 120 384 120 288 120C192 120 96 120 48 120H0Z"
                class="fill-gray-900" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        {{-- Newsletter section --}}
        <div class="relative bg-gradient-to-r from-[#32A8B826] to-[#EA6F7126] backdrop-blur-sm rounded-2xl p-5 sm:p-8 mb-10 sm:mb-16 border border-[#32A8B833]"
            data-aos="fade-up">
            <div
                class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-[#32A8B8] to-[#EA6F71] text-white px-4 sm:px-6 py-1.5 sm:py-2 rounded-full font-semibold text-xs sm:text-sm whitespace-nowrap">
                Stay Updated
            </div>

            <div class="grid lg:grid-cols-2 gap-6 sm:gap-8 items-center mt-2 sm:mt-0">
                <div>
                    <p class="text-xl sm:text-2xl font-bold text-white mb-2 sm:mb-3">Subscribe to Our Newsletter</p>
                    <p class="text-gray-300 text-sm sm:text-base">Get the latest updates on child development, parenting tips, and center
                        news.</p>
                </div>

                <form id="newsletter-form" class="relative">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Your email address" required
                            class="flex-1 bg-white/10 border border-gray-600 text-white placeholder-gray-400 rounded-xl px-4 sm:px-5 py-3 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-[#32A8B8] focus:border-transparent">
                        <button type="submit"
                            class="bg-gradient-to-r from-[#32A8B8] to-[#2d96a5] hover:from-[#2d96a5] hover:to-[#288492] text-white font-semibold px-6 py-3 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center gap-2 text-sm sm:text-base">
                            <span>Subscribe</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                    <p id="form-message" class="text-sm mt-3 text-gray-400 hidden">Thank you for subscribing!</p>
                </form>
            </div>
        </div>

        {{-- Main footer content --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 sm:gap-10 lg:gap-8 mb-10 sm:mb-16">
            {{-- Brand & Description --}}
            <div class="lg:col-span-2" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center gap-3 mb-6">
                    <img src="{{ asset('images/Logo.png') }}" alt="GEMS Child Development Centre Logo" class="h-20 w-auto">
                </div>
                <p class="text-gray-300 leading-relaxed mb-6 max-w-lg">
                    Kerala's premier child development center providing comprehensive therapies,
                    special education, and holistic care for children with developmental needs.
                    Empowering children to reach their full potential .
                </p>

                {{-- Social Media --}}
                <div>
                    <p class="text-white font-medium mb-4">Follow Us</p>
                    <div class="flex items-center gap-3">
                        <a href="https://www.facebook.com/share/1CpQzb7gie/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer"
                            class="w-10 h-10 rounded-full bg-gray-800 hover:bg-blue-600 flex items-center justify-center text-gray-300 hover:text-white transition-all duration-300 hover:scale-110">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/gemscdc?igsh=MXc2MmplZHR1aG1yNQ%3D%3D&utm_source=qr"
                            target="_blank" rel="noopener noreferrer"
                            class="w-10 h-10 rounded-full bg-gray-800 hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-600 flex items-center justify-center text-gray-300 hover:text-white transition-all duration-300 hover:scale-110">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer"
                            class="w-10 h-10 rounded-full bg-gray-800 hover:bg-red-600 flex items-center justify-center text-gray-300 hover:text-white transition-all duration-300 hover:scale-110">
                            <span class="sr-only">YouTube</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="https://wa.me/917994502501" target="_blank" rel="noopener noreferrer"
                            class="w-10 h-10 rounded-full bg-gray-800 hover:bg-green-600 flex items-center justify-center text-gray-300 hover:text-white transition-all duration-300 hover:scale-110">
                            <span class="sr-only">WhatsApp</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.297-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.76.982.998-3.675-.236-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.9 6.994c-.004 5.45-4.438 9.88-9.888 9.88m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.333.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.333 11.893-11.893 0-3.18-1.24-6.162-3.495-8.411" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Quick Links --}}
            <div data-aos="fade-up" data-aos-delay="200">
                <p class="text-white font-bold text-lg mb-6 pb-2 border-b border-gray-700">Quick Links</p>
                <ul class="space-y-3">
                    @php
                        $quickLinks = [
                            ['name' => 'Home', 'url' => '/', 'icon' => '🏠'],
                            ['name' => 'About Us', 'url' => '/about', 'icon' => '👥'],
                            ['name' => 'Our Team', 'url' => '/team', 'icon' => '🤝'],
                            ['name' => 'Services', 'url' => '/services', 'icon' => '🎯'],
                            ['name' => 'Training', 'url' => '/training', 'icon' => '🎓'],
                            ['name' => 'Gallery', 'url' => '/gallery', 'icon' => '🖼️'],
                            ['name' => 'Careers', 'url' => '/career', 'icon' => '💼'],
                            ['name' => 'Contact Us', 'url' => '/contact', 'icon' => '📞'],
                        ];
                    @endphp

                    @foreach($quickLinks as $link)
                        <li>
                            <a href="{{ $link['url'] }}"
                                class="flex items-center gap-2 text-gray-300 hover:text-[#32A8B8] transition-colors group">
                                <span class="text-sm">{{ $link['icon'] }}</span>
                                <span>{{ $link['name'] }}</span>
                                <span
                                    class="opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300">→</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Services --}}
            <div data-aos="fade-up" data-aos-delay="300">
                <p class="text-white font-bold text-lg mb-6 pb-2 border-b border-gray-700">Our Services</p>
                <ul class="space-y-3">
                    @php
                        $services = [
                            'Speech  Therapy',
                            'Occupational Therapy',
                            'Special Education',
                            'Behavioral Therapy',
                            'Psychotherapy & Counseling',
                            'Psychological Assessment',
                        ];
                    @endphp

                    @foreach($services as $service)
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#32A8B8]"></span>
                            <span class="text-gray-300">{{ $service }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact Info --}}
            <div data-aos="fade-up" data-aos-delay="400">
                <p class="text-white font-bold text-lg mb-6 pb-2 border-b border-gray-700">Contact Info</p>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-[#32A8B833] flex items-center justify-center flex-shrink-0">
                            <span class="text-[#32A8B8]">📍</span>
                        </div>
                        <div>
                            <p class="text-white font-medium">Our Location</p>
                            <p class="text-gray-400 text-sm">Pallipatu Ayyapa Temple Road , Civil Station, Kozhikode,
                                673020</p>
                        </div>
                    </li>

                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-[#EA6F7133] flex items-center justify-center flex-shrink-0">
                            <span class="text-[#EA6F71]">📞</span>
                        </div>
                        <div>
                            <p class="text-white font-medium">Call Us</p>
                            <a href="tel:+917994502501"
                                class="text-gray-400 text-sm hover:text-[#32A8B8] transition-colors block">
                                +91 7994502501
                            </a>
                            <a href="tel:+918086497941"
                                class="text-gray-400 text-sm hover:text-[#32A8B8] transition-colors block">
                                +91 8086497941
                            </a>
                        </div>
                    </li>

                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-[#3b82f633] flex items-center justify-center flex-shrink-0">
                            <span class="text-[#3b82f6]">✉️</span>
                        </div>
                        <div>
                            <p class="text-white font-medium">Email</p>
                            <a href="mailto:gemsrehab@gmail.com"
                                class="text-gray-400 text-sm hover:text-[#32A8B8] transition-colors">
                                gemsrehab@gmail.com
                            </a>
                        </div>
                    </li>

                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-[#E99D1D33] flex items-center justify-center flex-shrink-0">
                            <span class="text-[#E99D1D]">🕒</span>
                        </div>
                        <div>
                            <p class="text-white font-medium">Working Hours</p>
                            <p class="text-gray-400 text-sm">Mon - Sat: 9 AM - 7 PM</p>
                            <p class="text-gray-400 text-sm">Sunday: Emergency Only</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="pt-8 border-t border-gray-800">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-gray-400 text-sm text-center md:text-left">
                    © {{ date('Y') }} GEMS Child Development Centre. All rights reserved.
                </div>

                <div class="flex items-center gap-6 text-sm text-gray-400">
                    <a href="/privacy-policy" class="hover:text-[#32A8B8] transition-colors">Privacy Policy</a>
                    <a href="/terms" class="hover:text-[#32A8B8] transition-colors">Terms of Service</a>
                    
                </div>
            </div>

            {{-- Accreditation badges --}}
            <div class="mt-8 flex flex-wrap items-center justify-center gap-6 opacity-75">
                <div class="text-center">
                    <div class="text-2xl">🏆</div>
                    <p class="text-xs mt-1">ISO Certified</p>
                </div>
                <div class="text-center">
                    <div class="text-2xl">⭐</div>
                    <p class="text-xs mt-1">Govt. Recognized</p>
                </div>
                <div class="text-center">
                    <div class="text-2xl">🩺</div>
                    <p class="text-xs mt-1">RCI Approved</p>
                </div>
                <div class="text-center">
                    <div class="text-2xl">❤️</div>
                    <p class="text-xs mt-1">Child Safe</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Floating CTA for mobile --}}
    <div id="mobile-bottom-cta"
        class="lg:hidden fixed z-30 bottom-0 left-0 right-0 bg-gradient-to-r from-[#32A8B8] to-[#EA6F71] text-white p-4 shadow-lg transition-all duration-300">
        <div class="flex items-center justify-between max-w-7xl mx-auto px-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                    <span>📞</span>
                </div>
                <div>
                    <p class="text-sm font-medium">Need Help?</p>
                    <a href="tel:+917994502501" class="text-lg font-bold">Call Now</a>
                </div>
            </div>
            <a href="/contact"
                class="bg-white text-[#32A8B8] font-semibold px-4 py-2 rounded-lg hover:bg-gray-100 transition-colors">
                Contact
            </a>
        </div>
    </div>
</footer>

<style>
    /* Wave animation */
    @keyframes wave {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* Floating animation */
    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Newsletter form submission
        const newsletterForm = document.getElementById('newsletter-form');
        const formMessage = document.getElementById('form-message');

        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function (e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;

                // Here you would typically send this to your backend
                // For now, show success message
                formMessage.textContent = 'Thank you for subscribing to our newsletter!';
                formMessage.classList.remove('hidden');
                formMessage.classList.add('text-green-400');

                // Reset form
                this.reset();

                // Hide message after 5 seconds
                setTimeout(() => {
                    formMessage.classList.add('hidden');
                }, 5000);
            });
        }

        // Smooth scroll for anchor links in footer
        document.querySelectorAll('footer a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
</script>