<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#32A8B8">

    <title>@yield('title', 'GEMS | Best Child Development Centre in Kerala')</title>

    {{-- SEO Meta Tags --}}
    <meta name="description"
        content="@yield('meta_description', 'GEMS Child Development Centre – Kerala\'s premier center for child development therapies, special education, and holistic care. 10+ years of experience helping children thrive.')">
    <meta name="keywords"
        content="child development, autism therapy, speech therapy, occupational therapy, special education, Kerala, Kochi">
    <meta name="author" content="GEMS Child Development Centre">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title', 'GEMS | Best Child Development Centre in Kerala')">
    <meta property="og:description"
        content="@yield('og_description', 'Comprehensive child development therapies and special education programs in Kerala.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
    <meta property="og:site_name" content="GEMS Child Development Centre">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'GEMS | Best Child Development Centre in Kerala')">
    <meta name="twitter:description" content="Kerala's premier child development center with 10+ years of experience.">

    {{-- Structured Data (Schema.org / Google Rich Results) --}}
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@type": ["MedicalClinic", "LocalBusiness"],
      "@id": "{{ url('/') }}#clinic",
      "name": "GEMS Child Development Centre",
      "alternateName": "GEMS CDC",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/Logo.png') }}",
      "image": "{{ asset('images/image9.jpg') }}",
      "description": "Premier child development centre in Kozhikode, Kerala providing specialized pediatric therapies, autism support, speech therapy, occupational therapy, and special education.",
      "telephone": "+917994502501",
      "email": "gemsrehab@gmail.com",
      "priceRange": "$$",
      "isAcceptingNewPatients": "True",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Pallipatu Ayyapa Temple Road, Civil Station",
        "addressLocality": "Kozhikode",
        "addressRegion": "Kerala",
        "postalCode": "673020",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 11.287588,
        "longitude": 75.790630
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          "opens": "09:00",
          "closes": "19:00"
        }
      ],
      "areaServed": [
        {
          "@type": "City",
          "name": "Kozhikode"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Kerala"
        }
      ],
      "sameAs": [
        "https://www.facebook.com/share/1CpQzb7gie/?mibextid=wwXIfr",
        "https://www.instagram.com/gemscdc?igsh=MXc2MmplZHR1aG1yNQ%3D%3D&utm_source=qr"
      ],
      "medicalSpecialty": [
        "Pediatrics",
        "SpeechTherapy",
        "OccupationalTherapy",
        "Psychology"
      ]
    }
    </script>

    {{-- Favicon & Apple Touch Icons --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/Logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/Logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/Logo.png') }}">

    {{-- Preload critical assets --}}
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Fonts --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Dancing+Script:wght@600&family=Fredoka:wght@300..700&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">

    {{-- VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Custom Styles --}}
    <style>
        :root {
            --primary: #32A8B8;
            --secondary: #EA6F71;
            --accent: #E99D1D;
            --success: #A8CF45;
            --light: #f0fdfa;
            --dark: #0f172a;
        }

        body {
            font-feature-settings: "ss01", "ss02", "cv01", "cv02";
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .font-display {
            font-family: 'Poppins', system-ui, -apple-system, sans-serif;
        }

        .font-handwriting {
            font-family: 'Dancing Script', cursive;
        }

        .font-body {
            font-family: 'Poppins', system-ui, -apple-system, sans-serif;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary);
        }

        /* Loading animation */
        .loading-spinner {
            display: inline-block;
            width: 80px;
            height: 80px;
        }

        .loading-spinner:after {
            content: " ";
            display: block;
            width: 64px;
            height: 64px;
            margin: 8px;
            border-radius: 50%;
            border: 6px solid var(--primary);
            border-color: var(--primary) transparent var(--primary) transparent;
            animation: loading-spinner 1.2s linear infinite;
        }

        @keyframes loading-spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Custom Cursor Styling */
        .cursor-dot {
            width: 8px;
            height: 8px;
            background: var(--primary);
        }

        .cursor-outline {
            width: 30px;
            height: 30px;
            border: 2px solid var(--primary);
        }

        .cursor-dot,
        .cursor-outline {
            position: fixed;
            top: 0;
            left: 0;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: 10000;
            pointer-events: none;
            transition: transform 0.15s ease-out, width 0.3s ease, height 0.3s ease, background 0.3s ease, border-color 0.3s ease;
        }

        .cursor-outline.hovered {
            width: 50px;
            height: 50px;
            background: rgba(50, 168, 184, 0.1);
            border-color: var(--secondary);
        }

        .bubble-trail {
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            border-radius: 50%;
            animation: bubble-fade 1s ease-out forwards;
        }

        @keyframes bubble-fade {
            0% {
                transform: scale(1) translateY(0);
                opacity: 0.6;
            }

            100% {
                transform: scale(0) translateY(-20px);
                opacity: 0;
            }
        }

        @media (max-width: 1024px) {

            .cursor-dot,
            .cursor-outline {
                display: none;
            }
        }
    </style>

    @stack('head')
</head>

<body class="bg-white text-gray-800 font-body antialiased overflow-x-hidden">
    {{-- Custom Cursor --}}
    <div class="cursor-dot" id="cursor-dot"></div>
    <div class="cursor-outline" id="cursor-outline"></div>

    {{-- Loading overlay --}}
    <div id="loading-overlay"
        class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-300">
        <div class="text-center">
            <div class="loading-spinner"></div>
            <p class="mt-4 text-gray-600 font-medium">Loading GEMS...</p>
        </div>
    </div>

    {{-- Skip to main content --}}
    <a href="#main-content"
        class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-primary text-white px-4 py-2 rounded-lg z-50">
        Skip to main content
    </a>

    {{-- Progress bar --}}
    <div class="fixed top-0 left-0 w-full h-1 bg-gradient-to-r from-[#32A8B8] to-[#EA6F71] z-50 transform origin-left scale-x-0 transition-transform duration-300"
        id="progress-bar"></div>

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- PAGE CONTENT --}}
    <main id="main-content" class="overflow-x-hidden min-h-screen">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')

    {{-- Floating Action Buttons --}}
    <div class="fixed bottom-6 right-4 sm:bottom-6 sm:right-6 z-40 flex flex-col items-end gap-2.5 sm:gap-3">
        {{-- WhatsApp --}}
        <a href="https://wa.me/917994502501?text=Hello%20GEMS%2C%20I%20need%20information%20about%20your%20services"
            target="_blank" rel="noopener noreferrer" style="background-color:#25D366"
            class="group flex items-center gap-2 sm:gap-3 text-white p-3 sm:p-4 rounded-full shadow-xl transition-all duration-300 hover:shadow-2xl hover:scale-105"
            aria-label="Chat on WhatsApp">

            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
            </svg>

            <span class="hidden sm:group-hover:inline-block font-medium pr-2 text-sm">
                Chat Now
            </span>
        </a>

        {{-- Phone Call --}}
        <a href="tel:+917994502501" style="background-color:#EA6F71"
            class="group flex items-center gap-2 sm:gap-3 hover:bg-[#e45f62] text-white p-3 sm:p-4 rounded-full shadow-xl transition-all duration-300 hover:shadow-2xl hover:scale-105"
            aria-label="Call GEMS CDC">

            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>

            <span class="hidden sm:group-hover:inline-block font-medium pr-2 text-sm">Call Us</span>
        </a>

        {{-- Back to top --}}
        <button onclick="scrollToTop()" id="back-to-top" style="background-color:#32A8B8"
            class="mb-20 sm:mb-0 hover:opacity-100 text-white p-3 sm:p-4 rounded-full shadow-xl transition-all duration-300 opacity-0 translate-y-4 hover:shadow-2xl hover:scale-105"
            aria-label="Back to top">

            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>
    </div>

    {{-- AOS Animation --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100,
            delay: 100,
            mirror: false,
            anchorPlacement: 'top-bottom',
        });

        // DOM ready
        document.addEventListener('DOMContentLoaded', function () {
            // Hide loading overlay
            setTimeout(() => {
                document.getElementById('loading-overlay').style.opacity = '0';
                setTimeout(() => {
                    document.getElementById('loading-overlay').style.display = 'none';
                }, 300);
            }, 800);

            // Scroll progress bar
            const progressBar = document.getElementById('progress-bar');
            const backToTop = document.getElementById('back-to-top');

            window.addEventListener('scroll', () => {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;

                progressBar.style.transform = `scaleX(${scrolled / 100})`;

                // Show/hide back to top button
                if (winScroll > 300) {
                    backToTop.style.opacity = '1';
                    backToTop.style.transform = 'translateY(0)';
                } else {
                    backToTop.style.opacity = '0';
                    backToTop.style.transform = 'translateY(4px)';
                }
            });

            // Custom Cursor Logic
            const cursorDot = document.getElementById('cursor-dot');
            const cursorOutline = document.getElementById('cursor-outline');
            const interactiveElements = 'a, button, input, textarea, [role="button"], .interactive';

            window.addEventListener('mousemove', (e) => {
                const posX = e.clientX;
                const posY = e.clientY;

                // Move dot immediately
                cursorDot.style.left = `${posX}px`;
                cursorDot.style.top = `${posY}px`;

                // Smooth outline following
                cursorOutline.animate({
                    left: `${posX}px`,
                    top: `${posY}px`
                }, { duration: 500, fill: "forwards" });

                // Create trail bubbles occasionally
                if (Math.random() > 0.8) {
                    createBubble(posX, posY);
                }
            });

            function createBubble(x, y) {
                const colors = ['#32A8B8', '#EA6F71', '#E99D1D', '#A8CF45'];
                const bubble = document.createElement('div');
                bubble.className = 'bubble-trail';
                const size = Math.random() * 15 + 5;
                bubble.style.width = `${size}px`;
                bubble.style.height = `${size}px`;
                bubble.style.left = `${x}px`;
                bubble.style.top = `${y}px`;
                bubble.style.background = colors[Math.floor(Math.random() * colors.length)];
                document.body.appendChild(bubble);

                setTimeout(() => {
                    bubble.remove();
                }, 1000);
            }

            // Hover effects
            document.querySelectorAll(interactiveElements).forEach(el => {
                el.addEventListener('mouseenter', () => {
                    cursorOutline.classList.add('hovered');
                    cursorDot.style.transform = 'translate(-50%, -50%) scale(0.5)';
                });
                el.addEventListener('mouseleave', () => {
                    cursorOutline.classList.remove('hovered');
                    cursorDot.style.transform = 'translate(-50%, -50%) scale(1)';
                });
            });

            // Click effect
            window.addEventListener('mousedown', (e) => {
                for (let i = 0; i < 8; i++) {
                    const bubble = document.createElement('div');
                    bubble.className = 'bubble-trail';
                    const size = Math.random() * 10 + 2;
                    bubble.style.width = `${size}px`;
                    bubble.style.height = `${size}px`;
                    bubble.style.left = `${e.clientX}px`;
                    bubble.style.top = `${e.clientY}px`;
                    bubble.style.background = '#32A8B8';

                    const angle = Math.random() * Math.PI * 2;
                    const velocity = Math.random() * 50 + 20;
                    const tx = Math.cos(angle) * velocity;
                    const ty = Math.sin(angle) * velocity;

                    bubble.animate([
                        { transform: 'translate(-50%, -50%) scale(1)', opacity: 1 },
                        { transform: `translate(${tx}px, ${ty}px) scale(0)`, opacity: 0 }
                    ], { duration: 600, easing: 'ease-out' });

                    document.body.appendChild(bubble);
                    setTimeout(() => bubble.remove(), 600);
                }
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if (href !== '#') {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });
        });

        // Scroll to top function
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

    {{-- Additional scripts --}}
    @stack('scripts')

    {{-- Analytics (example) --}}
    @if(env('APP_ENV') === 'production')
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXX-X"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', 'UA-XXXXXXX-X');
        </script>
    @endif
</body>

</html>