<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'48;
        }

        body {
            background-color: #fff8f6;
            /* Surface/Background from theme */
            scroll-behavior: smooth;
        }

        .bento-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .bento-card:hover {
            transform: translateY(-4px);
            box-shadow: 0px 10px 30px rgba(78, 99, 90, 0.08);
        }

        .nav-dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.2s ease;
        }

    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class"
            , theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed": "#0b1f18"
                        , "inverse-on-surface": "#f8efec"
                        , "surface-bright": "#fff8f6"
                        , "surface-container-lowest": "#ffffff"
                        , "error": "#ba1a1a"
                        , "error-container": "#ffdad6"
                        , "surface-container": "#f5ece9"
                        , "secondary-fixed-dim": "#edbaba"
                        , "on-tertiary": "#ffffff"
                        , "on-error": "#ffffff"
                        , "on-primary-fixed-variant": "#374b43"
                        , "on-background": "#1e1b19"
                        , "on-tertiary-fixed-variant": "#474744"
                        , "inverse-primary": "#b5ccc1"
                        , "surface": "#fff8f6"
                        , "surface-container-low": "#fbf2ef"
                        , "tertiary-fixed": "#e4e2de"
                        , "on-primary": "#ffffff"
                        , "outline": "#727875"
                        , "on-secondary": "#ffffff"
                        , "inverse-surface": "#342f2e"
                        , "surface-tint": "#4e635a"
                        , "on-primary-container": "#263932"
                        , "tertiary-container": "#9f9e9b"
                        , "secondary": "#7c5454"
                        , "primary": "#4e635a"
                        , "on-error-container": "#93000a"
                        , "on-secondary-fixed-variant": "#613d3d"
                        , "on-secondary-fixed": "#2f1314"
                        , "surface-variant": "#e9e1de"
                        , "surface-container-high": "#efe6e3"
                        , "on-tertiary-container": "#353633"
                        , "on-tertiary-fixed": "#1b1c1a"
                        , "secondary-container": "#ffcaca"
                        , "on-surface-variant": "#424845"
                        , "surface-container-highest": "#e9e1de"
                        , "primary-fixed": "#d1e8dd"
                        , "tertiary": "#5e5e5c"
                        , "primary-fixed-dim": "#b5ccc1"
                        , "background": "#fff8f6"
                        , "on-secondary-container": "#7b5353"
                        , "outline-variant": "#c2c8c4"
                        , "surface-dim": "#e1d8d5"
                        , "on-surface": "#1e1b19"
                        , "secondary-fixed": "#ffdad9"
                        , "tertiary-fixed-dim": "#c8c6c3"
                        , "primary-container": "#8da399"
                    }
                    , "borderRadius": {
                        "DEFAULT": "0.25rem"
                        , "lg": "0.5rem"
                        , "xl": "0.75rem"
                        , "full": "9999px"
                    }
                    , "spacing": {
                        "container-max": "1200px"
                        , "xl": "80px"
                        , "base": "8px"
                        , "sm": "12px"
                        , "md": "24px"
                        , "xs": "4px"
                        , "lg": "48px"
                        , "gutter": "24px"
                    }
                    , "fontFamily": {
                        "display-lg": ["EB Garamond"]
                        , "label-md": ["Plus Jakarta Sans"]
                        , "body-md": ["Plus Jakarta Sans"]
                        , "headline-md": ["EB Garamond"]
                        , "body-lg": ["Plus Jakarta Sans"]
                        , "caption": ["Plus Jakarta Sans"]
                        , "display-lg-mobile": ["EB Garamond"]
                        , "headline-sm": ["EB Garamond"]
                    }
                    , "fontSize": {
                        "display-lg": ["48px", {
                            "lineHeight": "1.1"
                            , "letterSpacing": "-0.02em"
                            , "fontWeight": "500"
                        }]
                        , "label-md": ["14px", {
                            "lineHeight": "1.2"
                            , "letterSpacing": "0.05em"
                            , "fontWeight": "600"
                        }]
                        , "body-md": ["16px", {
                            "lineHeight": "1.6"
                            , "fontWeight": "400"
                        }]
                        , "headline-md": ["32px", {
                            "lineHeight": "1.3"
                            , "fontWeight": "500"
                        }]
                        , "body-lg": ["18px", {
                            "lineHeight": "1.6"
                            , "fontWeight": "400"
                        }]
                        , "caption": ["12px", {
                            "lineHeight": "1.4"
                            , "fontWeight": "400"
                        }]
                        , "display-lg-mobile": ["36px", {
                            "lineHeight": "1.2"
                            , "fontWeight": "500"
                        }]
                        , "headline-sm": ["24px", {
                            "lineHeight": "1.4"
                            , "fontWeight": "600"
                        }]
                    }
                }
            , }
        , }

    </script>
