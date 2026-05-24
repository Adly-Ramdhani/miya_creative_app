<!DOCTYPE html>

<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Miya Creative | Inventory Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class"
            , theme: {
                extend: {
                    "colors": {
                        "error-container": "#ffdad6"
                        , "surface-variant": "#e9e1de"
                        , "outline-variant": "#c2c8c4"
                        , "on-secondary-fixed": "#2f1314"
                        , "surface-container": "#f5ece9"
                        , "on-background": "#1e1b19"
                        , "on-error-container": "#93000a"
                        , "background": "#fff8f6"
                        , "surface-container-high": "#efe6e3"
                        , "tertiary-fixed-dim": "#c8c6c3"
                        , "on-tertiary-fixed": "#1b1c1a"
                        , "inverse-on-surface": "#f8efec"
                        , "surface-dim": "#e1d8d5"
                        , "error": "#ba1a1a"
                        , "secondary-container": "#ffcaca"
                        , "on-primary": "#ffffff"
                        , "tertiary-fixed": "#e4e2de"
                        , "primary-container": "#8da399"
                        , "on-primary-container": "#263932"
                        , "primary-fixed": "#d1e8dd"
                        , "inverse-primary": "#b5ccc1"
                        , "surface-container-highest": "#e9e1de"
                        , "secondary": "#7c5454"
                        , "tertiary-container": "#9f9e9b"
                        , "surface-container-lowest": "#ffffff"
                        , "on-tertiary": "#ffffff"
                        , "on-secondary": "#ffffff"
                        , "secondary-fixed": "#ffdad9"
                        , "surface-tint": "#4e635a"
                        , "surface-container-low": "#fbf2ef"
                        , "primary-fixed-dim": "#b5ccc1"
                        , "on-secondary-container": "#7b5353"
                        , "on-error": "#ffffff"
                        , "outline": "#727875"
                        , "inverse-surface": "#342f2e"
                        , "on-tertiary-container": "#353633"
                        , "on-primary-fixed": "#0b1f18"
                        , "surface-bright": "#fff8f6"
                        , "surface": "#fff8f6"
                        , "primary": "#4e635a"
                        , "on-surface-variant": "#424845"
                        , "on-primary-fixed-variant": "#374b43"
                        , "on-surface": "#1e1b19"
                        , "on-secondary-fixed-variant": "#613d3d"
                        , "secondary-fixed-dim": "#edbaba"
                        , "tertiary": "#5e5e5c"
                        , "on-tertiary-fixed-variant": "#474744"
                    }
                    , "borderRadius": {
                        "DEFAULT": "0.25rem"
                        , "lg": "1rem"
                        , "xl": "1.5rem"
                        , "full": "9999px"
                    }
                    , "spacing": {
                        "sm": "12px"
                        , "md": "24px"
                        , "xs": "4px"
                        , "lg": "48px"
                        , "gutter": "24px"
                        , "xl": "80px"
                        , "container-max": "1200px"
                        , "base": "8px"
                    }
                    , "fontFamily": {
                        "display-lg-mobile": ["EB Garamond"]
                        , "caption": ["Plus Jakarta Sans"]
                        , "body-lg": ["Plus Jakarta Sans"]
                        , "label-md": ["Plus Jakarta Sans"]
                        , "body-md": ["Plus Jakarta Sans"]
                        , "headline-sm": ["EB Garamond"]
                        , "headline-md": ["EB Garamond"]
                        , "display-lg": ["EB Garamond"]
                    }
                    , "fontSize": {
                        "display-lg-mobile": ["36px", {
                            "lineHeight": "1.2"
                            , "fontWeight": "500"
                        }]
                        , "caption": ["12px", {
                            "lineHeight": "1.4"
                            , "fontWeight": "400"
                        }]
                        , "body-lg": ["18px", {
                            "lineHeight": "1.6"
                            , "fontWeight": "400"
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
                        , "headline-sm": ["24px", {
                            "lineHeight": "1.4"
                            , "fontWeight": "600"
                        }]
                        , "headline-md": ["32px", {
                            "lineHeight": "1.3"
                            , "fontWeight": "500"
                        }]
                        , "display-lg": ["48px", {
                            "lineHeight": "1.1"
                            , "letterSpacing": "-0.02em"
                            , "fontWeight": "500"
                        }]
                    }
                }
            , }
        , }

    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #fff8f6;
        }

        ::-webkit-scrollbar-thumb {
            background: #c2c8c4;
            border-radius: 10px;
        }

        .bento-card {
            background: #ffffff;
            border: 1px solid rgba(194, 200, 196, 0.25);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .bento-card:hover {
            transform: translateY(-4px);
            box-shadow: 0px 10px 30px rgba(74, 69, 67, 0.05);
        }

        body {
            min-height: max(884px, 100dvh);
        }

    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col md:flex-row">
    <!-- Main Content Canvas -->
    <main class="flex-1 flex flex-col min-h-screen">
        <!-- TopAppBar (Shared Component) -->
        <header class="flex items-center justify-between px-md py-sm w-full bg-surface dark:bg-on-surface sticky top-0 z-40 shadow-sm border-b border-outline-variant/15">
            <div class="flex items-center gap-sm">
                <button class="md:hidden p-2 hover:bg-primary-container/10 transition-colors">
                    <span class="material-symbols-outlined" data-icon="menu">menu</span>
                </button>
                <h1 class="font-headline-md text-headline-md text-primary dark:text-primary-fixed tracking-tight">Miya Creative</h1>
            </div>
            <div class="flex items-center gap-md">
                <div class="hidden md:flex gap-md">
                    <a class="font-label-md text-label-md text-primary dark:text-primary-fixed font-bold border-b-2 border-primary py-xs" href="#">Dashboard</a>
                </div>
<div class="flex items-center gap-3">
    
    <!-- Profile -->
    <div class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center overflow-hidden border border-outline-variant/30">
        <img 
            alt="Admin Profile" 
            class="w-full h-full object-cover" 
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfkVl03ONrVyWs_t5Fp8Au2ZxiAVWjkHC0Igy8DhuPg7OEIukGuDkaiPK4cYACoiWCKRQ2Q0lSKm43H72fPLOsXyZUHm26_dPbxWkMOFK6jWkEaT_MARbYbgdH1Q6PPqsGHvNX23yrUAimoPb7H81ZKTUxRVcgIZACq29-0H2PLNaxb1Sg94-hUmJFwYYUkCYvY-cIlOP5KEcRd3X3Q1WPNkS_iB8_6koz8-VEEnxMb5pTLjSXJjFxlI2FxtIX0EYeWZXcxoKfGt8" 
        />
    </div>

    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button 
            type="submit"
            class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition"
        >
            Logout
        </button>
    </form>

</div>
            </div>
        </header>
        <section class="p-md md:p-lg lg:p-xl max-w-container-max mx-auto w-full space-y-lg">
            <!-- Dashboard Welcome & Quick Actions -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-md">
                <div>
                    <h2 class="font-headline-md text-headline-md text-on-surface mb-xs">Welcome back, Miya.</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Your creative sanctuary is thriving today.</p>
                </div>
                <div class="flex gap-sm">
                    <button class="px-md py-sm bg-primary text-on-primary font-label-md text-label-md rounded-full shadow-sm hover:translate-y-[-2px] transition-all flex items-center gap-xs">
                        <a href="/admin/create" class="px-md py-sm bg-primary text-on-primary font-label-md text-label-md rounded-full shadow-sm hover:translate-y-[-2px] transition-all flex items-center gap-xs inline-flex">
                            <span class="material-symbols-outlined text-[20px]" data-icon="add">
                                add
                            </span>

                            Add New Product
                        </a>
                </div>
            </div>
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
                <div class="bento-card p-md rounded-xl flex items-center gap-md">
                    <div class="w-14 h-14 rounded-full bg-primary-fixed flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[32px]" data-icon="payments">payments</span>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant">Total Sales</p>
                        <h3 class="font-headline-sm text-headline-sm">$12,840.00</h3>
                        <p class="font-caption text-caption text-primary flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]" data-icon="trending_up">trending_up</span> 12% increase
                        </p>
                    </div>
                </div>
                <div class="bento-card p-md rounded-xl flex items-center gap-md">
                    <div class="w-14 h-14 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-[32px]" data-icon="inventory">inventory</span>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant">Total Stock Items</p>
                        <h3 class="font-headline-sm text-headline-sm">452</h3>
                        <p class="font-caption text-caption text-secondary flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]" data-icon="warning">warning</span> 12 Low Stock
                        </p>
                    </div>
                </div>
                <div class="bento-card p-md rounded-xl flex items-center gap-md">
                    <div class="w-14 h-14 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary">
                        <span class="material-symbols-outlined text-[32px]" data-icon="palette">palette</span>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant">New Products</p>
                        <h3 class="font-headline-sm text-headline-sm">12</h3>
                        <p class="font-caption text-caption text-tertiary">This month</p>
                    </div>
                </div>
            </div>
            <!-- Expanded Active Product Inventory Section -->
            <div class="flex flex-col gap-md">
                <div class="flex items-center justify-between">
                    <h4 class="font-headline-sm text-headline-sm">Active Product Inventory</h4>
                    <div class="flex items-center gap-md">
                        <button class="text-primary font-label-md text-label-md hover:underline decoration-primary underline-offset-4">Filter</button>
                        <button class="text-primary font-label-md text-label-md hover:underline decoration-primary underline-offset-4">See All</button>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-sm">

                    @foreach($admins as $admin)
                    <div class="bento-card p-md rounded-lg flex flex-col md:flex-row items-start md:items-center gap-md group">
                        <div class="w-full md:w-32 h-32 md:h-32 bg-surface-container-highest rounded-lg overflow-hidden flex-shrink-0">
                            <img src="/uploads/{{ $admin->photo }}" alt="{{ $admin->title }}" class="w-full h-full object-cover" />
                        </div>

                        <div class="flex-1 space-y-xs w-full">

                            <div class="flex items-center justify-between">
                                <h5 class="font-headline-sm text-headline-sm text-on-surface">
                                    {{ $admin->title }}
                                </h5>

                                <span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed font-caption text-caption rounded-full">
                                    {{ $admin->category }}
                                </span>
                            </div>

                            <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                                {{ $admin->description }}
                            </p>

                            <div class="flex items-center justify-between pt-base">

                                <div class="flex items-baseline gap-xs">
                                    <span class="font-headline-sm text-headline-sm text-primary">
                                       Rp {{ number_format($admin->price, 0, ',', '.') }}
                                    </span>

                                    <span class="font-caption text-caption text-on-surface-variant">
                                        {{ $admin->menu }}
                                    </span>
                                </div>

                                <div class="flex gap-sm">

                                    <a href="/admin/edit/{{ $admin->id }}" class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary-container/10 rounded-full transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">
                                            edit
                                        </span>
                                    </a>

                                    <form action="/admin/delete/{{ $admin->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="p-2 text-on-surface-variant hover:text-error hover:bg-error-container/10 rounded-full transition-colors">
                                            <span class="material-symbols-outlined text-[20px]">
                                                delete
                                            </span>
                                        </button>
                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Footer (Shared Component) -->
        <footer class="mt-auto px-xl py-lg w-full bg-surface-container-lowest dark:bg-on-surface border-t border-outline-variant/15 flex flex-col md:flex-row justify-between items-center gap-md pb-24 md:pb-lg">
            <div class="flex flex-col items-center md:items-start">
                <span class="font-headline-sm text-headline-sm text-secondary">Miya Creative</span>
                <p class="font-body-md text-body-md text-on-surface-variant/70 mt-1">© 2024 Miya Creative Artisan Shop. Handcrafted Elegance.</p>
            </div>
            <div class="flex gap-lg">
                <a class="font-body-md text-body-md text-on-surface-variant/70 hover:text-primary transition-colors underline-offset-4" href="#">Support Desk</a>
                <a class="font-body-md text-body-md text-on-surface-variant/70 hover:text-primary transition-colors underline-offset-4" href="#">Privacy Policy</a>
                <a class="font-body-md text-body-md text-on-surface-variant/70 hover:text-primary transition-colors underline-offset-4" href="#">Merchant Terms</a>
            </div>
        </footer>
    </main>
    <!-- Mobile Bottom Navigation (Visible only on mobile) -->
    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-surface border-t border-outline-variant/15 flex justify-around p-sm z-50 shadow-[0_-5px_15px_rgba(0,0,0,0.05)]">
        <button class="flex flex-col items-center text-primary font-bold">
            <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
            <span class="text-[10px]">Dashboard</span>
        </button>
        <button class="flex flex-col items-center text-on-surface-variant/70">
            <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
            <span class="text-[10px]">Gallery</span>
        </button>
        <button class="flex flex-col items-center text-on-surface-variant/70">
            <span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
            <span class="text-[10px]">Orders</span>
        </button>
        <button class="flex flex-col items-center text-on-surface-variant/70">
            <span class="material-symbols-outlined" data-icon="settings">settings</span>
            <span class="text-[10px]">Settings</span>
        </button>
    </nav>
    <script>
        // Micro-interaction for Stats Cards
        document.querySelectorAll('.bento-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.transform = 'scale(1.1) rotate(5deg)';
                    icon.style.transition = 'transform 0.3s ease';
                }
            });
            card.addEventListener('mouseleave', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.transform = 'scale(1) rotate(0deg)';
                }
            });
        });

    </script>
</body>
</html>
