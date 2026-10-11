<header class="fixed w-full top-0 z-[60] bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">

            <div class="flex items-center flex-shrink-0">
                <a href="/" class="group block">
                    <img src="{{ asset('images/Logo.png') }}" alt="GEMS Logo" width="160" height="60"
                        class="h-10 sm:h-12 lg:h-15 w-auto object-contain transition-all duration-300 group-hover:scale-105"
                        style="image-rendering: -webkit-optimize-contrast; will-change: transform;">
                </a>
            </div>

            {{-- DESKTOP NAVIGATION --}}
            <nav class="hidden lg:flex items-center gap-0" data-aos="fade-down">
                @php
                    $navItems = [
                        ['name' => 'Home', 'url' => '/'],
                        ['name' => 'About', 'url' => '/about'],
                        ['name' => 'Services', 'url' => '/services'],
                        ['name' => 'Training', 'url' => '/training'],
                        ['name' => 'Team', 'url' => '/team'],
                        ['name' => 'Gallery', 'url' => '/gallery'],
                        ['name' => 'Blog', 'url' => '/blog'],
                        ['name' => 'Career', 'url' => '/career'],
                        ['name' => 'Contact', 'url' => '/contact'],
                    ];
                @endphp

                @foreach($navItems as $item)
                    <a href="{{ $item['url'] }}" class="group relative px-3 py-2 mx-1 transition-all duration-200">
                        <span class="font-medium text-gray-700 group-hover:text-[#32A8B8] transition-colors text-sm">
                            {{ $item['name'] }}
                        </span>
                        <span
                            class="absolute bottom-0 left-3 right-3 h-0.5 bg-gradient-to-r from-[#32A8B8] to-[#EA6F71] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                @endforeach
            </nav>

            {{-- DESKTOP CONTACT BUTTONS --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="tel:+917994502501"
                    class="flex items-center gap-2 bg-gray-50 hover:bg-gray-100 px-4 py-2 rounded-lg transition-colors duration-200 group">
                    <div class="w-8 h-8 rounded-full bg-[#97B41A] flex items-center justify-center">
                        <span class="text-white text-sm">📞</span>
                    </div>
                    <div class="text-left">
                        <p class="text-xs text-gray-500 leading-none">Call Now</p>
                        <p class="font-semibold text-gray-900 text-sm group-hover:text-[#97B41A]">+91 7994502501</p>
                    </div>
                </a>

                @auth
                    @if(auth()->user()->isAdmin())
                        <a href="{{ route('admin.dashboard') }}"
                            class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-2.5 rounded-lg font-semibold text-sm transition-all duration-300">
                            Dashboard
                        </a>
                    @endif
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit"
                            class="bg-gradient-to-r from-[#32A8B8] to-[#2d96a5] hover:from-[#2d96a5] hover:to-[#288492] text-white px-5 py-2.5 rounded-lg font-semibold text-sm shadow-sm hover:shadow transition-all duration-300">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-[#32A8B8] font-semibold text-sm px-4">
                        Login
                    </a>
                    <a href="/contact"
                        class="bg-gradient-to-r from-[#EA6F71] to-[#d65f61] hover:from-[#d65f61] hover:to-[#c44e50] text-white px-5 py-2.5 rounded-lg font-semibold text-sm shadow-sm hover:shadow transition-all duration-300">
                        Book Consultation
                    </a>
                @endauth
            </div>

            {{-- MOBILE MENU BUTTON --}}
            <button id="mobile-menu-button"
                class="lg:hidden relative flex flex-col items-center justify-center w-10 h-10 rounded-lg bg-[#32A8B81a] text-[#32A8B8] transition-all duration-300 focus:outline-none"
                aria-label="Toggle menu">
                <span class="sr-only">Open main menu</span>
                <div class="relative w-6 h-5 flex flex-col justify-between">
                    <span class="block w-6 h-0.5 bg-[#32A8B8] rounded-full transition-all duration-300"
                        id="bar1"></span>
                    <span class="block w-6 h-0.5 bg-[#32A8B8] rounded-full transition-all duration-300"
                        id="bar2"></span>
                    <span class="block w-6 h-0.5 bg-[#32A8B8] rounded-full transition-all duration-300"
                        id="bar3"></span>
                </div>
            </button>
        </div>

        {{-- MOBILE MENU --}}
        <div id="mobile-menu"
            class="lg:hidden fixed inset-x-0 top-16 h-0 bg-white shadow-xl overflow-hidden transition-all duration-300 ease-in-out z-[60]">
            <div class="container mx-auto px-4 py-4 pb-16">
                <div class="space-y-0">
                    @foreach($navItems as $item)
                        <a href="{{ $item['url'] }}"
                            class="flex items-center px-4 py-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 text-gray-700 hover:text-[#32A8B8] group border-b border-gray-100 last:border-0">
                            <span class="font-medium flex-1">{{ $item['name'] }}</span>
                            <span
                                class="text-gray-400 group-hover:text-[#32A8B8] transform group-hover:translate-x-1 transition-transform">→</span>
                        </a>
                    @endforeach
                </div>

                {{-- MOBILE CONTACT SECTION --}}
                <div class="mt-6 p-4 bg-gradient-to-r from-[#32A8B80d] to-[#EA6F710d] rounded-xl">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-r from-[#32A8B8] to-[#EA6F71] flex items-center justify-center flex-shrink-0">
                            <span class="text-white">📞</span>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Emergency Helpline</p>
                            <a href="tel:+917994502501"
                                class="text-base font-bold text-gray-900 hover:text-[#32A8B8] transition-colors">
                                +91 7994502501
                            </a>
                        </div>
                    </div>

                    @auth
                        @if(auth()->user()->isAdmin())
                            <a href="{{ route('admin.dashboard') }}"
                                class="block w-full text-center py-3 text-gray-700 font-semibold border border-gray-200 rounded-lg mb-2">
                                Admin Dashboard
                            </a>
                        @endif
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block w-full bg-red-50 text-red-600 text-center py-3 rounded-lg font-semibold text-sm mb-4">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="block w-full text-center py-3 text-[#32A8B8] font-semibold border border-[#32A8B8] rounded-lg mb-2">
                            Admin Login
                        </a>
                        <a href="/contact"
                            class="block w-full bg-gradient-to-r from-[#EA6F71] to-[#d65f61] text-white text-center py-3 rounded-lg font-semibold text-sm shadow hover:shadow-md transition-all duration-300">
                            Get Consultation
                        </a>
                    @endauth
                </div>

                {{-- SOCIAL LINKS --}}
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <p class="text-sm text-gray-500 mb-3 text-center">Connect with us</p>
                    <div class="flex items-center justify-center gap-3">
                        <a href="https://www.facebook.com/share/1CpQzb7gie/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer"
                            class="w-9 h-9 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 hover:bg-blue-100 transition-colors" aria-label="Visit our Facebook page">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/gemscdc?igsh=MXc2MmplZHR1aG1yNQ%3D%3D&utm_source=qr"
                            target="_blank" rel="noopener noreferrer"
                            class="w-9 h-9 rounded-full bg-pink-50 flex items-center justify-center text-pink-600 hover:bg-pink-100 transition-colors" aria-label="Visit our Instagram profile">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://wa.me/917994502501" target="_blank" rel="noopener noreferrer"
                            class="w-9 h-9 rounded-full bg-green-50 flex items-center justify-center text-green-600 hover:bg-green-100 transition-colors" aria-label="Contact us on WhatsApp">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.297-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.76.982.998-3.675-.236-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.9 6.994c-.004 5.45-4.438 9.88-9.888 9.88m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.333.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.333 11.893-11.893 0-3.18-1.24-6.162-3.495-8.411" />
                            </svg>
                        </a>
                        <a href="mailto:gemsrehab@gmail.com"
                            class="w-9 h-9 rounded-full bg-red-50 flex items-center justify-center text-red-600 hover:bg-red-100 transition-colors" aria-label="Send us an email">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    /* Mobile menu animation styles */
    .mobile-menu-open {
        height: auto !important;
        max-height: calc(100vh - 4.5rem) !important;
        overflow-y: auto;
    }

    /* Animated hamburger menu */
    #mobile-menu-button.active #bar1 {
        transform: translateY(7.5px) rotate(45deg);
    }

    #mobile-menu-button.active #bar2 {
        opacity: 0;
        transform: translateX(10px);
    }

    #mobile-menu-button.active #bar3 {
        transform: translateY(-7.5px) rotate(-45deg);
    }

    #mobile-menu-button.active {
        background-color: #A8CF451a;
        /* Soft highlight when active - using logo Lime Green */
        color: #E99D1D;
        /* Using logo Yellow */
    }

    #mobile-menu-button.active span {
        background-color: #E99D1D;
    }

    /* Smooth scroll for mobile menu */
    #mobile-menu {
        -webkit-overflow-scrolling: touch;
        border-top: 1px solid #f1f5f9;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const bars = ['bar1', 'bar2', 'bar3'].map(id => document.getElementById(id));
        const bottomCta = document.getElementById('mobile-bottom-cta');

        function setBottomCtaVisible(visible) {
            if (!bottomCta) return;
            if (visible) {
                bottomCta.classList.remove('translate-y-full', 'opacity-0', 'pointer-events-none');
            } else {
                bottomCta.classList.add('translate-y-full', 'opacity-0', 'pointer-events-none');
            }
        }

        function closeMenu() {
            mobileMenu.classList.remove('mobile-menu-open');
            mobileMenu.style.height = '0';
            menuButton.classList.remove('active');
            setBottomCtaVisible(true);
        }

        function openMenu() {
            mobileMenu.classList.add('mobile-menu-open');
            mobileMenu.style.height = 'calc(100vh - 4rem)';
            menuButton.classList.add('active');
            setBottomCtaVisible(false);
        }

        menuButton.addEventListener('click', function () {
            const isOpen = mobileMenu.classList.contains('mobile-menu-open');
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        // Close menu when clicking on a link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Close menu when clicking outside
        document.addEventListener('click', function (event) {
            if (!menuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                if (mobileMenu.classList.contains('mobile-menu-open')) {
                    closeMenu();
                }
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                if (mobileMenu.classList.contains('mobile-menu-open')) {
                    closeMenu();
                }
            }
        });
    });
</script>