</head>
<body class="bg-background text-on-surface font-body-md">
    <!-- Desktop Navigation Header -->
    <header class="relative bg-surface dark:bg-surface-dim w-full sticky top-0 z-40 border-b border-outline/10 shadow-sm">
        <div class="max-w-container-max mx-auto px-4 lg:px-gutter py-4">
            <div class="flex justify-between items-center w-full">
                <div class="flex items-center gap-4">
                    <img alt="Miya Creative Logo" class="h-12 w-12 object-contain" src="img/logo2.png" />
                    <h1 class="font-display-lg text-3xl text-primary dark:text-primary-fixed-dim font-bold tracking-tight">Miya Creative</h1>
                </div>
                <nav class="hidden lg:flex items-center gap-8">
                    <!-- Bouquet Dropdown -->
                    <div class="relative nav-dropdown group">
                        <a class="font-label-md text-primary hover:opacity-70 flex items-center gap-1 cursor-pointer" href="#bouquet-section">
                            BOUQUET <span class="material-symbols-outlined text-[18px]">expand_more</span>
                        </a>
                        <div class="absolute top-full -left-4 pt-4 dropdown-menu">
                            <div class="bg-surface-container-lowest border border-outline/10 shadow-xl rounded-xl p-4 min-w-[180px] space-y-2">
                                <a class="block font-body-md text-on-surface-variant hover:text-primary transition-colors py-1" href="#bouquet-section">Flower Bouquet</a>
                                <a class="block font-body-md text-on-surface-variant hover:text-primary transition-colors py-1" href="#bouquet-section">Money Bouquet</a>
                                <a class="block font-body-md text-on-surface-variant hover:text-primary transition-colors py-1" href="#bouquet-section">Snack Bouquet</a>
                                <a class="block font-body-md text-on-surface-variant hover:text-primary transition-colors py-1" href="#bouquet-section">Doll Bouquet</a>
                            </div>
                        </div>
                    </div>
                    <!-- Cake Dropdown -->
                    <div class="relative nav-dropdown group">
                        <a class="font-label-md text-primary hover:opacity-70 flex items-center gap-1 cursor-pointer" href="#cake-section">
                            CAKE <span class="material-symbols-outlined text-[18px]">expand_more</span>
                        </a>
                        <div class="absolute top-full -left-4 pt-4 dropdown-menu">
                            <div class="bg-surface-container-lowest border border-outline/10 shadow-xl rounded-xl p-4 min-w-[180px] space-y-2">
                                <a class="block font-body-md text-on-surface-variant hover:text-primary transition-colors py-1" href="#cake-section">Money Cake</a>
                                <a class="block font-body-md text-on-surface-variant hover:text-primary transition-colors py-1" href="#cake-section">Snack Cake</a>
                            </div>
                        </div>
                    </div>
                    <!-- Rustic Dropdown -->
                    <div class="relative nav-dropdown group">
                        <a class="font-label-md text-primary hover:opacity-70 flex items-center gap-1 cursor-pointer" href="#rustic-section">
                            RUSTIC <span class="material-symbols-outlined text-[18px]">expand_more</span>
                        </a>
                        <div class="absolute top-full -left-4 pt-4 dropdown-menu">
                            <div class="bg-surface-container-lowest border border-outline/10 shadow-xl rounded-xl p-4 min-w-[220px] space-y-2">
                                <a class="block font-body-md text-on-surface-variant hover:text-primary transition-colors py-1" href="#rustic-section">Papan Bunga Rustic</a>
                                <a class="block font-body-md text-on-surface-variant hover:text-primary transition-colors py-1" href="#rustic-section">Hantaran Rustic</a>
                            </div>
                        </div>
                    </div>
                    <a class="font-label-md text-primary hover:opacity-70" href="#mahar-section">MAHAR</a>
                    <a class="font-label-md text-primary hover:opacity-70" href="#hampers-section">HAMPERS</a>
                    <a class="font-label-md text-primary hover:opacity-70" href="#invitations-section">DESIGN UNDANGAN</a>
                    <a class="font-label-md text-primary hover:opacity-70" href="#flowertable-section">FLOWER TABLE</a>
                </nav>
                <div class="flex items-center gap-4">
                    <span class="material-symbols-outlined text-primary lg:hidden cursor-pointer" id="mobile-menu-trigger">menu</span>
                </div>
            </div>
        </div>
    </header>
    <!-- Mobile menu (hidden by default) -->
    <div id="mobile-menu" class="fixed inset-0 z-60 pointer-events-none" aria-hidden="true">
        <!-- backdrop -->
        <div id="mobile-menu-backdrop" class="absolute inset-0 bg-black/0 opacity-0 transition-opacity duration-300"></div>

        <!-- panel (slides from right). On small screens use full width for better UX -->
        <div id="mobile-menu-panel" class="absolute right-0 top-0 h-full w-80 max-w-full bg-[#fff8f6] shadow-2xl p-6 overflow-y-auto transform translate-x-full transition-transform duration-300 ease-in-out">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                    <img alt="logo" class="h-8 w-8 object-contain" src="img/logo2.png" />
                    <span class="font-display-lg text-lg text-primary font-bold">Miya Creative</span>
                </div>
                <button id="mobile-menu-close" class="text-primary material-symbols-outlined text-2xl p-1 rounded hover:bg-primary/5" aria-label="Close menu">close</button>
            </div>

            <nav class="flex flex-col gap-4 border-t border-outline/10 pt-4">
                <a href="#bouquet-section" class="py-3 px-2 text-lg font-medium text-on-surface hover:text-primary rounded-lg">Bouquet</a>
                <a href="#cake-section" class="py-3 px-2 text-lg font-medium text-on-surface hover:text-primary rounded-lg">Cake</a>
                <a href="#rustic-section" class="py-3 px-2 text-lg font-medium text-on-surface hover:text-primary rounded-lg">Rustic</a>
                <a href="#mahar-section" class="py-3 px-2 text-lg font-medium text-on-surface hover:text-primary rounded-lg">Mahar</a>
                <a href="#hampers-section" class="py-3 px-2 text-lg font-medium text-on-surface hover:text-primary rounded-lg">Hampers</a>
                <a href="#invitations-section" class="py-3 px-2 text-lg font-medium text-on-surface hover:text-primary rounded-lg">Design Undangan</a>
                <a href="#flowertable-section" class="py-3 px-2 text-lg font-medium text-on-surface hover:text-primary rounded-lg">Flower Table</a>
            </nav>

            <div class="mt-6 border-t border-outline/10 pt-4">
                <a href="https://wa.me/6285692591642" class="w-full inline-flex items-center justify-center gap-2 px-4 py-3 bg-primary text-white rounded-lg font-semibold hover:opacity-95">
                    <span class="material-symbols-outlined">chat</span>
                    Pesan Sekarang
                </a>
                <p class="mt-3 text-sm text-on-surface-variant">Butuh bantuan? Hubungi kami lewat WhatsApp.</p>
            </div>
        </div>
    </div>
    <main class="max-w-container-max mx-auto px-4 lg:px-gutter py-xl">
        <!-- Hero Section -->
        <section class="mb-xl text-center">
            <div class="inline-flex items-center gap-2 px-6 py-2 rounded-full bg-primary/10 text-primary font-label-md mb-lg">
               
                ARTISAN CURATION
            </div>
            <h2 class="font-display-lg text-5xl md:text-7xl text-on-surface mb-lg leading-[1.05]">
                Exquisite Collections <br />
                <span class="italic font-normal text-primary">Dengan Sentuhan Elegan</span>
            </h2>
            <p class="font-body-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed text-xl">
                Dari rangkaian bunga segar hingga hantaran pernikahan yang estetik. <br class="hidden md:block" />Kami hadirkan kualitas premium untuk setiap perayaan berharga Anda.
            </p>
        </section>
        <!-- Content Area -->
        <div id="collections-content">

            @foreach($categories as $category)

            <section class="filter-section mb-xl visible" data-section-category="{{ $category }}" id="{{ $category }}-section">

                <div class="flex items-center gap-4 mb-lg">
                    <h2 class="font-headline-md text-headline-md text-primary">
                        {{ ucfirst($category) }}
                    </h2>

                    <div class="h-[1px] flex-1 bg-outline-variant"></div>
                </div>

                <div class="gap-gutter flex overflow-x-auto pb-4 snap-x snap-mandatory scrollbar-hide">

                    @foreach($admins->where('category', $category) as $admin)

                    <div class="bg-surface-container-lowest rounded-lg overflow-hidden bento-card border border-outline/10 flex flex-col min-w-[280px] max-w-[280px] snap-start">

                        <div class="w-full h-72 overflow-hidden rounded-t-lg">
                            <img alt="{{ $admin->title }}" src="/uploads/{{ $admin->photo }}" class="w-full h-full object-cover hover:scale-110 transition duration-500" />
                        </div>

                        <div class="p-md md:p-lg flex flex-col items-start bg-white">

                            <h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">
                                {{ $admin->title }}
                            </h3>

                            <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                {{ $admin->description }}
                            </p>

                            <div class="flex w-full mt-auto flex-col items-start gap-4">

                                <p class="font-label-md text-primary font-bold">
                                    Rp {{ number_format($admin->price, 0, ',', '.') }}
                                </p>

                                <a class="inline-flex items-center gap-2 px-6 py-2 border border-primary text-primary rounded-full font-label-md hover:bg-primary/5 transition-all" href="https://wa.me/6285692591642">
                                    <span class="material-symbols-outlined text-[18px]">
                                        chat
                                    </span>

                                    Pesan via WhatsApp
                                </a>

                            </div>

                        </div>

                    </div>

                    @endforeach

                </div>

            </section>

            @endforeach

        </div>
        <!-- Craftsmanship Philosophy -->
        <section class="bg-surface-container-lowest rounded-3xl p-lg lg:p-xl border border-outline/10 mb-xl">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-headline-md text-4xl mb-lg">The Artisanal Philosophy</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-lg">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">eco</span>
                        </div>
                        <h4 class="font-label-md text-lg mb-2">Sustainably Sourced</h4>
                        <p class="font-body-md text-on-surface-variant text-sm">We prioritize locally grown and eco-friendly materials.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">brush</span>
                        </div>
                        <h4 class="font-label-md text-lg mb-2">Hand-Crafted Design</h4>
                        <p class="font-body-md text-on-surface-variant text-sm">Every piece is uniquely designed by our lead artisan.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">favorite</span>
                        </div>
                        <h4 class="font-label-md text-lg mb-2">Made with Heart</h4>
                        <p class="font-body-md text-on-surface-variant text-sm">Personal touch in every detail for your special moments.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Desktop Footer -->
        <footer class="bg-surface-container-low rounded-t-[40px] p-lg lg:p-xl border-t border-outline/10">
            <div class="max-w-container-max mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-xl">
                    <div class="space-y-6 lg:col-span-1">
                        <div class="flex items-center gap-3">
                            <img alt="Miya Creative Logo" class="h-10 w-10 object-contain" src="img/logo2.png" />
                            <h3 class="font-display-lg text-2xl text-primary font-bold">Miya Creative</h3>
                        </div>
                        <p class="font-body-md text-on-surface-variant leading-relaxed">
                            Creating timeless memories through artisanal floral and event designs since 2021.
                        </p>
                        <div class="flex gap-4">
                            <a class="w-10 h-10 rounded-full border border-outline/20 flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="https://www.instagram.com/miya.creative/?hl=id">
                                <i class="ri-instagram-line text-[20px]"></i>
                            </a>

                            <a class="w-10 h-10 rounded-full border border-outline/20 flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="https://wa.me/6285692591642">
                                <i class="ri-whatsapp-line text-[20px]"></i>
                            </a>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <h4 class="font-label-md text-primary tracking-widest uppercase">Contact Us</h4>
                        <div class="space-y-4">
                            <div class="flex gap-3">
                                <span class="material-symbols-outlined text-primary">location_on</span>
                                <p class="font-body-md text-on-surface-variant text-sm">
                                    Jl. Setia Dharma Teluk Air Karimun,Kepri<br />
                                    Open Daily: 09:00 - 20:00
                                </p>
                            </div>
                            <div class="flex gap-3">
                                <span class="material-symbols-outlined text-primary">phone_iphone</span>
                                <p class="font-body-md text-on-surface-variant text-sm">+62 822-8310-9539</p>
                            </div>
                            <div class="flex gap-3">
                                <span class="material-symbols-outlined text-primary">mail</span>
                                <p class="font-body-md text-on-surface-variant text-sm">azmialaily1506@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6 lg:col-span-1">
                        <h4 class="font-label-md text-primary tracking-widest uppercase">Find Our Studio</h4>
                        <div class="rounded-2xl overflow-hidden h-[180px] border border-outline/10">
                            <iframe allowfullscreen="" height="100%" loading="lazy" src="https://www.google.com/maps?q=Teluk+Air,+Karimun,+Karimun+Regency,+Riau+Islands&output=embed" style="border:0;" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-8 border-t border-outline/10">
                    <p class="font-caption text-on-surface-variant">© 2026 Miya Creative Artisanal Studio. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </main>
    <script>
        // Smooth scroll for nav links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 100
                        , behavior: 'smooth'
                    });
                }
            });
        });

        // Mobile menu toggle (slide + backdrop)
        const mobileTrigger = document.getElementById('mobile-menu-trigger');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobilePanel = document.getElementById('mobile-menu-panel');
        const mobileClose = document.getElementById('mobile-menu-close');
        const mobileBackdrop = document.getElementById('mobile-menu-backdrop');

        function showMenu() {
            if (!mobileMenu || !mobilePanel || !mobileBackdrop) return;
            mobileMenu.classList.remove('pointer-events-none');
            mobileBackdrop.classList.replace('bg-black/0', 'bg-black/40');
            mobileBackdrop.classList.add('opacity-100');
            mobilePanel.classList.replace('translate-x-full', 'translate-x-0');
            mobilePanel.setAttribute('aria-hidden', 'false');
            mobileTrigger?.setAttribute('aria-expanded', 'true');
        }

        function hideMenu() {
            if (!mobileMenu || !mobilePanel || !mobileBackdrop) return;
            mobileBackdrop.classList.replace('bg-black/40', 'bg-black/0');
            mobilePanel.classList.replace('translate-x-0', 'translate-x-full');
            mobilePanel.setAttribute('aria-hidden', 'true');
            mobileTrigger?.setAttribute('aria-expanded', 'false');
            // after transition remove pointer events
            setTimeout(() => mobileMenu.classList.add('pointer-events-none'), 300);
        }

        mobileTrigger?.addEventListener('click', (e) => { e.stopPropagation(); showMenu(); });
        mobileClose?.addEventListener('click', hideMenu);
        mobileBackdrop?.addEventListener('click', hideMenu);
        document.querySelectorAll('#mobile-menu nav a').forEach(a => a.addEventListener('click', hideMenu));
    </script>
</body>
</html>
