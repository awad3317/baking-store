<!DOCTYPE html>
<html class="light" dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'الصفحة الرئيسية - مجتمع واتساب - سويت سبلايز')</title>

    {{-- Fonts --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet" />

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#e6195d",
                        "background-light": "#f8f6f6",
                        "background-dark": "#211116",
                        "dusty-rose": "#b5838d",
                        "dusty-dark": "#88636f",
                        "pale-rose": "#fdf2f4",
                        "warm-brown": "#181113",
                        "gold-shimmer": "#F3E5AB",
                        "gold-accent": "#D4AF37",
                        "whatsapp": "#25D366",
                        "whatsapp-dark": "#128C7E",
                    },
                    fontFamily: {
                        "display": ["Cairo", "sans-serif"],
                        "body": ["Cairo", "sans-serif"],
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                    animation: {
                        'shimmer': 'shimmer 2s infinite linear',
                        'ken-burns': 'ken-burns 20s ease-out infinite alternate',
                        'fade-up': 'fade-up 1s ease-out forwards',
                        'pulse-scale': 'pulse-scale 2s ease-in-out infinite',
                        'progress': 'progress 10s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 3s infinite',
                    },
                    keyframes: {
                        shimmer: {
                            '0%': { backgroundPosition: '-200% 0' },
                            '100%': { backgroundPosition: '200% 0' },
                        },
                        'ken-burns': {
                            '0%': { transform: 'scale(1)' },
                            '100%': { transform: 'scale(1.15)' },
                        },
                        'fade-up': {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        'pulse-scale': {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.15)' },
                        },
                        'progress': {
                            '0%': { transform: 'scaleX(0)' },
                            '100%': { transform: 'scaleX(1)' },
                        },
                        'float': {
                            '0%, 100%': { transform: 'translateY(0) rotate(var(--tw-rotate))' },
                            '50%': { transform: 'translateY(-10px) rotate(var(--tw-rotate))' },
                        }
                    }
                },
            },
        }
    </script>

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Custom Styles --}}
    <style>
        /* Prevent Alpine.js FOUC */
        [x-cloak] {
            display: none !important;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .gold-badge {
            background: linear-gradient(90deg, #D4AF37 0%, #F3E5AB 50%, #D4AF37 100%);
            background-size: 200% auto;
            animation: shimmer 3s infinite linear;
        }

        .delay-100 {
            animation-delay: 100ms;
        }

        .delay-200 {
            animation-delay: 200ms;
        }

        .delay-300 {
            animation-delay: 300ms;
        }

        .delay-400 {
            animation-delay: 400ms;
        }

        .opacity-0-start {
            opacity: 0;
        }

        .glass-premium {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
    </style>

    @stack('styles')
</head>

<body class="bg-background-light dark:bg-background-dark text-warm-brown font-display antialiased">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">

        {{-- Floating Cart Drawer --}}
        @include('partials.cart-drawer')

        {{-- Header --}}
        @include('partials.header')

        {{-- Main Content --}}
        <main class="flex-1">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.footer')
    </div>

    @stack('scripts')
</body>

</html>