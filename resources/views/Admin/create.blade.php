<!DOCTYPE html>

<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class"
            , theme: {
                extend: {
                    "colors": {
                        "secondary": "#7c5454"
                        , "error": "#ba1a1a"
                        , "primary-fixed": "#d1e8dd"
                        , "on-surface": "#1e1b19"
                        , "on-secondary-fixed-variant": "#613d3d"
                        , "surface-bright": "#fff8f6"
                        , "primary": "#4e635a"
                        , "background": "#fff8f6"
                        , "surface-container-lowest": "#ffffff"
                        , "surface-container": "#f5ece9"
                        , "secondary-fixed": "#ffdad9"
                        , "error-container": "#ffdad6"
                        , "surface-container-low": "#fbf2ef"
                        , "on-secondary-container": "#7b5353"
                        , "inverse-primary": "#b5ccc1"
                        , "on-background": "#1e1b19"
                        , "surface-tint": "#4e635a"
                        , "surface-dim": "#e1d8d5"
                        , "on-primary-fixed": "#0b1f18"
                        , "on-primary-fixed-variant": "#374b43"
                        , "secondary-container": "#ffcaca"
                        , "inverse-surface": "#342f2e"
                        , "on-tertiary-fixed": "#1b1c1a"
                        , "surface": "#fff8f6"
                        , "tertiary-fixed": "#e4e2de"
                        , "tertiary": "#5e5e5c"
                        , "secondary-fixed-dim": "#edbaba"
                        , "surface-container-high": "#efe6e3"
                        , "tertiary-fixed-dim": "#c8c6c3"
                        , "on-error": "#ffffff"
                        , "on-error-container": "#93000a"
                        , "outline": "#727875"
                        , "on-tertiary-fixed-variant": "#474744"
                        , "inverse-on-surface": "#f8efec"
                        , "primary-fixed-dim": "#b5ccc1"
                        , "outline-variant": "#c2c8c4"
                        , "on-primary-container": "#263932"
                        , "on-surface-variant": "#424845"
                        , "on-secondary": "#ffffff"
                        , "tertiary-container": "#9f9e9b"
                        , "surface-container-highest": "#e9e1de"
                        , "primary-container": "#8da399"
                        , "surface-variant": "#e9e1de"
                        , "on-tertiary": "#ffffff"
                        , "on-primary": "#ffffff"
                        , "on-secondary-fixed": "#2f1314"
                        , "on-tertiary-container": "#353633"
                    }
                    , "borderRadius": {
                        "DEFAULT": "0.25rem"
                        , "lg": "0.5rem"
                        , "xl": "0.75rem"
                        , "full": "9999px"
                    }
                    , "spacing": {
                        "lg": "48px"
                        , "container-max": "1200px"
                        , "md": "24px"
                        , "sm": "12px"
                        , "xs": "4px"
                        , "xl": "80px"
                        , "gutter": "24px"
                        , "base": "8px"
                    }
                    , "fontFamily": {
                        "body-md": ["Plus Jakarta Sans"]
                        , "headline-md": ["EB Garamond"]
                        , "label-md": ["Plus Jakarta Sans"]
                        , "display-lg-mobile": ["EB Garamond"]
                        , "caption": ["Plus Jakarta Sans"]
                        , "headline-sm": ["EB Garamond"]
                        , "display-lg": ["EB Garamond"]
                        , "body-lg": ["Plus Jakarta Sans"]
                    }
                    , "fontSize": {
                        "body-md": ["16px", {
                            "lineHeight": "1.6"
                            , "fontWeight": "400"
                        }]
                        , "headline-md": ["32px", {
                            "lineHeight": "1.3"
                            , "fontWeight": "500"
                        }]
                        , "label-md": ["14px", {
                            "lineHeight": "1.2"
                            , "letterSpacing": "0.05em"
                            , "fontWeight": "600"
                        }]
                        , "display-lg-mobile": ["36px", {
                            "lineHeight": "1.2"
                            , "fontWeight": "500"
                        }]
                        , "caption": ["12px", {
                            "lineHeight": "1.4"
                            , "fontWeight": "400"
                        }]
                        , "headline-sm": ["24px", {
                            "lineHeight": "1.4"
                            , "fontWeight": "600"
                        }]
                        , "display-lg": ["48px", {
                            "lineHeight": "1.1"
                            , "letterSpacing": "-0.02em"
                            , "fontWeight": "500"
                        }]
                        , "body-lg": ["18px", {
                            "lineHeight": "1.6"
                            , "fontWeight": "400"
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

        .rustic-border {
            border: 1px solid rgba(141, 163, 153, 0.15);
        }

        .soft-shadow {
            box-shadow: 0px 10px 30px rgba(74, 69, 67, 0.05);
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #fff8f6;
        }

        ::-webkit-scrollbar-thumb {
            background: #8da399;
            border-radius: 10px;
        }

    </style>
</head>
<body class="bg-background text-on-surface font-body-md min-h-screen flex flex-col">
    <!-- NavigationDrawer (Hidden on Mobile) -->

    <!-- Main Canvas -->
    <main class="flex-1 flex flex-col min-h-screen">
        <!-- TopAppBar - Sticky Optimized -->
        <header class="w-full sticky top-0 z-40 bg-surface/95 backdrop-blur-sm dark:bg-on-surface border-b border-outline-variant/15 shadow-sm flex items-center justify-between px-md py-sm">
            <div class="flex items-center gap-md">
                <button class="md:hidden text-primary p-xs -ml-xs">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <h1 class="font-headline-md text-headline-sm md:text-headline-md text-primary dark:text-primary-fixed tracking-tight">Miya Creative</h1>
            </div>
            <div class="flex items-center gap-md">
                <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container font-bold overflow-hidden border-2 border-primary/20">
                    <img alt="Admin Profile" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByXWSeB7-UgiOsz7BHlXTzb-wI0xZs9dIFbw78oCaqvinZVUw-Ml_EZWbNUrM5zxMuwrwvXBZcDxjpXzERtqntw6dt78gmYOyQyNstSw4cFvj_GPqQxdkY_XzekmuSCpPVNMERwBKNw19OFHE4xLCe7whwEJH-0AhYQuec7GDK7BHjDRUKXodtGz17Ck-ItkJv5nzxmlnnZib44pOTzmE9oTt2LZbfKTqJATrNTS0gq31H_n2F4xAFEtePD40q_eLZ_EQ-aq81jzU" />
                </div>
            </div>
        </header>
        <!-- Content Area - Mobile Optimized Padding -->
        <div class="max-w-5xl mx-auto w-full px-6 py-lg md:px-lg pb-32 md:pb-lg">
            <div class="mb-lg">
                <h2 class="font-headline-md text-headline-sm md:text-headline-md text-on-surface mb-xs">Add New Masterpiece</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">Curate your shop with the latest handcrafted creations.</p>
            </div>
            <!-- Form - Vertical Stack for Mobile -->
            <form action="/admin" method="POST" enctype="multipart/form-data" class="flex flex-col gap-md">
                @csrf

                <!-- Product Photo -->
                <div class="bg-white rounded-lg p-md rustic-border soft-shadow group">
                    <label class="block font-label-md text-label-md text-primary mb-md">
                        Product Photo Upload
                    </label>

                    <div class="relative aspect-square rounded-lg border-2 border-dashed border-primary/30 bg-surface-container-low flex flex-col items-center justify-center overflow-hidden cursor-pointer hover:bg-surface-container transition-colors group-hover:border-primary/60">

                        <!-- letakkan input di atas overlay dengan z-index -->
                        <input class="absolute inset-0 opacity-0 cursor-pointer z-30" id="photo-upload" type="file" name="photo" accept="image/*">

                        <!-- overlay non-interaktif supaya klik jatuh ke input -->
                        <div class="upload-content absolute inset-0 flex items-center justify-center p-md pointer-events-none">
                            <div id="upload-placeholder" class="text-center pointer-events-none">
                                <span class="material-symbols-outlined text-primary text-5xl mb-md">add_a_photo</span>
                                <p class="font-body-md text-body-md text-primary">Click or drag to upload image</p>
                            </div>

                            <!-- image preview (hidden until file selected) -->
                            <img id="image-preview" class="hidden w-full h-full object-cover absolute inset-0" alt="Preview">
                        </div>

                    </div>
                </div>

                <!-- Basic Info -->
                <div class="bg-white rounded-lg p-md rustic-border soft-shadow flex flex-col gap-md">

                    <!-- Title -->
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface-variant mb-xs">
                            Product Title
                        </label>

                        <input type="text" name="title" placeholder="Vintage Meadow Bouquet" class="w-full bg-white border border-primary/30 rounded-lg px-md py-base">
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface-variant mb-xs">
                            Category
                        </label>

                        <select id="category" name="category" class="w-full bg-white border border-primary/30 rounded-lg px-md py-base">
                            <option value="">Select Category</option>
                            <option value="bouquet">Bouquet</option>
                            <option value="cake">Cake</option>
                            <option value="rustic">Rustic</option>
                            <option value="mahar">Mahar</option>
                            <option value="hampers">Hampers</option>
                            <option value="designundangan">Design Undangan</option>
                            <option value="flowertabel">Flower Table</option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface-variant mb-xs">
                            Price
                        </label>

                        <input type="number" name="price" placeholder="100000" class="w-full bg-white border border-primary/30 rounded-lg px-md py-base">
                    </div>

                    <!-- Menu -->
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface-variant mb-xs">
                            Menu
                        </label>

                        <select id="menu" name="menu" class="w-full bg-white border border-primary/30 rounded-lg px-md py-base">
                            <option value="">Select Menu</option>
                        </select>
                    </div>

                </div>

                <!-- Description -->
                <div class="bg-white rounded-lg p-md rustic-border soft-shadow">
                    <label class="block font-label-md text-label-md text-on-surface-variant mb-xs">
                        Product Description
                    </label>

                    <textarea name="description" rows="5" placeholder="Describe the product..." class="w-full bg-white border border-primary/30 rounded-lg px-md py-base resize-none"></textarea>
                </div>

                <!-- Submit -->
                <button id="save-btn" type="submit" class="px-md py-sm bg-primary text-on-primary rounded-lg">
                    Save Product
                </button>

            </form>
        </div>
        <!-- Sticky Action Bar (Bottom) -->

        <!-- Footer -->
        <footer class="w-full mt-auto bg-surface-container-lowest dark:bg-on-surface border-t border-outline-variant/15 flex flex-col md:flex-row justify-between items-center px-xl py-lg mb-20 md:mb-0">
            <div class="flex flex-col md:items-start items-center gap-xs">
                <span class="font-headline-sm text-headline-sm text-secondary">Miya Creative</span>
                <p class="font-body-md text-body-md text-on-surface-variant/70 text-center md:text-left">© 2024 Miya Creative Artisan Shop. Handcrafted Elegance.</p>
            </div>
            <div class="flex gap-lg mt-md md:mt-0">
                <a class="text-on-surface-variant/70 hover:text-primary transition-colors font-body-md text-body-md underline-offset-4" href="#">Support</a>
                <a class="text-on-surface-variant/70 hover:text-primary transition-colors font-body-md text-body-md underline-offset-4" href="#">Privacy</a>
                <a class="text-on-surface-variant/70 hover:text-primary transition-colors font-body-md text-body-md underline-offset-4" href="#">Terms</a>
            </div>
        </footer>
    </main>
    <script>
        // Semua interaksi JS digabung dan dijalankan setelah DOM siap
        document.addEventListener('DOMContentLoaded', () => {
            // Image preview
            const uploadInput = document.getElementById('photo-upload');
            const uploadPlaceholder = document.getElementById('upload-placeholder');
            const imagePreview = document.getElementById('image-preview');

            if (uploadInput) {
                uploadInput.addEventListener('change', function (e) {
                    const file = e.target.files && e.target.files[0];
                    if (!file) return;
                    const reader = new FileReader();
                    reader.onload = function (event) {
                        if (imagePreview) {
                            imagePreview.src = event.target.result;
                            imagePreview.classList.remove('hidden');
                        }
                        if (uploadPlaceholder) uploadPlaceholder.classList.add('hidden');
                    };
                    reader.readAsDataURL(file);
                });
            }

            // Save button animation + submit
            const saveBtn = document.getElementById('save-btn');
            if (saveBtn) {
                saveBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const form = saveBtn.closest('form');
                    const originalText = saveBtn.innerHTML;
                    saveBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> Saving...';
                    saveBtn.disabled = true;

                    setTimeout(() => {
                        saveBtn.innerHTML = '<span class="material-symbols-outlined">check_circle</span> Product Saved';
                        saveBtn.classList.replace('bg-primary', 'bg-tertiary');
                        setTimeout(() => {
                            saveBtn.innerHTML = originalText;
                            saveBtn.classList.replace('bg-tertiary', 'bg-primary');
                            saveBtn.disabled = false;
                            if (form) form.submit();
                        }, 1200);
                    }, 800);
                });
            }

            // Input glow micro-interaction (safe checks)
            const inputs = document.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    const wrapper = input.parentElement ? input.parentElement.closest('.rustic-border') : null;
                    if (wrapper) wrapper.classList.add('ring-1', 'ring-primary/10');
                });
                input.addEventListener('blur', () => {
                    const wrapper = input.parentElement ? input.parentElement.closest('.rustic-border') : null;
                    if (wrapper) wrapper.classList.remove('ring-1', 'ring-primary/10');
                });
            });

            // CATEGORY -> MENU dynamic
            const categorySelect = document.getElementById('category');
            const menuSelect = document.getElementById('menu');

            const menuOptions = {
                bouquet: [
                    'flower bouquet',
                    'money bouquet',
                    'snack bouquet',
                    'doll bouquet'
                ],
                cake: [
                    'money cake',
                    'snack cake'
                ],
                rustic: [
                    'papan bunga rustic',
                    'hantaran rustic'
                ],
                mahar: [
                    'mahar'
                
                ],
                hampers: [
                    'hampers'
                ],
                designundangan: [
                    'undangan'
                ],
                flowertable: [
                    'flower table'
                ]
            };

            if (categorySelect && menuSelect) {
                categorySelect.addEventListener('change', function () {
                    const selectedCategory = this.value;
                    // reset menu
                    menuSelect.innerHTML = '<option value="">Select Menu</option>';
                    // tampilkan menu jika ada
                    if (selectedCategory && menuOptions[selectedCategory]) {
                        menuOptions[selectedCategory].forEach(function (menu) {
                            const option = document.createElement('option');
                            option.value = menu;
                            option.textContent = menu;
                            menuSelect.appendChild(option);
                        });
                    }
                });
            }
        });
    </script>
</body>
</html>
