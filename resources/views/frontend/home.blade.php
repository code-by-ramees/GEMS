@extends('layouts.app')

@section('title', 'Child Development Centre in Kozhikode, Kerala | GEMS')
@section('meta_description', "GEMS Child Development Centre in Kozhikode, Kerala offers expert pediatric therapies, autism support, speech therapy, and holistic care for your child.")

@section('content')

        {{-- ================= HERO SECTION ================= --}}
        @push('head')
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
            <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Outfit:wght@100..900&display=swap"
                rel="stylesheet">
            <style>
                :root {
                    --primary-teal: #006684;
                    --secondary-orange: #e99e5a;
                    --text-dark: #1a1a1a;
                    --soft-bg: #f8fafc;
                }

                body {
                    font-family: 'Outfit', sans-serif;
                }

                .hero-section {
                    background-color: #ffffff;
                    overflow: hidden;
                    position: relative;
                }

                .hero-bg-doodles {
                    position: absolute;
                    inset: 0;
                    opacity: 0.05;
                    pointer-events: none;
                    z-index: 1;
                    background-image: url("data:image/svg+xml,%3Csvg width='400' height='400' viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%2332A8B8' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M50 50 Q 70 30 90 50 T 130 50'/%3E%3Ccircle cx='300' cy='100' r='15'/%3E%3Cpath d='M350 300 l 15 15 m -15 0 l 15 -15'/%3E%3Crect x='100' y='300' width='25' height='25' rx='5'/%3E%3Cpath d='M200 150 c 15 0 15 20 30 20 s 15 -20 30 -20'/%3E%3Ccircle cx='50' cy='350' r='5' fill='%2332A8B8'/%3E%3Cpath d='M300 50 l 20 0 m -10 -10 l 0 20'/%3E%3Cpath d='M150 100 q 10 -10 20 0 t 20 0'/%3E%3C/g%3E%3C/svg%3E");
                    background-size: 300px;
                }

                /* CHILD FRIENDLY BACKGROUND ELEMENTS */

                /* 1️⃣ Outline Illustration Pattern */
                .hero-pattern-lightbulb {
                    position: absolute;
                    inset: 0;
                    opacity: 0.04;
                    pointer-events: none;
                    z-index: 1;
                    background-image: url("data:image/svg+xml,%3Csvg width='300' height='300' viewBox='0 0 300 300' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%2332A8B8' stroke-width='1.5'%3E%3Cpath d='M150 60c-20 0-35 15-35 35 0 15 10 25 15 30v15h40v-15c5-5 15-15 15-30 0-20-15-35-35-35z'/%3E%3Cline x1='140' y1='140' x2='160' y2='140'/%3E%3Cline x1='140' y1='145' x2='160' y2='145'/%3E%3C/g%3E%3C/svg%3E");
                    background-size: 220px;
                }

                /* 2️⃣ Abstract Doodle Lines */
                .hero-doodle-lines {
                    position: absolute;
                    inset: 0;
                    opacity: 0.06;
                    pointer-events: none;
                    z-index: 2;
                    background-image: url("data:image/svg+xml,%3Csvg width='300' height='300' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 100 Q60 60 100 100 T180 100 T260 100' stroke='%23EA6F71' stroke-width='2' fill='none' stroke-dasharray='6 6'/%3E%3C/svg%3E");
                    background-size: 250px;
                }

                /* 3️⃣ Soft Geometric Shapes */
                .hero-geo-shapes span {
                    position: absolute;
                    border-radius: 50%;
                    opacity: 0.15;
                    animation: floatShapes 8s infinite ease-in-out;
                }

                .hero-geo-shapes .circle1 {
                    width: 120px;
                    height: 120px;
                    background: #32A8B8;
                    top: 15%;
                    left: 5%;
                }

                .hero-geo-shapes .circle2 {
                    width: 80px;
                    height: 80px;
                    background: #EA6F71;
                    bottom: 20%;
                    left: 10%;
                }

                .hero-geo-shapes .circle3 {
                    width: 60px;
                    height: 60px;
                    background: #97B41A;
                    top: 25%;
                    right: 12%;
                }

                .hero-geo-shapes .circle4 {
                    width: 100px;
                    height: 100px;
                    background: #E99D1D;
                    bottom: 10%;
                    right: 8%;
                }

                /* 4️⃣ Large Gradient Blob */
                .hero-gradient-blob {
                    position: absolute;
                    width: 500px;
                    height: 500px;
                    top: -120px;
                    right: -150px;
                    background: radial-gradient(circle at center, rgba(50, 168, 184, 0.25), transparent 70%);
                    border-radius: 50%;
                    filter: blur(80px);
                    z-index: 0;
                }

                /* floating animation */

                @keyframes floatShapes {

                    0%,
                    100% {
                        transform: translateY(0);
                    }

                    50% {
                        transform: translateY(-20px);
                    }
                }

                .floating-decoration {
                    position: absolute;
                    pointer-events: none;
                    z-index: 15;
                    animation: floatAnim 6s infinite ease-in-out;
                }

                @keyframes floatAnim {

                    0%,
                    100% {
                        transform: translateY(0) rotate(0deg);
                    }

                    50% {
                        transform: translateY(-20px) rotate(5deg);
                    }
                }

                .decoration-pencil {
                    top: 15%;
                    left: 5%;
                    width: 80px;
                    transform: rotate(-15deg);
                }

                .decoration-plane {
                    bottom: 25%;
                    right: 45%;
                    width: 60px;
                    animation-delay: -2s;
                }

                .decoration-dots {
                    top: 40%;
                    right: 10%;
                    width: 100px;
                    opacity: 0.2;
                }

                .accent-dot {
                    position: absolute;
                    border-radius: 50%;
                    z-index: 10;
                    animation: floatAnim 8s infinite ease-in-out;
                }

                .dot-teal {
                    background: #32A8B8;
                    width: 12px;
                    height: 12px;
                    top: 20%;
                    left: 15%;
                    animation-delay: -1s;
                }

                .dot-coral {
                    background: #EA6F71;
                    width: 15px;
                    height: 15px;
                    top: 70%;
                    left: 10%;
                    animation-delay: -3s;
                }

                .dot-lime {
                    background: #97B41A;
                    width: 10px;
                    height: 10px;
                    top: 15%;
                    right: 20%;
                    animation-delay: -5s;
                }

                .dot-orange {
                    background: #E99D1D;
                    width: 14px;
                    height: 14px;
                    top: 60%;
                    right: 15%;
                    animation-delay: -2s;
                }

                .sparkle {
                    position: absolute;
                    width: 15px;
                    height: 15px;
                    background: #FFD700;
                    clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
                    z-index: 10;
                    animation: pulseSparkle 4s infinite ease-in-out;
                }

                @keyframes pulseSparkle {

                    0%,
                    100% {
                        transform: scale(1) rotate(0deg);
                        opacity: 0.8;
                    }

                    50% {
                        transform: scale(1.5) rotate(180deg);
                        opacity: 1;
                    }
                }

                .hero-title {
                    font-family: 'Fredoka', sans-serif;
                    color: #32A8B8;
                    font-weight: 700;
                    line-height: 1.1;
                }

                .hero-description {
                    font-family: 'Quicksand', sans-serif;
                    font-weight: 500;
                }

                @media (max-width: 1023px) {
                    .hero-section {
                        background: #ffffff;
                        padding: 0 !important;
                        min-height: 100vh;
                        position: relative;
                        overflow: hidden;
                    }

                    .hero-section .swiper-slide {
                        min-height: 100vh;
                        display: flex;
                        flex-direction: column;
                        justify-content: flex-start;
                        padding-top: 2rem;
                    }

                    .mobile-hero-image-container {
                        width: 80%;
                        max-width: 320px;
                        aspect-ratio: 1;
                        margin: 0 auto;
                        position: relative;
                        z-index: 5;
                    }

                    .mobile-organic-circle {
                        width: 100%;
                        height: 100%;
                        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
                        overflow: hidden;
                        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                        border: 8px solid white;
                        position: relative;
                    }

                    .mobile-organic-circle img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }

                    /* Circular border pattern background */
                    .mobile-hero-image-container::before {
                        content: '';
                        position: absolute;
                        inset: -15px;
                        border: 2px dashed #EA6F71;
                        border-radius: 40% 60% 60% 40% / 40% 40% 60% 60%;
                        opacity: 0.3;
                        animation: rotate 20s linear infinite;
                    }

                    @keyframes rotate {
                        from {
                            transform: rotate(0deg);
                        }

                        to {
                            transform: rotate(360deg);
                        }
                    }

                    .mobile-content-card {
                        padding: 2.5rem 1.5rem;
                        text-align: left;
                        width: 100%;
                        background: white;
                        margin-top: 2rem;
                        border-radius: 24px;
                        position: relative;
                        z-index: 10;
                    }

                    .mobile-subheading {
                        font-family: 'Quicksand', sans-serif;
                        color: #EA6F71;
                        font-weight: 700;
                        font-size: 1.25rem;
                        margin-bottom: 0.5rem;
                        display: block;
                    }

                    .hero-title {
                        font-family: 'Fredoka', sans-serif;
                        font-size: 2.5rem !important;
                        line-height: 1.2;
                        color: #1a365d !important;
                        font-weight: 700;
                        margin-bottom: 1.5rem;
                    }

                    .hero-description {
                        font-family: 'Quicksand', sans-serif;
                        font-size: 1rem !important;
                        color: #4a5568 !important;
                        line-height: 1.6;
                        margin-bottom: 2rem;
                    }

                }

                .btn-orange {
                    font-family: 'Fredoka', sans-serif;
                    background-color: var(--secondary-orange);
                    color: white;
                    padding: 1rem 2.5rem;
                    border-radius: 9999px;
                    font-weight: 600;
                    transition: all 0.3s ease;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                }

                .btn-orange:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 10px 20px rgba(233, 158, 90, 0.3);
                    background-color: #d88d4a;
                }

                .btn-custom-teal {
                    font-family: 'Fredoka', sans-serif;
                    background-color: #32A8B8;
                    color: white;
                    padding: 1rem 2.5rem;
                    border-radius: 9999px;
                    font-weight: 600;
                    transition: all 0.3s ease;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                }

                .btn-custom-teal:hover,
                .btn-custom-teal:active {
                    transform: translateY(-2px);
                    box-shadow: 0 10px 20px rgba(234, 111, 113, 0.3);
                    background-color: #EA6F71;
                }

                .btn-custom-lime {
                    font-family: 'Fredoka', sans-serif;
                    background-color: #97B41A;
                    color: white;
                    padding: 1rem 2.5rem;
                    border-radius: 9999px;
                    font-weight: 600;
                    transition: all 0.3s ease;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                }

                .btn-custom-lime:hover,
                .btn-custom-lime:active {
                    transform: translateY(-2px);
                    box-shadow: 0 10px 20px rgba(233, 157, 29, 0.3);
                    background-color: #E99D1D;
                }

                .btn-custom-coral {
                    font-family: 'Fredoka', sans-serif;
                    background-color: #EA6F71;
                    color: white;
                    padding: 1rem 2.5rem;
                    border-radius: 9999px;
                    font-weight: 600;
                    transition: all 0.3s ease;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                }

                .btn-custom-coral:hover,
                .btn-custom-coral:active {
                    transform: translateY(-2px);
                    box-shadow: 0 10px 20px rgba(151, 180, 26, 0.3);
                    background-color: #97B41A;
                }

                .organic-shape-container {
                    position: relative;
                    z-index: 1;
                }

                .organic-image-mask {
                    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
                    overflow: hidden;
                    width: 100%;
                    height: 100%;
                    min-height: 500px;
                    object-fit: cover;
                    background: #fff;
                    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                }

                .dept-menu-card {
                    background: rgba(255, 255, 255, 0.95);
                    backdrop-filter: blur(10px);
                    border-radius: 12px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                    border: 1px solid rgba(255, 255, 255, 0.5);
                    width: 320px;
                    position: absolute;
                    top: 20px;
                    left: -100px;
                    z-index: 50;
                }

                @media (max-width: 1024px) {
                    .dept-menu-card {
                        position: static;
                        width: 100%;
                        margin-bottom: 2rem;
                        left: 0;
                    }

                    .organic-image-mask {
                        min-height: 350px;
                        border-radius: 40px;
                        margin-top: 2rem;
                    }

                    .organic-shape-container {
                        padding: 0 10px;
                    }
                }

                .dept-item {
                    padding: 0.85rem 1.25rem;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    color: var(--primary-teal);
                    font-size: 0.95rem;
                    font-weight: 500;
                    border-bottom: 1px solid #f1f5f9;
                    transition: background 0.2s;
                    cursor: pointer;
                }

                .dept-item:last-child {
                    border-bottom: none;
                }

                .dept-item:hover {
                    background: #f8fafc;
                }

                .dept-item.active {
                    color: var(--secondary-orange);
                }

                .sub-menu-card {
                    background: white;
                    border-radius: 12px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                    position: absolute;
                    left: 102%;
                    top: 0;
                    width: 240px;
                    padding: 1rem;
                    display: none;
                }

                .dept-item:hover .sub-menu-card {
                    display: block;
                }

                .sub-menu-item {
                    padding: 0.5rem 0;
                    color: #4b5563;
                    font-size: 0.9rem;
                    transition: color 0.2s;
                }

                .sub-menu-item:hover {
                    color: var(--primary-teal);
                }

                .swiper-pagination-hero {
                    position: absolute;
                    bottom: 40px !important;
                    left: 0 !important;
                    text-align: left !important;
                }

                .swiper-pagination-bullet {
                    width: 12px;
                    height: 12px;
                    background: var(--primary-teal);
                    opacity: 0.2;
                }

                .swiper-pagination-bullet-active {
                    opacity: 1;
                    width: 30px;
                    border-radius: 6px;
                }

                @media (max-width: 1023px) {
                    .hero-section {
                        background: linear-gradient(180deg, #f0f9ff 0%, #ffffff 100%);
                    }

                    .swiper-pagination-hero {
                        left: 0 !important;
                        right: 0 !important;
                        text-align: center !important;
                        bottom: 20px !important;
                    }
                }

                /* Feature strip modern lift */
                .feature-strip {
                    position: relative;
                    z-index: 5;
                }

                .vision-mission-band {
                    background: linear-gradient(180deg, #ffffff 0%, #f7fbfc 100%);
                    position: relative;
                    overflow: hidden;
                }

                .vision-mission-card {
                    background: rgba(255, 255, 255, 0.92);
                    border: 1px solid rgba(50, 168, 184, 0.14);
                    border-radius: 8px;
                    box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
                    padding: 1.5rem;
                    height: 100%;
                }

                .vision-mission-label {
                    color: #EA6F71;
                    font-family: 'Fredoka', sans-serif;
                    font-size: 0.9rem;
                    font-weight: 700;
                    letter-spacing: 0.08em;
                    text-transform: uppercase;
                    margin-bottom: 0.65rem;
                }

                .vision-mission-title {
                    color: #1a2b4b;
                    font-family: 'Fredoka', sans-serif;
                    font-size: 1.75rem;
                    font-weight: 700;
                    line-height: 1.15;
                    margin-bottom: 0.8rem;
                }

                .vision-mission-text {
                    color: #4b5563;
                    font-size: 1rem;
                    line-height: 1.7;
                    margin: 0;
                }

                .stats-card {
                    background: #ffffff;
                    border: 1px solid rgba(151, 180, 26, 0.16);
                    border-radius: 8px;
                    box-shadow: 0 14px 30px rgba(15, 23, 42, 0.06);
                    padding: 1.25rem;
                    text-align: center;
                    height: 100%;
                }

                .stats-number {
                    color: #32A8B8;
                    font-family: 'Fredoka', sans-serif;
                    font-size: 2.4rem;
                    font-weight: 700;
                    line-height: 1;
                    margin-bottom: 0.45rem;
                }

                .stats-label {
                    color: #475569;
                    font-size: 0.95rem;
                    font-weight: 700;
                }

                /* Add to your existing styles */
                .organic-image-mask-mobile {
                    border-radius: 24px;
                    overflow: hidden;
                    width: 100%;
                    height: 400px;
                    object-fit: cover;
                    background: #fff;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
                    position: relative;
                }

                /* Adjust pagination position for mobile */
                @media (max-width: 1023px) {
                    .swiper-pagination-hero {
                        position: relative !important;
                        margin-top: 2rem;
                        bottom: 0 !important;
                    }

                    .hero-title {
                        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
                    }

                    .btn-orange {
                        position: relative;
                        z-index: 10;
                    }
                }

                /* Ensure proper stacking */
                .hero-section .swiper-slide {
                    display: flex;
                    align-items: center;
                    position: relative;
                    overflow: hidden;
                }

                .text-custom-lime {
                    color: #97B41A !important;
                }

                .text-custom-coral {
                    color: #EA6F71 !important;
                }

                /* NEW SERVICE CARDS DESIGN (HALF-COLOURED) */
                .services-section-v2 {
                    background-color: #32A8B8;
                    /* Green top half */
                    position: relative;
                    padding: 0;
                    overflow: hidden;
                }

                .services-section-v2::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 40%;
                    /* White bottom half */
                    background-color: #ffffff;
                    z-index: 1;
                }

                /* Sliding Marquee */
                .marquee-wrapper {
                    background-color: #32A8B8;
                    padding: 20px 0;
                    /* Reduced from 40px */
                    border-bottom: 2px solid rgba(255, 255, 255, 0.2);
                    white-space: nowrap;
                    overflow: hidden;
                    position: relative;
                    z-index: 2;
                }

                .marquee-text {
                    display: inline-block;
                    font-size: 80px;
                    font-weight: 900;
                    color: rgba(255, 255, 255, 0.9);
                    text-transform: uppercase;
                    animation: marquee 30s linear infinite;
                    letter-spacing: 15px;
                }

                .marquee-text span {
                    margin: 0 40px;
                    display: inline-block;
                }

                @keyframes marquee {
                    from {
                        transform: translateX(0);
                    }

                    to {
                        transform: translateX(-50%);
                    }
                }

                .services-content-v2 {
                    position: relative;
                    z-index: 5;
                    padding-top: 40px;
                    /* Reduced from 60px */
                    padding-bottom: 60px;
                    /* Reduced from 80px */
                }

                .doodle-bg-light,
                .doodle-bg-dark {
                    position: absolute;
                    inset: -50px;
                    pointer-events: none;
                    z-index: 1;
                    background-size: 400px;
                    animation: floatBackground 20s ease-in-out infinite;
                }

                .doodle-bg-light {
                    opacity: 0.15;
                    background-image: url("data:image/svg+xml,%3Csvg width='400' height='400' viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='white' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M200 100 c -20 0 -35 15 -35 35 c 0 15 10 25 15 30 l 0 15 l 40 0 l 0 -15 c 5 -5 15 -15 15 -30 c 0 -20 -15 -35 -35 -35 Z'/%3E%3Cpath d='M185 185 l 30 0 m -30 5 l 30 0'/%3E%3Cpath d='M200 85 l 0 -10 M230 115 l 10 -10 M170 115 l -10 -10'/%3E%3Cpath d='M50 50 Q 70 30 90 50 T 130 50'/%3E%3Ccircle cx='300' cy='100' r='20'/%3E%3Cpath d='M350 300 l 20 20 m -20 0 l 20 -20'/%3E%3Crect x='100' y='300' width='30' height='30' rx='5'/%3E%3Cpath d='M40 250 c 10 0 10 20 20 20 s 10 -20 20 -20'/%3E%3Ccircle cx='150' cy='100' r='5' fill='white'/%3E%3Ccircle cx='250' cy='350' r='8'/%3E%3C/g%3E%3C/svg%3E");
                }

                .doodle-bg-dark {
                    opacity: 0.05;
                    background-image: url("data:image/svg+xml,%3Csvg width='400' height='400' viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%2332A8B8' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M200 100 c -20 0 -35 15 -35 35 c 0 15 10 25 15 30 l 0 15 l 40 0 l 0 -15 c 5 -5 15 -15 15 -30 c 0 -20 -15 -35 -35 -35 Z'/%3E%3Cpath d='M185 185 l 30 0 m -30 5 l 30 0'/%3E%3Cpath d='M200 85 l 0 -10 M230 115 l 10 -10 M170 115 l -10 -10'/%3E%3Cpath d='M50 50 Q 70 30 90 50 T 130 50'/%3E%3Ccircle cx='300' cy='100' r='20'/%3E%3Cpath d='M350 300 l 20 20 m -20 0 l 20 -20'/%3E%3Crect x='100' y='300' width='30' height='30' rx='5'/%3E%3Cpath d='M40 250 c 10 0 10 20 20 20 s 10 -20 20 -20'/%3E%3Ccircle cx='150' cy='100' r='5' fill='%2332A8B8'/%3E%3Ccircle cx='250' cy='350' r='8'/%3E%3C/g%3E%3C/svg%3E");
                }

                @keyframes floatBackground {

                    0%,
                    100% {
                        transform: translate(0, 0);
                    }

                    50% {
                        transform: translate(20px, -20px);
                    }
                }

                .servicesSwiper {
                    padding: 20px 20px 60px !important;
                    margin: 0 -20px;
                }

                .servicesSwiper .swiper-slide {
                    height: auto !important;
                    display: flex;
                }

                .service-card-v2 {
                    background: white;
                    border-radius: 40px;
                    overflow: hidden;
                    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    display: flex;
                    flex-direction: column;
                    height: 100%;
                    width: 100%;
                    text-align: center;
                    border: none;
                }

                .service-card-v2:hover {
                    transform: translateY(-12px);
                    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
                }

                .card-top-image-v2 {
                    position: relative;
                    height: 220px;
                    overflow: hidden;
                }

                .card-top-image-v2 img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: transform 0.6s ease;
                }

                .service-card-v2:hover .card-top-image-v2 img {
                    transform: scale(1.1);
                }

                .wavy-svg {
                    position: absolute;
                    bottom: -1px;
                    left: 0;
                    width: 100%;
                    height: 50px;
                    fill: currentColor;
                }

                .icon-bubble-v2 {
                    position: absolute;
                    left: 50%;
                    bottom: 0px;
                    transform: translate(-50%, 50%);
                    width: 65px;
                    height: 65px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    z-index: 10;
                    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
                }

                .icon-bubble-v2 img {
                    width: 32px;
                    height: 32px;
                    filter: brightness(0) invert(1);
                }

                .card-body-v2 {
                    padding: 45px 25px 30px;
                    flex-grow: 1;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }

                .card-title-v2 {
                    font-size: 1.5rem;
                    font-weight: 800;
                    color: #2D3748;
                    margin-bottom: 12px;
                }

                .card-text-v2 {
                    font-size: 0.95rem;
                    color: #718096;
                    line-height: 1.6;
                    margin-bottom: 25px;
                }

                .card-btn-v2 {
                    width: 45px;
                    height: 45px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-top: auto;
                    transition: all 0.3s ease;
                    border: none;
                }

                .card-btn-v2:hover {
                    transform: scale(1.15) rotate(15deg);
                }

                .card-btn-v2 svg {
                    width: 20px;
                    height: 20px;
                    stroke: white;
                }

                .view-more-services-btn {
                    background-color: #32A8B8;
                    color: white;
                    padding: 14px 35px;
                    border-radius: 12px;
                    font-weight: 700;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    display: inline-block;
                    transition: all 0.3s ease;
                    box-shadow: 0 10px 20px rgba(50, 168, 184, 0.2);
                }

                .view-more-services-btn:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 15px 30px rgba(50, 168, 184, 0.3);
                    background-color: #2a8f9d;
                    color: white;
                }
            </style>
        @endpush

        {{-- ================= HERO SECTION ================= --}}
        <section class="hero-section pt-10 pb-10 lg:pt-12 lg:pb-20 px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="swiper heroSwiper overflow-visible">
                    <div class="swiper-wrapper">

                        {{-- SLIDE 1 --}}
                        <div class="swiper-slide">
                            {{-- Background Elements --}}
                            <div class="hero-bg-doodles"></div>

                            <!-- CHILD FRIENDLY BACKGROUND -->
                            <div class="hero-pattern-lightbulb"></div>
                            <div class="hero-doodle-lines"></div>
                            <div class="hero-gradient-blob"></div>

                            <div class="hero-geo-shapes">
                                <span class="circle1"></span>
                                <span class="circle2"></span>
                                <span class="circle3"></span>
                                <span class="circle4"></span>
                            </div>

                            {{-- Floating Decorations --}}
                            <div class="floating-decoration decoration-pencil hidden lg:block" data-aos="fade-down"
                                data-aos-delay="500">
                                <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 80 L30 85 L85 30 L75 25 Z" fill="#EA6F71" />
                                    <path d="M85 30 L90 25 L80 15 L75 20" fill="#E99D1D" />
                                    <path d="M20 80 L15 85 L30 85 Z" fill="#32A8B8" />
                                    <path d="M10 90 Q 40 70 70 90 T 130 70" stroke="#EA6F71" stroke-width="2"
                                        stroke-dasharray="4 4" fill="none" />
                                </svg>
                            </div>

                            <div class="floating-decoration decoration-plane hidden lg:block" data-aos="zoom-in"
                                data-aos-delay="800">
                                <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 50 L90 20 L50 90 L45 55 Z" fill="#32A8B8" />
                                    <path d="M45 55 L90 20 L10 50 Z" fill="#2A8F9D" />
                                    <path d="M5 60 Q 15 70 25 60 T 45 60" stroke="#97B41A" stroke-width="1.5"
                                        stroke-dasharray="3 3" fill="none" />
                                </svg>
                            </div>

                            {{-- Accent Dots and Sparkles --}}
                            <div class="accent-dot dot-teal"></div>
                            <div class="accent-dot dot-coral"></div>
                            <div class="accent-dot dot-lime"></div>
                            <div class="accent-dot dot-orange"></div>
                            <div class="sparkle" style="top: 25%; right: 25%;"></div>
                            <div class="sparkle" style="bottom: 15%; left: 30%;"></div>

                            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10 w-full">

                                {{-- CONTENT - Mobile / Desktop --}}
                                <div class="z-20 text-center lg:text-left relative w-full lg:relative">
                                    {{-- Mobile optimized layout content --}}
                                    <div class="lg:hidden flex flex-col items-center">
                                        <div class="mobile-hero-image-container">
                                            <div class="mobile-organic-circle">
                                                <img src="{{ asset('images/image9.jpg') }}" alt="Wellness" fetchpriority="high">
                                            </div>
                                        </div>

                                        <div class="mobile-content-card">
                                            <span class="mobile-subheading">Best Child Development Center In Kerala</span>
                                            <h2 class="hero-title">About Us</h2>
                                            <p class="hero-description">
                                                Our center is designed to be a safe, caring, and hopeful environment where every
                                                child's unique potential is recognized and nurtured.
                                            </p>

                                            <a href="/contact" class="btn-custom-teal">Talk To Us</a>
                                        </div>
                                    </div>

                                    {{-- Desktop layout --}}
                                    <div class="hidden lg:block">
                                        <h1 class="hero-title text-5xl lg:text-7xl mb-8">
                                            Precision Care for<br>
                                            the Human<br>
                                            Well Being
                                        </h1>

                                        <p
                                            class="hero-description text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                            Combining clinical expertise with human connection to create meaningful pathways toward emotional balance, personal growth, and holistic wellbeing.
                                        </p>

                                        <a href="/contact" class="btn-custom-teal text-lg mx-auto lg:mx-0">
                                            Talk To Us
                                        </a>
                                    </div>
                                </div>

                                {{-- RIGHT IMAGE - Hidden on mobile, shown on desktop --}}
                                <div class="organic-shape-container hidden lg:block">
                                    <div class="organic-image-mask">
                                        <img src="{{ asset('images/image7.jpg') }}" class="w-full h-full object-cover"
                                            alt="Wellness Experience" fetchpriority="high">
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- SLIDE 2 --}}
                        <div class="swiper-slide">
                            {{-- Background Elements --}}
                            <div class="hero-bg-doodles" style="transform: rotate(180deg); opacity: 0.03;"></div>

                            <!-- CHILD FRIENDLY BACKGROUND -->
                            <div class="hero-pattern-lightbulb"></div>
                            <div class="hero-doodle-lines"></div>
                            <div class="hero-gradient-blob"></div>

                            <div class="hero-geo-shapes">
                                <span class="circle1"></span>
                                <span class="circle2"></span>
                                <span class="circle3"></span>
                                <span class="circle4"></span>
                            </div>

                            {{-- Floating Decorations --}}
                            <div class="floating-decoration hidden lg:block" style="top: 20%; right: 5%; width: 70px;"
                                data-aos="fade-left">
                                <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="30" y="20" width="40" height="60" rx="10" fill="#EA6F71" opacity="0.8" />
                                    <circle cx="50" cy="40" r="10" fill="white" opacity="0.5" />
                                </svg>
                            </div>

                            <div class="floating-decoration decoration-plane hidden lg:block"
                                style="bottom: 15%; left: 10%; transform: scaleX(-1);" data-aos="zoom-in">
                                <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    style="transform: rotate(-45deg);">
                                    <path d="M10 50 L90 20 L50 90 L45 55 Z" fill="#E99D1D" />
                                    <path d="M5 60 Q 15 70 25 60 T 45 60" stroke="#EA6F71" stroke-width="1.5"
                                        stroke-dasharray="3 3" fill="none" />
                                </svg>
                            </div>

                            <div class="accent-dot dot-lime" style="top: 30%; left: 40%;"></div>
                            <div class="accent-dot dot-orange" style="bottom: 40%; right: 30%;"></div>
                            <div class="sparkle" style="top: 15%; left: 20%;"></div>

                            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10 w-full">

                                <div class="z-20 text-center lg:text-left relative w-full lg:relative">
                                    {{-- Mobile optimized layout content --}}
                                    <div class="lg:hidden flex flex-col items-center">
                                        <div class="mobile-hero-image-container">
                                            <div class="mobile-organic-circle">
                                                <img loading="lazy" decoding="async" src="{{ asset('images/image8.jpg') }}" alt="Expert Guidance">
                                            </div>
                                        </div>

                                        <div class="mobile-content-card">
                                            <span class="mobile-subheading">Comprehensive Expert Guidance</span>
                                            <h2 class="hero-title">Join Our Family</h2>
                                            <p class="hero-description">
                                                Join over 1000 families who trust our certified therapists for holistic
                                                developmental care and specialized support.
                                            </p>

                                            <a href="/contact" class="btn-custom-lime">Book Assessment</a>
                                        </div>
                                    </div>

                                    {{-- Desktop layout --}}
                                    <div class="hidden lg:block">
                                        <h2 class="hero-title text-5xl lg:text-7xl mb-8 text-custom-lime">
                                            Empowering<br>
                                            Potential with<br>
                                            Expert Guidance
                                        </h2>

                                        <p
                                            class="hero-description text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                            Join over 1000 families who trust our certified therapists
                                            for holistic developmental care.
                                        </p>

                                        <a href="/contact" class="btn-custom-lime text-lg mx-auto lg:mx-0">
                                            Book Assessment
                                        </a>
                                    </div>
                                </div>

                                {{-- RIGHT IMAGE - Hidden on mobile --}}
                                <div class="organic-shape-container hidden lg:block">
                                    <div class="organic-image-mask">
                                        <img loading="lazy" decoding="async" src="{{ asset('images/image6.jpg') }}" class="w-full h-full object-cover"
                                            alt="Expert Care">
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- SLIDE 3 --}}
                        <div class="swiper-slide">
                            {{-- Background Elements --}}
                            <div class="hero-bg-doodles" style="background-size: 200px; opacity: 0.04;"></div>

                            <!-- CHILD FRIENDLY BACKGROUND -->
                            <div class="hero-pattern-lightbulb"></div>
                            <div class="hero-doodle-lines"></div>
                            <div class="hero-gradient-blob"></div>

                            <div class="hero-geo-shapes">
                                <span class="circle1"></span>
                                <span class="circle2"></span>
                                <span class="circle3"></span>
                                <span class="circle4"></span>
                            </div>
                            {{-- Floating Decorations --}}
                            <div class="floating-decoration hidden lg:block" style="top: 10%; left: 45%; width: 50px;"
                                data-aos="fade-down">
                                <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M50 10 L60 40 L90 50 L60 60 L50 90 L40 60 L10 50 L40 40 Z" fill="#97B41A" />
                                </svg>
                            </div>

                            <div class="accent-dot dot-teal" style="top: 20%; right: 40%;"></div>
                            <div class="accent-dot dot-coral" style="bottom: 10%; left: 15%;"></div>
                            <div class="sparkle" style="bottom: 25%; right: 10%;"></div>

                            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10 w-full">

                                <div class="z-20 text-center lg:text-left relative w-full lg:relative">
                                    {{-- Mobile optimized layout content --}}
                                    <div class="lg:hidden flex flex-col items-center">
                                        <div class="mobile-hero-image-container">
                                            <div class="mobile-organic-circle">
                                                <img loading="lazy" decoding="async" src="{{ asset('images/image10.png') }}" alt="Growth Journey">
                                            </div>
                                        </div>

                                        <div class="mobile-content-card">
                                            <span class="mobile-subheading">Supporting Every Step</span>
                                            <h2 class="hero-title">Our Services</h2>
                                            <p class="hero-description">
                                                From early intervention to specialized therapies, we walk alongside families at
                                                every stage of development.
                                            </p>

                                            <a href="/services" class="btn-custom-coral">Explore Services</a>
                                        </div>
                                    </div>

                                    {{-- Desktop layout --}}
                                    <div class="hidden lg:block">
                                        <h2 class="hero-title text-5xl lg:text-7xl mb-8 text-custom-coral">
                                            Supporting Every<br>
                                            Child's Growth<br>
                                            Journey
                                        </h2>

                                        <p
                                            class="hero-description text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                            From early intervention to specialized therapies,
                                            we walk alongside families at every stage of development.
                                        </p>

                                        <a href="/services" class="btn-custom-coral text-lg mx-auto lg:mx-0">
                                            Explore Services
                                        </a>
                                    </div>
                                </div>

                                {{-- RIGHT IMAGE - Hidden on mobile --}}
                                <div class="organic-shape-container hidden lg:block">
                                    <div class="organic-image-mask">
                                        <img loading="lazy" decoding="async" src="{{ asset('images/image4.jpg') }}" class="w-full h-full object-cover"
                                            alt="Child Development Care">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    {{-- PAGINATION --}}
                    <div class="swiper-pagination-hero swiper-pagination"></div>
                </div>

            </div>
        </section>

        {{-- ================= VISION, MISSION & STATS ================= --}}
        <section class="vision-mission-band py-12 lg:py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 mb-8">
                    <div class="vision-mission-card" data-aos="fade-up">
                        <div class="vision-mission-label">Our Vision</div>
                        <h2 class="vision-mission-title">Helping every child grow with confidence.</h2>
                        <p class="vision-mission-text">
                            To create a nurturing space where children receive the right support, families feel guided, and
                            every child is encouraged to reach their fullest potential.
                        </p>
                    </div>

                    <div class="vision-mission-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="vision-mission-label">Our Mission</div>
                        <h2 class="vision-mission-title">Personalized care for meaningful progress.</h2>
                        <p class="vision-mission-text">
                            We provide evidence-based therapies, compassionate guidance, and consistent family support to help
                            children build essential skills for everyday life.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 lg:gap-6">
                    <div class="stats-card" data-aos="zoom-in">
                        <div class="stats-number"><span class="stats-count" data-target="10">0</span>+</div>
                        <div class="stats-label">Years Experience</div>
                    </div>

                    <div class="stats-card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="stats-number"><span class="stats-count" data-target="1000">0</span>+</div>
                        <div class="stats-label">Happy Customers</div>
                    </div>

                    <div class="stats-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="stats-number"><span class="stats-count" data-target="25">0</span>+</div>
                        <div class="stats-label">Expert Staffs</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ================= MISSION & CTA SECTION ================= --}}
        <section class="py-12 lg:py-16 relative overflow-hidden bg-white">
            <div class="doodle-bg-dark"></div>
            {{-- Animated background elements (Scaled down) --}}
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div
                    class="absolute -top-20 -right-20 w-64 h-64 bg-teal-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow">
                </div>
                <div
                    class="absolute -bottom-20 -left-20 w-64 h-64 bg-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow animation-delay-2000">
                </div>
            </div>

            <div class="max-w-3xl mx-auto px-4 sm:px-6 relative z-10">
                {{-- Founder card with sliding entrance --}}
                <div class="relative bg-white/90 backdrop-blur-lg p-6 lg:p-10 rounded-3xl shadow-lg border border-gray-100 transform hover:scale-[1.01] transition-all duration-500 text-center"
                    data-aos="zoom-in" data-aos-duration="800">

                    {{-- Avatar & Meta Data --}}
                    <div class="flex flex-col items-center mb-6">
                        <div class="relative inline-block mb-3">
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-teal-400 to-pink-400 rounded-full blur-md opacity-40">
                            </div>
                            <div
                                class="relative w-24 h-24 rounded-full bg-white p-1 border border-gray-100 shadow-sm relative z-10">
                                <img loading="lazy" decoding="async" src="{{ asset('images/Mushthaq.P.PNG') }}" width="96" height="96" loading="lazy" class="w-full h-full object-cover rounded-full"
                                    alt="Mushtaq - Founder & CEO">
                            </div>
                        </div>

                        <h3 class="font-bold text-gray-900 text-xl tracking-tight">Mushtaq</h3>
                        <span
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-teal-50 text-teal-700 text-xs font-semibold mt-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-teal-500 animate-pulse"></span>
                            Founder & CEO
                        </span>
                    </div>

                    {{-- Quote content --}}
                    <div class="relative max-w-2xl mx-auto">
                        <div class="absolute -top-4 -left-2 text-teal-100 transform -scale-x-100">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M14 11H19L17 19H12L14 11ZM5 11H10L8 19H3L5 11Z" />
                            </svg>
                        </div>

                        <p class="text-base lg:text-lg text-gray-600 leading-relaxed font-serif italic relative z-10 px-6">
                            "To be a beacon of hope and excellence in child development, creating a world where every child is
                            understood, valued, and empowered to achieve their fullest potential."
                        </p>

                        <div class="absolute -bottom-4 -right-2 text-pink-100">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M14 11H19L17 19H12L14 11ZM5 11H10L8 19H3L5 11Z" />
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- CTA Buttons --}}
                <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/services"
                        class="group relative inline-flex items-center justify-center gap-2 overflow-hidden rounded-full bg-[#32A8B8] px-8 py-3.5 text-white font-semibold text-sm shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <span
                            class="absolute inset-0 bg-[#2d96a5] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="relative flex items-center gap-2">
                            View All Services
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                    </a>

                    <a href="/contact"
                        class="group relative inline-flex items-center justify-center gap-2 overflow-hidden rounded-full border border-teal-500 bg-white px-8 py-3.5 text-teal-600 font-semibold text-sm hover:bg-teal-50 transform hover:-translate-y-1 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <span class="relative flex items-center gap-2">
                            Book Consultation
                            <svg class="w-5 h-5 transform group-hover:rotate-12 transition-transform duration-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>



        @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var swiperHero = new Swiper(".heroSwiper", {
                        direction: "horizontal",
                        slidesPerView: 1,
                        spaceBetween: 30,
                        loop: true,
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".swiper-pagination-hero",
                            clickable: true,
                        },
                        effect: "slide",
                        speed: 1000,
                    });

                    var swiperServices = new Swiper(".servicesSwiper", {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        loop: true,
                        autoplay: {
                            delay: 3500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 20,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 30,
                            },
                            1280: {
                                slidesPerView: 4,
                                spaceBetween: 30,
                            },
                        },
                        speed: 800,
                    });

                    document.querySelectorAll('.stats-count').forEach(function (counter) {
                        var target = Number(counter.dataset.target || 0);
                        var duration = 1600;
                        var startTime = null;

                        function updateCount(timestamp) {
                            if (!startTime) {
                                startTime = timestamp;
                            }

                            var progress = Math.min((timestamp - startTime) / duration, 1);
                            var easedProgress = 1 - Math.pow(1 - progress, 3);
                            counter.textContent = Math.floor(easedProgress * target).toLocaleString();

                            if (progress < 1) {
                                requestAnimationFrame(updateCount);
                            } else {
                                counter.textContent = target.toLocaleString();
                            }
                        }

                        requestAnimationFrame(updateCount);
                    });

                });
            </script>
        @endpush

        {{-- ================= FEATURE STRIP (UNDER HERO) ================= --}}
        <section class="feature-strip bg-white py-16 lg:py-24 relative overflow-hidden">
            <div class="doodle-bg-dark" style="opacity: 0.03;"></div>
            {{-- Background decorative elements (Subtle geometric network) --}}
            <div class="absolute inset-0 pointer-events-none" style="z-index: 0;">
                <svg class="absolute w-full h-full opacity-10" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="network" x="0" y="0" width="150" height="150" patternUnits="userSpaceOnUse">
                            <path d="M75 0 L75 150 M0 75 L150 75" stroke="#32A8B8" stroke-width="0.5" stroke-dasharray="2 6" />
                            <circle cx="75" cy="75" r="3" fill="none" stroke="#EA6F71" stroke-width="1" />
                            <circle cx="0" cy="75" r="2" fill="#32A8B8" />
                            <circle cx="75" cy="0" r="2" fill="#32A8B8" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#network)" />
                </svg>
                <div
                    class="absolute -top-40 -left-40 w-96 h-96 bg-teal-50 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob">
                </div>
                <div
                    class="absolute top-20 right-0 w-80 h-80 bg-pink-50 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000">
                </div>
            </div>

            <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

                {{-- SECTION HEADING with sliding animation --}}
                <div class="text-center mb-10 sm:mb-16" data-aos="fade-down" data-aos-duration="1000">
                    <span
                        class="inline-block px-5 py-2 rounded-full bg-teal-50/80 text-teal-600 font-bold text-xs sm:text-sm mb-4 tracking-wider border border-teal-100 backdrop-blur-sm"
                        data-aos="zoom-in" data-aos-delay="200">
                        ✦ What We Offer ✦
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#1a2b4b] tracking-tight mb-4">
                        Our Services
                    </h2>
                    <p class="mt-4 text-gray-500 max-w-2xl mx-auto text-sm sm:text-lg font-medium" data-aos="fade-up"
                        data-aos-delay="300">
                        Comprehensive, evidence-based therapies designed to maximise your child’s potential in a supportive and
                        nurturing environment.
                    </p>
                </div>

                {{-- SERVICES FLOATING CARDS --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-4 sm:gap-6 lg:gap-8 justify-center">
                    @php
                        $featureServices = [
                            ['icon' => 'psychological-assessment.svg', 'title' => 'PSYCHOLOGICAL ASSESSMENT', 'bgColor' => '#F4F9FA', 'iconColor' => '#006684', 'delay' => '100', 'link' => '/services#psychological-assessment'],
                            ['icon' => 'behavioural-therapy.svg', 'title' => 'BEHAVIOURAL THERAPY', 'bgColor' => '#E8F5E9', 'iconColor' => '#2E7D32', 'delay' => '200', 'link' => '/services#behaviour-therapy'],
                            ['icon' => 'speech-therapy.svg', 'title' => 'SPEECH THERAPY', 'bgColor' => '#FCE4EC', 'iconColor' => '#C2185B', 'delay' => '300', 'link' => '/services#speech-therapy'],
                            ['icon' => 'special-education.svg', 'title' => 'SPECIAL EDUCATION', 'bgColor' => '#FFF3E0', 'iconColor' => '#E65100', 'delay' => '400', 'link' => '/services#special-education'],
                            ['icon' => 'occupational-therapy.svg', 'title' => 'OCCUPATIONAL THERAPY', 'bgColor' => '#E3F2FD', 'iconColor' => '#1565C0', 'delay' => '500', 'link' => '/services#occupational-therapy'],
                            ['icon' => 'psychotherapy-counselling.svg', 'title' => 'PSYCHOTHERAPY & COUNSELLING', 'bgColor' => '#F3E5F5', 'iconColor' => '#6A1B9A', 'delay' => '600', 'link' => '/services#psychotherapy-counselling'],
                        ];
                    @endphp

                    @foreach($featureServices as $index => $service)
                        <div data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}" data-aos-duration="800" class="h-full">
                            <a href="{{ $service['link'] ?? '/services' }}" class="service-card-modern" style="text-decoration: none;">
                                <div class="service-icon-wrapper"
                                    style="background-color: {{ $service['bgColor'] }}; border: 1px solid rgba(0,0,0,0.03);">
                                    {{-- We apply a css filter hack or specific styled icon if needed, for now we load the SVG and
                                    let it display normally. Ideally these are single-color SVGs --}}
                                    <img loading="lazy" decoding="async" src="{{ asset('images/icons/' . $service['icon']) }}" alt="{{ $service['title'] }}"
                                        class="service-icon-img" style="filter: drop-shadow(0px 2px 4px rgba(0,0,0,0.1));">
                                </div>
                                <h3 class="service-card-title">{{ $service['title'] }}</h3>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ================= REDESIGNED SERVICES SECTION ================= --}}
        <section class="services-section-v2 overflow-hidden">
            {{-- Sliding Marquee Heading --}}
            <div class="marquee-wrapper">
                <div class="marquee-text">
                    <span>OFFLINE</span> <span>SERVICES</span> <span>ONLINE</span> <span>24 Hour support</span>
                    <span>OFFLINE</span> <span>SERVICES</span> <span>ONLINE</span> <span>24 Hour support</span>
                </div>
            </div>

            <div class="services-content-v2">
                <div class="doodle-bg-light"></div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    {{-- Section Heading --}}
                    <div class="text-center mb-10" data-aos="fade-up"> {{-- Reduced mb-16 to mb-10 --}}
                        <p class="text-white/80 font-medium mb-2 italic text-lg sm:text-xl">Our Services</p> {{-- Reduced mb-4 to mb-2 --}}
                        <h2 class="text-3xl sm:text-4xl lg:text-6xl font-extrabold text-white tracking-tight">
                            Building Skills, Inspiring Confidence
                        </h2>
                    </div>
                    @php
                        $v2Services = [
                            [
                                'title' => 'Speech Therapy',
                                'description' => "Helping every child find their voice.\n  We provide expert speech therapy to improve communication, language, and social skills — because every voice matters",
                                'image' => 'images/image15.jpg',
                                'icon' => 'speech-therapy.svg',
                                'color' => '#32A8B8',
                                'bgColor' => '#ffffff',
                                'borderColor' => 'rgba(50, 168, 184, 0.2)',
                                'link' => '/services#speech-therapy',
                            ],
                            [
                                'title' => 'Special Education',
                                'description' => "Making learning easy and fun.\n\nWe help children overcome learning challenges through personalised support, multisensory teaching, and IEP-based learning.",
                                'image' => 'images/image4.jpg',
                                'icon' => 'special-education.svg',
                                'color' => '#EA6F71',
                                'bgColor' => '#ffffff',
                                'borderColor' => 'rgba(234, 111, 113, 0.2)',
                                'link' => '/services#special-education',
                            ],
                            [
                                'title' => 'Behaviour Therapy',
                                'description' => "Better skills for a happier life.\n\nWe provide expert behaviour therapy and ABA support to improve cognitive, social, and emotional skills for every child.",
                                'image' => 'images/image6.jpg',
                                'icon' => 'behavioural-therapy.svg',
                                'color' => '#97B41A',
                                'bgColor' => '#ffffff',
                                'borderColor' => 'rgba(151, 180, 26, 0.2)',
                                'link' => '/services#behaviour-therapy',
                            ],
                            [
                                'title' => 'Occupational Therapy',
                                'description' => "Building independence for daily life.\n\nOur occupational therapy helps children build independence by improving motor skills, sensory processing, and daily life activities with confidence.",
                                'image' => 'images/image14.jpg',
                                'icon' => 'occupational-therapy.svg',
                                'color' => '#E99D1D',
                                'bgColor' => '#ffffff',
                                'borderColor' => 'rgba(233, 157, 29, 0.2)',
                                'link' => '/services#occupational-therapy',
                            ],
                            [
                                'title' => 'Psychological Assessment',
                                'description' => "Understanding your child’s unique mind.\n\nOur expert psychologists provide IQ tests, learning evaluations, and personalised support plans to help every child reach their full potential.",
                                'image' => 'images/image12.jpg',
                                'icon' => 'psychological-assessment.svg',
                                'color' => '#32A8B8',
                                'bgColor' => '#ffffff',
                                'borderColor' => 'rgba(50, 168, 184, 0.2)',
                                'link' => '/services#psychological-assessment',
                            ],
                            [
                                'title' => 'Counselling & Psychotherapy',
                                'description' => "Caring for mental health.\n\nOur expert team provides child counselling and psychotherapy to support emotional well-being, confidence, and resilience.",
                                'image' => 'images/image13.jpg',
                                'icon' => 'psychotherapy-counselling.svg',
                                'color' => '#EA6F71',
                                'bgColor' => '#ffffff',
                                'borderColor' => 'rgba(234, 111, 113, 0.2)',
                                'link' => '/services#psychotherapy-counselling',
                            ]
                        ];
                    @endphp

                    <div class="swiper servicesSwiper">
                        <div class="swiper-wrapper">
                            @foreach($v2Services as $index => $service)
                                <div class="swiper-slide">
                                    <div class="service-card-v2" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}"
                                        style="background-color: {{ $service['bgColor'] }}; border: 1px solid {{ $service['borderColor'] }};">
                                        <div class="card-top-image-v2">
                                            <img loading="lazy" decoding="async" src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" width="400" height="300" loading="lazy">
                                            <div class="icon-bubble-v2" style="background-color: {{ $service['color'] }}">
                                                <img loading="lazy" decoding="async" src="{{ asset('images/icons/' . $service['icon']) }}"
                                                    alt="{{ $service['title'] }}" width="32" height="32" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="card-body-v2">
                                            <h3 class="card-title-v2">{{ $service['title'] }}</h3>
                                            <p class="card-text-v2">{!! nl2br(e($service['description'])) !!}</p>

                                            <a href="{{ $service['link'] ?? '/services' }}" class="card-btn-v2"
                                                style="background-color: {{ $service['color'] }}">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- Swiper Pagination --}}
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="text-center mt-12 relative z-20" data-aos="fade-up">
                        <a href="/services" class="view-more-services-btn">
                            View More Services
                        </a>
                    </div>
                </div>
        </section>

        <style>
            /* Custom animations */
            @keyframes blob {
                0% {
                    transform: translate(0px, 0px) scale(1);
                }

                33% {
                    transform: translate(30px, -50px) scale(1.1);
                }

                66% {
                    transform: translate(-20px, 20px) scale(0.9);
                }

                100% {
                    transform: translate(0px, 0px) scale(1);
                }
            }

            @keyframes float {
                0% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-20px);
                }

                100% {
                    transform: translateY(0px);
                }
            }

            @keyframes spin-slow {
                from {
                    transform: translate(-50%, -50%) rotate(0deg);
                }

                to {
                    transform: translate(-50%, -50%) rotate(360deg);
                }
            }

            @keyframes pulse-slow {

                0%,
                100% {
                    opacity: 0.2;
                }

                50% {
                    opacity: 0.3;
                }
            }

            @keyframes slide-up {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes hover-pop {
                0% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.05);
                }

                100% {
                    transform: scale(1.02);
                }
            }

            @keyframes icon-bounce {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-8px);
                }
            }

            .service-card-modern {
                background: white;
                border-radius: 20px;
                padding: 2.5rem 1.5rem;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
                border: 1px solid rgba(255, 255, 255, 0.5);
                transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100%;
                position: relative;
                overflow: hidden;
                z-index: 2;
            }

            .service-card-modern::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, rgba(234, 250, 255, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
                z-index: -1;
                opacity: 0;
                transition: opacity 0.5s ease;
            }

            .service-card-modern:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
                border-color: rgba(50, 168, 184, 0.2);
                animation: hover-pop 0.4s ease-out forwards;
            }

            .service-card-modern:hover::before {
                opacity: 1;
            }

            .service-icon-wrapper {
                width: 80px;
                height: 80px;
                border-radius: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 1.5rem;
                transition: all 0.4s ease;
                position: relative;
            }

            .service-card-modern:hover .service-icon-wrapper {
                animation: icon-bounce 0.6s ease-in-out;
                border-radius: 50%;
            }

            .service-icon-img {
                width: 40px;
                height: 40px;
                object-fit: contain;
                transition: all 0.4s ease;
            }

            .service-card-modern:hover .service-icon-img {
                transform: scale(1.1);
            }

            .service-card-title {
                color: #1a365d;
                font-size: 0.9rem;
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                text-align: center;
                line-height: 1.4;
                transition: color 0.4s ease;
                min-height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .service-card-modern:hover .service-card-title {
                color: #32A8B8;
            }

            /* Swiper Highlight Styles for feature strip */
            .featureSwiper .swiper-slide {
                transition: all 0.6s ease;
                opacity: 0.5;
                transform: scale(0.85);
                /* Normal cards are smaller */
            }

            .featureSwiper .swiper-slide-active {
                opacity: 1;
                transform: scale(1.15);
                /* Selected card is bigger */
                z-index: 20;
            }

            .featureSwiper .swiper-slide-active .service-card-modern {
                /* Glow shadow */
                box-shadow: 0 25px 50px rgba(50, 168, 184, 0.25), 0 0 20px rgba(50, 168, 184, 0.1);
                border-color: rgba(50, 168, 184, 0.4);
                /* Brighter background */
                background: #f4fdff;
            }

            .featureSwiper .swiper-slide-active .service-card-modern::before {
                opacity: 1;
            }

            .featureSwiper .swiper-slide-active .service-icon-wrapper {
                border-radius: 50%;
                /* Continuous icon bounce */
                animation: icon-bounce 1.5s ease-in-out infinite;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            }

            .featureSwiper .swiper-slide-active .service-icon-img {
                transform: scale(1.15);
            }

            .featureSwiper .swiper-slide-active .service-card-title {
                color: #32A8B8;
            }

            .animate-blob {
                animation: blob 10s infinite;
            }

            .animate-float {
                animation: float 6s ease-in-out infinite;
            }

            .animate-spin-slow {
                animation: spin-slow 20s linear infinite;
            }

            .animate-pulse-slow {
                animation: pulse-slow 4s ease-in-out infinite;
            }

            .animate-slide-up {
                animation: slide-up 0.6s ease-out forwards;
            }

            .animation-delay-2000 {
                animation-delay: 2s;
            }

            .animation-delay-3000 {
                animation-delay: 3s;
            }

            .animation-delay-4000 {
                animation-delay: 4s;
            }

            /* Smooth hover transitions */
            .group:hover .group-hover\:rotate-6 {
                transform: rotate(6deg);
            }

            .group:hover .group-hover\:scale-110 {
                transform: scale(1.1);
            }

            .group:hover .group-hover\:translate-y-0 {
                transform: translateY(0);
            }

            .group:hover .group-hover\:opacity-100 {
                opacity: 1;
            }

            /* Background pattern */
            .bg-grid-pattern {
                background-image: linear-gradient(to right, #e5e7eb 1px, transparent 1px),
                    linear-gradient(to bottom, #e5e7eb 1px, transparent 1px);
                background-size: 30px 30px;
            }

            /* Smooth scrolling for animations */
            html {
                scroll-behavior: smooth;
            }

            /* Gradient text */
            .text-gradient {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
        </style>







        {{-- ================= WHY CHOOSE US (PREMIUM VERSION) ================= --}}
        <section class="why-section py-32 relative overflow-hidden">

            {{-- Top Wave Divider --}}
            <div class="absolute top-0 left-0 w-full overflow-hidden leading-[0] z-20">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none"
                    class="relative block w-[calc(100%+1.3px)] h-[40px] lg:h-[70px]">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V0C41.67,11.39,119.33,31,179,42.41,234.19,53,281.42,63.74,321.39,56.44Z"
                        fill="#ffffff"></path>
                </svg>
            </div>

            {{-- floating shapes --}}
            <div class="floating-shape shape1"></div>
            <div class="floating-shape shape2"></div>
            <div class="floating-shape shape3"></div>

            <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

                {{-- TITLE --}}
                <div class="text-center max-w-3xl mx-auto mb-16 text-white" style="font-family: 'Fredoka', sans-serif;">

                    <h2 class="text-4xl lg:text-6xl font-extrabold mb-6 tracking-tight"
                        style="text-shadow: 0 4px 15px rgba(255, 255, 255, 0.1);">
                        Why Parents Trust GEMS?
                    </h2>

                    <p class="text-lg opacity-90">
                        We combine clinical expertise with a heart-centered approach to ensure
                        the best possible start for your child.
                    </p>

                </div>

                {{-- CARDS --}}
                <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-8">

                    {{-- CARD 1 --}}
                    <div class="why-card-premium tilt-card">
                        <div class="icon-box" style="background-color: #32A8B8;">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                        <h3>Licensed Therapist</h3>
                        <p>
                            Expert care from certified professionals dedicated to pediatric excellence.
                        </p>
                    </div>


                    {{-- CARD 2 --}}
                    <div class="why-card-premium tilt-card">
                        <div class="icon-box" style="background-color: #E99D1D;">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M12 8v8m-4-4h8m6 0a10 10 0 11-20 0 10 10 0 0120 0z" />
                            </svg>
                        </div>
                        <h3>Precision in Diagnosis</h3>
                        <p>
                            Accurate assessments that form the foundation for highly tailored interventions.
                        </p>
                    </div>


                    {{-- CARD 3 --}}
                    <div class="why-card-premium tilt-card">
                        <div class="icon-box" style="background-color: #97B41A;">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8m14 10v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
                            </svg>
                        </div>
                        <h3>Multidisciplinary Team</h3>
                        <p>
                            A collaborative approach involving specialists across multiple therapeutic disciplines.
                        </p>
                    </div>


                    {{-- CARD 4 --}}
                    <div class="why-card-premium tilt-card">
                        <div class="icon-box" style="background-color: #EA6F71;">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3>Parent Support</h3>
                        <p>
                            Empowering families with tools, education, and emotional guidance throughout the journey.
                        </p>
                    </div>


                    {{-- CARD 5 --}}
                    <div class="why-card-premium tilt-card">
                        <div class="icon-box" style="background-color: #32A8B8;">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M6 9H4.5a2.5 2.5 0 010-5H6m12 5h1.5a2.5 2.5 0 000-5H18M4 22h16m-10-7.34V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22m7-7.34V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22M18 2H6v7a6 6 0 0012 0V2z" />
                            </svg>
                        </div>
                        <h3>Assured Result</h3>
                        <p>
                            Committed to measurable progress and positive functional outcomes for every child.
                        </p>
                    </div>

                </div>

            </div>

            {{-- Bottom Wave Divider --}}
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] z-20">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none"
                    class="relative block w-[calc(100%+1.3px)] h-[40px] lg:h-[70px]">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C41.67,11.39,119.33,31,179,42.41,234.19,53,281.42,63.74,321.39,56.44Z"
                        fill="#ffffff"></path>
                </svg>
            </div>
        </section>

        <style>
            .why-section {
                background: #97B41A;
                position: relative;
            }

            /* floating playful shapes */

            .floating-shape {
                position: absolute;
                border-radius: 50%;
                opacity: 0.25;
                animation: floatShape 8s infinite ease-in-out;
    +
            }

            .shape1 {
                width: 180px;
                height: 180px;
                background: #ffffff;
                top: -40px;
                left: -40px;
            }

            .shape2 {
                width: 120px;
                height: 120px;
                background: #FFD54F;
                bottom: 40px;
                right: 10%;
                animation-delay: 2s;
            }

            .shape3 {
                width: 90px;
                height: 90px;
                background: #EA6F71;
                top: 40%;
                left: 5%;
                animation-delay: 4s;
            }

            @keyframes floatShape {

                0%,
                100% {
                    transform: translateY(0)
                }

                50% {
                    transform: translateY(-25px)
                }
            }


            /* cards */

            .why-card-premium {
                background: white;
                padding: 35px;
                border-radius: 24px;
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
                transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.4s ease;
                text-align: left;
                position: relative;
                overflow: hidden;
                cursor: pointer;
                transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);
                transform-style: preserve-3d;
            }

            .why-card-premium:hover {
                transform: translateY(-12px) scale(1.03);
                box-shadow: 0 25px 60px rgba(0, 0, 0, 0.18);
            }

            .why-card-premium:active {
                transition: transform 0.1s ease !important;
                transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(0.95, 0.95, 0.95) !important;
            }

            .why-card-premium.is-moving {
                transition: none;
            }

            /* icon */

            .icon-box {
                width: 60px;
                height: 60px;
                border-radius: 16px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 26px;
                color: white;
                margin-bottom: 18px;
            }

            /* title */

            .why-card-premium h3 {
                font-family: 'Fredoka', sans-serif;
                font-weight: 700;
                font-size: 22px;
                margin-bottom: 10px;
                color: #1a1a1a;
            }

            /* text */

            .why-card-premium p {
                font-size: 14px;
                color: #6b7280;
                line-height: 1.6;
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const tiltCards = document.querySelectorAll('.why-section .tilt-card');

                tiltCards.forEach(card => {
                    card.addEventListener('mousemove', (e) => {
                        card.classList.add('is-moving');
                        const rect = card.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;

                        const centerX = rect.width / 2;
                        const centerY = rect.height / 2;

                        const rotateX = ((y - centerY) / centerY) * -10;
                        const rotateY = ((x - centerX) / centerX) * 10;

                        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
                    });

                    card.addEventListener('mouseleave', () => {
                        card.classList.remove('is-moving');
                        card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
                    });
                });
            });
        </script>

        {{-- ================= TESTIMONIALS ================= --}}
        <section class="py-16 lg:py-24 relative overflow-hidden bg-white">
            <div class="max-w-[1300px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <h2 class="text-3xl sm:text-4xl font-bold text-center mb-4 text-transparent bg-clip-text"
                    style="background-image: linear-gradient(to right, #00A79D, #EA6F71); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"
                    data-aos="fade-up">
                    Stories of Hope & Success
                </h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto mb-14 text-base sm:text-lg" data-aos="fade-up" data-aos-delay="50">
                    Real journeys, real milestones. Hear directly from parents whose children found their voice and confidence at GEMS.
                </p>

                {{-- Structured Data for Video SEO (E-E-A-T & Google Rich Snippets) --}}
                <script type="application/ld+json">
                {!! json_encode([
                    '@context' => 'https://schema.org',
                    '@graph' => [
                        [
                            '@type' => 'VideoObject',
                            'name' => 'Parent Story: Remarkable Progress at GEMS Child Development Centre',
                            'description' => 'Mother of a 4-year-old boy shares her experience with pediatric therapy at GEMS Kozhikode, seeing notable improvements in speech, hyperactivity, and eye contact.',
                            'thumbnailUrl' => asset('images/video-story-thumb-1.webp'),
                            'uploadDate' => '2024-11-01T09:00:00+05:30',
                            'duration' => 'PT1M30S',
                            'contentUrl' => asset('videos/gems-testimonial-1.mp4'),
                            'embedUrl' => url('/') . '#testimonials',
                            'inLanguage' => 'ml',
                            'publisher' => [
                                '@type' => 'MedicalOrganization',
                                'name' => 'GEMS Child Development Centre',
                                'url' => url('/'),
                                'logo' => [
                                    '@type' => 'ImageObject',
                                    'url' => asset('images/Logo.png'),
                                ],
                            ],
                        ],
                        [
                            '@type' => 'VideoObject',
                            'name' => 'Parent Testimonial: Caring Therapy & Guidance at GEMS Calicut',
                            'description' => 'Mother of a 9-year-old child shares her heartfelt feedback on the transformative pediatric therapy and dedicated therapists at GEMS Child Development Centre.',
                            'thumbnailUrl' => asset('images/video-story-thumb-2.webp'),
                            'uploadDate' => '2024-11-01T09:00:00+05:30',
                            'duration' => 'PT1M2S',
                            'contentUrl' => asset('videos/gems-testimonial-2.mp4'),
                            'embedUrl' => url('/') . '#testimonials',
                            'inLanguage' => 'ml',
                            'publisher' => [
                                '@type' => 'MedicalOrganization',
                                'name' => 'GEMS Child Development Centre',
                                'url' => url('/'),
                                'logo' => [
                                    '@type' => 'ImageObject',
                                    'url' => asset('images/Logo.png'),
                                ],
                            ],
                        ],
                    ],
                ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
                </script>

                <!-- ================= VERTICAL VIDEO STORIES (REELS) ================= -->
                <div class="mb-20" data-aos="fade-up" data-aos-delay="100">
                    <!-- 2 Vertical Reel Cards Grid -->
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-8 lg:gap-12 max-w-4xl mx-auto px-4">
                        
                        {{-- Story Card 1 --}}
                        <div class="group relative w-full max-w-[280px] sm:max-w-[310px] aspect-[9/16] rounded-[28px] overflow-hidden shadow-[0_14px_35px_rgba(0,0,0,0.12)] border border-gray-100 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_22px_45px_rgba(0,102,132,0.25)] bg-black"
                             onclick="openVideoModal('{{ asset('videos/gems-testimonial-1.mp4') }}')">
                            
                            {{-- Poster Image (WebP lightweight) --}}
                            <img src="{{ asset('images/video-story-thumb-1.webp') }}" 
                                 alt="Parent video testimonial at GEMS"
                                 width="540" height="960" loading="lazy" decoding="async"
                                 class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-105">

                            {{-- Subtle Ambient Hover Overlay --}}
                            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/25 transition-colors duration-300 pointer-events-none"></div>

                            {{-- Center Play Button with Soft Pulsing Aura --}}
                            <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-10">
                                <div class="relative flex items-center justify-center">
                                    <span class="absolute w-20 h-20 rounded-full bg-[#00A79D]/30 animate-ping"></span>
                                    <div class="w-16 h-16 rounded-full bg-white/95 backdrop-blur-md flex items-center justify-center text-[#006684] shadow-2xl transition-transform duration-300 group-hover:scale-110">
                                        <svg class="w-7 h-7 translate-x-0.5 text-[#006684]" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Story Card 2 --}}
                        <div class="group relative w-full max-w-[280px] sm:max-w-[310px] aspect-[9/16] rounded-[28px] overflow-hidden shadow-[0_14px_35px_rgba(0,0,0,0.12)] border border-gray-100 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_22px_45px_rgba(0,102,132,0.25)] bg-black"
                             onclick="openVideoModal('{{ asset('videos/gems-testimonial-2.mp4') }}')">
                            
                            {{-- Poster Image (WebP lightweight) --}}
                            <img src="{{ asset('images/video-story-thumb-2.webp') }}" 
                                 alt="Parent video testimonial at GEMS"
                                 width="540" height="960" loading="lazy" decoding="async"
                                 class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-105">

                            {{-- Subtle Ambient Hover Overlay --}}
                            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/25 transition-colors duration-300 pointer-events-none"></div>

                            {{-- Center Play Button with Soft Pulsing Aura --}}
                            <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-10">
                                <div class="relative flex items-center justify-center">
                                    <span class="absolute w-20 h-20 rounded-full bg-[#00A79D]/30 animate-ping"></span>
                                    <div class="w-16 h-16 rounded-full bg-white/95 backdrop-blur-md flex items-center justify-center text-[#006684] shadow-2xl transition-transform duration-300 group-hover:scale-110">
                                        <svg class="w-7 h-7 translate-x-0.5 text-[#006684]" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Google Reviews Widget Layout -->
                <div class="flex flex-col lg:flex-row items-center justify-center gap-10 lg:gap-16 w-full" data-aos="fade-up"
                    data-aos-delay="100">

                    {{-- Left: Google Summary --}}
                    <div class="flex flex-col items-center justify-center text-center w-full lg:w-1/4 shrink-0">
                        <h3 class="text-2xl font-bold text-[#202124] tracking-wide mb-3"
                            style="font-family: Arial, sans-serif;">EXCELLENT</h3>
                        <div class="flex gap-1 mb-3">
                            @for($i = 0; $i < 5; $i++)
                                <svg viewBox="0 0 24 24" fill="#FBBC04" class="w-8 h-8">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            @endfor
                        </div>
                        <p class="text-[15px] text-[#5f6368] mb-5 font-medium" style="font-family: Arial, sans-serif;">Based on
                            <span class="font-bold text-[#202124]">72 reviews</span>
                        </p>
                        <img loading="lazy" decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" width="100" height="32" loading="lazy"
                            class="h-8">
                    </div>

                    {{-- Right: Cards Carousel/Grid --}}
                    <div class="w-full lg:w-3/4 relative px-2 sm:px-4 lg:px-10">
                        <!-- Carousel Arrows -->
                        <button id="prev-review"
                            class="absolute left-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-white border border-gray-100 rounded-full shadow-md flex items-center justify-center text-gray-500 hover:text-gray-800 z-10 -ml-2 transition-transform hover:scale-110 hidden lg:flex cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                                </path>
                            </svg>
                        </button>
                        <button id="next-review"
                            class="absolute right-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-white border border-gray-100 rounded-full shadow-md flex items-center justify-center text-gray-500 hover:text-gray-800 z-10 -mr-2 transition-transform hover:scale-110 hidden lg:flex cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>

                        <!-- Cards Container -->
                        <div id="reviews-container"
                            class="flex overflow-x-auto gap-4 lg:gap-6 snap-x snap-mandatory pb-6 hide-scrollbar cursor-grab active:cursor-grabbing w-full scroll-smooth">

                            {{-- Card 1 --}}
                            <div
                                class="bg-[#f8f9fa] rounded-[16px] p-6 shrink-0 w-[85%] sm:w-[320px] lg:w-[calc(100%/3-1rem)] snap-center text-left border border-gray-50 shadow-[0_2px_8px_rgba(0,0,0,0.04)] hover:shadow-[0_4px_12px_rgba(0,0,0,0.08)] transition-shadow">
                                <div class="flex justify-between items-start mb-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-[#388e3c] flex items-center justify-center text-white font-bold text-lg">
                                            H</div>
                                        <div>
                                            <div class="font-bold text-[#202124] text-[15px] leading-tight font-sans">Hasna Kp
                                            </div>
                                            <div class="text-[#5f6368] text-[13px] mt-0.5 font-sans">2024-08-12</div>
                                        </div>
                                    </div>
                                    <img loading="lazy" decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg"
                                        alt="Google" width="20" height="20" loading="lazy" class="w-5 h-5 mt-1">
                                </div>
                                <div class="flex items-center gap-1 mb-3">
                                    <div class="flex gap-0.5">
                                        @for($i = 0; $i < 5; $i++)
                                            <svg viewBox="0 0 24 24" fill="#FBBC04" class="w-4 h-4">
                                                <path
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                        @endfor
                                    </div>
                                    <svg class="w-4 h-4 text-[#1a73e8] ml-1" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm-1.8 14.6L6 12.4l1.4-1.4 2.8 2.8 6.4-7.8 1.4 1.4-7.8 9.2z" />
                                    </svg>
                                </div>
                                <p class="text-[#3c4043] text-[14px] leading-[1.6] line-clamp-4 font-sans">
                                    We are extremely happy with the therapy services provide by gems clinic. We have seen a
                                    remarkable improvement in our child over time. He has started trying to speak, his
                                    hyperactivity has reduced significantly, and his eye contact with people has improved a lot
                                </p>
                                <a href="javascript:void(0)"
                                    class="text-[#5f6368] hover:text-gray-900 text-[13px] mt-2 inline-block font-sans">Read
                                    more</a>
                            </div>

                            {{-- Card 2 --}}
                            <div
                                class="bg-[#f8f9fa] rounded-[16px] p-6 shrink-0 w-[85%] sm:w-[320px] lg:w-[calc(100%/3-1rem)] snap-center text-left border border-gray-50 shadow-[0_2px_8px_rgba(0,0,0,0.04)] hover:shadow-[0_4px_12px_rgba(0,0,0,0.08)] transition-shadow">
                                <div class="flex justify-between items-start mb-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-[#1976d2] flex items-center justify-center text-white font-bold text-lg">
                                            F</div>
                                        <div>
                                            <div class="font-bold text-[#202124] text-[15px] leading-tight font-sans">Fathima
                                                va.</div>
                                            <div class="text-[#5f6368] text-[13px] mt-0.5 font-sans">2024-11-04</div>
                                        </div>
                                    </div>
                                    <img loading="lazy" decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg"
                                        alt="Google" width="20" height="20" loading="lazy" class="w-5 h-5 mt-1">
                                </div>
                                <div class="flex items-center gap-1 mb-3">
                                    <div class="flex gap-0.5">
                                        @for($i = 0; $i < 5; $i++)
                                            <svg viewBox="0 0 24 24" fill="#FBBC04" class="w-4 h-4">
                                                <path
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                        @endfor
                                    </div>
                                    <svg class="w-4 h-4 text-[#1a73e8] ml-1" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm-1.8 14.6L6 12.4l1.4-1.4 2.8 2.8 6.4-7.8 1.4 1.4-7.8 9.2z" />
                                    </svg>
                                </div>
                                <p class="text-[#3c4043] text-[14px] leading-[1.6] line-clamp-4 font-sans">
                                    One of the best child development centres in Calicut! Only after reaching here did I truly
                                    feel that my son has received the right guidance and support. The staff are very
                                    professional, caring, and patient.
                                </p>
                                <a href="javascript:void(0)"
                                    class="text-[#5f6368] hover:text-gray-900 text-[13px] mt-2 inline-block font-sans">Read
                                    more</a>
                            </div>

                            {{-- Card 3 --}}
                            <div
                                class="bg-[#f8f9fa] rounded-[16px] p-6 shrink-0 w-[85%] sm:w-[320px] lg:w-[calc(100%/3-1rem)] snap-center text-left border border-gray-50 shadow-[0_2px_8px_rgba(0,0,0,0.04)] hover:shadow-[0_4px_12px_rgba(0,0,0,0.08)] transition-shadow">
                                <div class="flex justify-between items-start mb-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-[#fbc02d] flex items-center justify-center text-white font-bold text-lg">
                                            A</div>
                                        <div>
                                            <div class="font-bold text-[#202124] text-[15px] leading-tight font-sans">Aneesh
                                                meladath.</div>
                                            <div class="text-[#5f6368] text-[13px] mt-0.5 font-sans">2025-01-15</div>
                                        </div>
                                    </div>
                                    <img loading="lazy" decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg"
                                        alt="Google" width="20" height="20" loading="lazy" class="w-5 h-5 mt-1">
                                </div>
                                <div class="flex items-center gap-1 mb-3">
                                    <div class="flex gap-0.5">
                                        @for($i = 0; $i < 5; $i++)
                                            <svg viewBox="0 0 24 24" fill="#FBBC04" class="w-4 h-4">
                                                <path
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                        @endfor
                                    </div>
                                    <svg class="w-4 h-4 text-[#1a73e8] ml-1" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm-1.8 14.6L6 12.4l1.4-1.4 2.8 2.8 6.4-7.8 1.4 1.4-7.8 9.2z" />
                                    </svg>
                                </div>
                                <p class="text-[#3c4043] text-[14px] leading-[1.6] line-clamp-4 font-sans">
                                    The best therapy centre for developmental delayed kids. Excellent teaching and skill
                                    development methods using Kids are very happy because of friendly atmosphere.
                                </p>
                                <a href="javascript:void(0)"
                                    class="text-[#5f6368] hover:text-gray-900 text-[13px] mt-2 inline-block font-sans">Read
                                    more</a>
                            </div>

                            {{-- Card 4 --}}
                            <div
                                class="bg-[#f8f9fa] rounded-[16px] p-6 shrink-0 w-[85%] sm:w-[320px] lg:w-[calc(100%/3-1rem)] snap-center text-left border border-gray-50 shadow-[0_2px_8px_rgba(0,0,0,0.04)] hover:shadow-[0_4px_12px_rgba(0,0,0,0.08)] transition-shadow">
                                <div class="flex justify-between items-start mb-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-[#d32f2f] flex items-center justify-center text-white font-bold text-lg">
                                            R</div>
                                        <div>
                                            <div class="font-bold text-[#202124] text-[15px] leading-tight font-sans">Rahul K.
                                            </div>
                                            <div class="text-[#5f6368] text-[13px] mt-0.5 font-sans">2025-02-28</div>
                                        </div>
                                    </div>
                                    <img loading="lazy" decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg"
                                        alt="Google" width="20" height="20" loading="lazy" class="w-5 h-5 mt-1">
                                </div>
                                <div class="flex items-center gap-1 mb-3">
                                    <div class="flex gap-0.5">
                                        @for($i = 0; $i < 5; $i++)
                                            <svg viewBox="0 0 24 24" fill="#FBBC04" class="w-4 h-4">
                                                <path
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                        @endfor
                                    </div>
                                    <svg class="w-4 h-4 text-[#1a73e8] ml-1" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm-1.8 14.6L6 12.4l1.4-1.4 2.8 2.8 6.4-7.8 1.4 1.4-7.8 9.2z" />
                                    </svg>
                                </div>
                                <p class="text-[#3c4043] text-[14px] leading-[1.6] line-clamp-4 font-sans">
                                    Truly grateful for the progress we've seen. The staff is like family. They've supported us
                                    as much as they've supported our son. Excellent environment.
                                </p>
                                <a href="javascript:void(0)"
                                    class="text-[#5f6368] hover:text-gray-900 text-[13px] mt-2 inline-block font-sans">Read
                                    more</a>
                            </div>

                        </div>
                    </div>
                </div>

                <style>
                    .hide-scrollbar::-webkit-scrollbar {
                        display: none;
                    }

                    .hide-scrollbar {
                        -ms-overflow-style: none;
                        scrollbar-width: none;
                    }
                </style>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const container = document.getElementById('reviews-container');
                        const prevBtn = document.getElementById('prev-review');
                        const nextBtn = document.getElementById('next-review');

                        if (!container) return;

                        // Arrow buttons clicking
                        if (prevBtn) {
                            prevBtn.addEventListener('click', () => {
                                container.scrollBy({ left: -350, behavior: 'smooth' });
                            });
                        }
                        if (nextBtn) {
                            nextBtn.addEventListener('click', () => {
                                container.scrollBy({ left: 350, behavior: 'smooth' });
                            });
                        }

                        // Mouse drag to scroll
                        let isDown = false;
                        let startX;
                        let scrollLeft;

                        container.addEventListener('mousedown', (e) => {
                            isDown = true;
                            container.style.scrollSnapType = 'none'; // disable snap while dragging
                            container.classList.add('active');
                            startX = e.pageX - container.offsetLeft;
                            scrollLeft = container.scrollLeft;
                        });
                        container.addEventListener('mouseleave', () => {
                            isDown = false;
                            container.style.scrollSnapType = 'x mandatory';
                            container.classList.remove('active');
                        });
                        container.addEventListener('mouseup', () => {
                            isDown = false;
                            container.style.scrollSnapType = 'x mandatory';
                            container.classList.remove('active');
                        });
                        container.addEventListener('mousemove', (e) => {
                            if (!isDown) return;
                            e.preventDefault();
                            const x = e.pageX - container.offsetLeft;
                            // Scroll-fast logic
                            const walk = (x - startX) * 2;
                            container.scrollLeft = scrollLeft - walk;
                        });
                    });
                </script>

                <!-- ================= VIDEO THEATER LIGHTBOX MODAL ================= -->
                <div id="video-story-modal" 
                     class="fixed inset-0 z-[99999] hidden items-center justify-center p-3 sm:p-6 bg-black/90 backdrop-blur-md opacity-0 transition-opacity duration-300"
                     role="dialog" 
                     aria-modal="true"
                     aria-label="Parent Video Story Player">
                    
                    {{-- Backdrop Click to Close --}}
                    <div class="absolute inset-0 cursor-pointer" onclick="closeVideoModal()"></div>

                    {{-- Modal Window (Sleek Smartphone Reel Frame) --}}
                    <div class="relative z-10 w-full max-w-[360px] sm:max-w-[400px] aspect-[9/16] max-h-[90vh] bg-black rounded-[32px] overflow-hidden shadow-[0_25px_60px_rgba(0,0,0,0.6)] border border-white/20 flex flex-col items-center justify-center">
                        
                        {{-- Close Button --}}
                        <button onclick="closeVideoModal()" 
                                class="absolute top-4 right-4 z-30 w-10 h-10 rounded-full bg-black/60 hover:bg-black/90 text-white flex items-center justify-center backdrop-blur-md transition-transform hover:scale-110 shadow-lg cursor-pointer"
                                aria-label="Close Video">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>

                        {{-- HTML5 Video Player --}}
                        <video id="modal-video-player"
                               class="w-full h-full object-cover"
                               controls
                               playsinline
                               preload="none">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

                <script>
                    function openVideoModal(videoSrc) {
                        const modal = document.getElementById('video-story-modal');
                        const video = document.getElementById('modal-video-player');
                        
                        if (!modal || !video) return;

                        video.src = videoSrc;
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');
                        
                        requestAnimationFrame(() => {
                            modal.classList.remove('opacity-0');
                            modal.classList.add('opacity-100');
                        });

                        video.play().catch(err => {
                            console.log('Video autoplay deferred:', err);
                        });

                        document.body.style.overflow = 'hidden';
                    }

                    function closeVideoModal() {
                        const modal = document.getElementById('video-story-modal');
                        const video = document.getElementById('modal-video-player');

                        if (!modal || !video) return;

                        video.pause();
                        video.currentTime = 0;
                        video.src = '';

                        modal.classList.remove('opacity-100');
                        modal.classList.add('opacity-0');

                        setTimeout(() => {
                            modal.classList.remove('flex');
                            modal.classList.add('hidden');
                            document.body.style.overflow = '';
                        }, 300);
                    }

                    // Keyboard navigation
                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape') {
                            closeVideoModal();
                        }
                    });
                </script>
            </div>
        </section>

        {{-- ================= FAQ SECTION ================= --}}
        <section class="py-16 lg:py-24 bg-white relative overflow-hidden">
            <div class="doodle-bg-dark"></div>
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mb-12" data-aos="fade-up">Frequently Asked
                    Questions</h2>

                <div class="space-y-4" data-aos="fade-up">
                    <details class="bg-white rounded-xl shadow-sm overflow-hidden group">
                        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                            <h3 class="font-semibold text-lg text-gray-900">How do I know if my child needs therapy?</h3>
                            <span class="text-teal-500 text-2xl group-open:rotate-45 transition-transform duration-300">+</span>
                        </summary>
                        <div class="px-6 pb-6 text-gray-600">
                            If you notice delays in speech, motor skills, social interaction, or behavior compared to other
                            children of the same age, it's best to consult a professional. Early intervention yields the best
                            results.
                        </div>
                    </details>

                    <details class="bg-white rounded-xl shadow-sm overflow-hidden group">
                        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                            <h3 class="font-semibold text-lg text-gray-900">Do you offer online consultations?</h3>
                            <span class="text-teal-500 text-2xl group-open:rotate-45 transition-transform duration-300">+</span>
                        </summary>
                        <div class="px-6 pb-6 text-gray-600">
                            Yes, we offer tele-therapy and online parent counseling sessions for families who cannot visit our
                            center physically.
                        </div>
                    </details>

                    <details class="bg-white rounded-xl shadow-sm overflow-hidden group">
                        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                            <h3 class="font-semibold text-lg text-gray-900">What ages do you treat?</h3>
                            <span class="text-teal-500 text-2xl group-open:rotate-45 transition-transform duration-300">+</span>
                        </summary>
                        <div class="px-6 pb-6 text-gray-600">
                            We work with children from infancy (Early Intervention) up to adolescence (18 years), providing
                            age-appropriate therapies and support.
                        </div>
                    </details>
                </div>
            </div>
        </section>

        {{-- ================= FINAL CTA ================= --}}
        <section class="py-12 bg-white relative overflow-hidden">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="rounded-[30px] sm:rounded-[40px] p-6 lg:p-0 flex flex-col lg:flex-row items-center relative overflow-hidden shadow-lg transition-transform hover:-translate-y-1 duration-500"
                    style="background-color: #EA6F71;" data-aos="zoom-in">

                    {{-- Faint Lightbulb Doodle Background --}}
                    <div
                        class="absolute left-1/2 lg:left-[25%] top-1/2 -translate-x-1/2 -translate-y-1/2 text-white opacity-[0.08] pointer-events-none z-0">
                        <svg class="w-[300px] h-[300px] lg:w-[450px] lg:h-[450px]" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="0.3" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M9 18h6" />
                            <path d="M10 21h4" />
                            <path
                                d="M12 2a7 7 0 0 0-7 7c0 2 1 3.5 2 5 .7.7 1.3 2 1.5 3h5c.2-1 1-2.3 1.5-3 1-1.5 2-3 2-5a7 7 0 0 0-7-7z" />
                            <!-- Subtle rays -->
                            <path stroke-width="0.3"
                                d="M12 0v2 M4.5 4.5l1.5 1.5 M0 12h2 M4.5 19.5l1.5-1.5 M19.5 4.5l-1.5 1.5 M24 12h-2 M19.5 19.5l-1.5-1.5" />
                        </svg>
                    </div>

                    {{-- Left Text Content --}}
                    <div class="lg:w-1/2 relative z-10 w-full text-center lg:text-left px-4 lg:pl-16 py-10 lg:py-16">
                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white mb-8 leading-[1.15] tracking-tight"
                            style="font-family: 'Fredoka', sans-serif;">
                            Let's Connect and<br class="hidden lg:block"> Create Possibilities
                        </h2>
                        <a href="/contact"
                            class="inline-block bg-white text-[#EA6F71] font-bold text-lg px-8 py-4 rounded-full hover:bg-gray-50 transition-all shadow-md hover:shadow-xl transform hover:-translate-y-1">
                            Connect with Us
                        </a>
                    </div>

                    {{-- Right Graphics Content --}}
                    <div
                        class="lg:w-1/2 relative h-[300px] sm:h-[350px] lg:h-[400px] w-full flex items-end justify-center lg:justify-end overflow-hidden mt-6 lg:mt-0 z-10">

                        {{-- Graphic Mask Circle Background --}}
                        <div class="absolute bottom-0 right-0 w-[350px] h-[350px] sm:w-[400px] sm:h-[400px] lg:w-[500px] lg:h-[500px] rounded-full translate-y-[20%] translate-x-[10%] transition-transform duration-700 hover:scale-105 overflow-hidden"
                            style="background-color: rgba(255,255,255,0.15);">
                            <img loading="lazy" decoding="async" src="{{ asset('images/image1.jpg') }}" alt="Child participating in special education activities at GEMS CDC" width="500" height="500" loading="lazy"
                                class="w-full h-full object-cover opacity-90 transition-all duration-700 mix-blend-overlay hover:mix-blend-normal hover:opacity-100">
                        </div>

                        {{-- Green Bubble AIMS CDC --}}
                        <div class="absolute top-[15%] left-[5%] lg:left-[10%] z-20 animate-bounce"
                            style="animation-duration: 4s;">
                            <div
                                class="bg-[#97B41A] text-white font-bold text-lg px-0 py-0 rounded-full shadow-xl relative w-24 h-24 lg:w-28 lg:h-28 flex flex-col items-center justify-center transform -rotate-3 border-4 border-white backdrop-blur-sm">
                                <span>GEMS</span>
                                <span>CDC</span>
                                <!-- Bubble pointer tail -->
                                <div
                                    class="absolute -bottom-1.5 right-5 w-5 h-5 bg-[#97B41A] transform rotate-45 rounded-sm shadow-sm z-[-1] border-b-4 border-r-4 border-white">
                                </div>
                            </div>
                        </div>

                        {{-- Floating abstract dots --}}
                        <div class="absolute top-[30%] right-[15%] w-5 h-5 rounded-full bg-white opacity-50 blur-[2px]"></div>
                        <div class="absolute bottom-[25%] left-[15%] w-8 h-8 rounded-full bg-white opacity-30 blur-sm"></div>
                    </div>
                </div>
            </div>
        </section>
@endsection
