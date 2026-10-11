# GEMS CDC: SEO & Performance Handover

This document contains the exact context needed to resume the SEO and Core Web Vitals (CWV) optimization in a new session.

## 📌 Project Context
- **Project:** GEMS Child Development Centre (Pediatric therapy, Autism, Speech Therapy)
- **Tech Stack:** Laravel (Blade Templates), Tailwind CSS, Vanilla JS
- **SEO Niche:** YMYL (Your Money Your Life) - Requires strict E-E-A-T (Experience, Expertise, Authoritativeness, Trustworthiness) compliance.

## ✅ Completed Fixes (Do NOT repeat these)
1. **Layout & UI:** Fixed mobile slider height (`height: auto`), locked `fixed` navbar, reduced mobile sticky CTA size.
2. **Global SEO:** Injected 154-char meta description with "Kozhikode, Kerala". Fixed JSON-LD `@context` Blade rendering bug.
3. **E-E-A-T (Trust):** Replaced emoji footer badges with professional SVG icons (ISO 9001, RCI). Removed legacy `aimscdc.com` emails. Softened absolute medical claims ("Assured Result" -> "Evidence-Based Outcomes").
4. **Rich Snippets:** Injected dynamic `FAQPage` JSON-LD schema into both `home.blade.php` and `training.blade.php`.
5. **Performance:** Removed the 1.1-second artificial `#loading-overlay` from `app.blade.php`.

---

## 🚀 Remaining Tasks (To Execute Next)

### Blocked (Waiting on Client)
- **[ ] Task #1 (E-E-A-T):** Update `team.blade.php`. Need the client to provide specific clinical degrees (MASLP, etc.) and RCI Registration numbers for therapists to inject `Person` schema.

### Ready to Execute (Architecture & Internal Linking)
- **[ ] Task #7 (Broken Link):** In `team.blade.php`, change the "View Career Opportunities" button link from `/contact` to `/career`.
- **[ ] Task #8 (Blind Links):** In `home.blade.php`, inject `aria-label` attributes to the empty SVG icon links in the services section so crawlers can read them.
- **[ ] Task #9 (Anchor Text):** Upgrade generic links (like "Explore Services" or "Read more") across the site to keyword-rich anchors.

### Ready to Execute (Core Web Vitals & Lighthouse)
- **[ ] Task #10 (CLS Fix):** Hardcode `width=""` and `height=""` attributes onto the Navbar logo and Hero Images to prevent Cumulative Layout Shift.
- **[ ] Task #11 (LCP Preload):** Inject `<link rel="preload" as="image" href="...">` for the main hero background image in `home.blade.php`.
- **[ ] Task #12 (Render Blocking):** Remove the duplicate Google Font (`Fredoka`) network request inside `home.blade.php` (it is already loaded globally in `app.blade.php`).
- **[ ] Task #13 (Analytics):** Upgrade the legacy `UA-XXXXXXX-X` script in `app.blade.php` to the modern GA4 standard.

---

## 📋 Copy & Paste Prompt for New Chat

Copy the block below and paste it directly into your new chat to instantly resume work:

```text
Hi! Please read the `seo-handover-prompt.md` file in the root directory. 

We are in the middle of a deep-dive SEO and Core Web Vitals optimization sprint for a Laravel/Tailwind pediatric therapy website (YMYL niche). 

Please acknowledge that you have read the handover document, and then let's immediately group together and execute Tasks #10, #11, and #12 (Core Web Vitals fixes) to clear out the Lighthouse rendering penalties.
```
