<header 
    x-data="{ 
        open: false,
        scrolled: false 
    }" 
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    :class="scrolled ? 'bg-neutral-950/85 backdrop-blur-md border-white/15 shadow-lg shadow-black/20' : 'bg-neutral-950/20 backdrop-blur-md border-white/10'"
    class="fixed top-0 inset-x-0 z-50 border-b transition-all duration-300"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo & Name -->
            <a 
                href="#hero" 
                class="flex items-center gap-3 group focus:outline-none focus-visible:ring-2 focus-visible:ring-terracotta rounded-lg p-1 transition-opacity duration-150" 
                aria-label="Armonia Beranda"
            >
                <img 
                    src="{{ asset('images/logo/logo-armonia.png') }}" 
                    alt="Logo Armonia" 
                    class="h-9 w-auto object-contain transition-transform duration-200 group-hover:scale-105"
                >
                <span class="font-bold text-white text-xl tracking-tight">Armonia</span>
            </a>

            <!-- Desktop Navigation Menu -->
            <nav class="hidden md:flex items-center gap-8" aria-label="Navigasi Utama">
                <a 
                    href="#fitur" 
                    class="text-sm font-medium text-neutral-300 hover:text-white transition-colors duration-150 py-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-terracotta rounded-md"
                >
                    Fitur
                </a>
                <a 
                    href="#showcase" 
                    class="text-sm font-medium text-neutral-300 hover:text-white transition-colors duration-150 py-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-terracotta rounded-md"
                >
                    Showcase
                </a>
                <a 
                    href="#faq" 
                    class="text-sm font-medium text-neutral-300 hover:text-white transition-colors duration-150 py-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-terracotta rounded-md"
                >
                    FAQ
                </a>
            </nav>

            <!-- Desktop CTA Group -->
            <div class="hidden md:flex items-center gap-3">
                <a 
                    href="#masuk" 
                    class="text-sm font-semibold text-neutral-200 hover:text-white px-4 py-2.5 rounded-xl hover:bg-white/10 transition-colors duration-150 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/50"
                >
                    Masuk
                </a>
                <a 
                    href="#mulai" 
                    class="bg-terracotta hover:bg-terracotta-hover text-white text-sm font-semibold px-5 py-2.5 rounded-xl shadow-lg shadow-terracotta/20 transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-terracotta focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-950"
                >
                    Mulai Bersama
                </a>
            </div>

            <!-- Mobile Hamburger Button (Target Tap min 44px) -->
            <div class="flex md:hidden items-center">
                <button 
                    type="button" 
                    @click="open = !open" 
                    :aria-expanded="open.toString()" 
                    aria-label="Buka menu navigasi"
                    class="min-h-[44px] min-w-[44px] p-2.5 rounded-xl text-neutral-300 hover:text-white hover:bg-white/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-terracotta transition-colors flex items-center justify-center"
                >
                    <span class="sr-only">Toggle menu navigasi</span>
                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg x-show="open" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer / Dropdown Panel -->
    <div 
        x-show="open" 
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        @click.outside="open = false"
        @keydown.escape.window="open = false"
        class="md:hidden border-b border-white/10 bg-neutral-950/95 backdrop-blur-xl px-4 pt-3 pb-6 space-y-2 shadow-2xl"
    >
        <div class="flex flex-col space-y-1">
            <a 
                href="#fitur" 
                @click="open = false"
                class="min-h-[44px] flex items-center px-4 rounded-xl text-base font-medium text-neutral-200 hover:text-white hover:bg-white/10 transition-colors"
            >
                Fitur
            </a>
            <a 
                href="#showcase" 
                @click="open = false"
                class="min-h-[44px] flex items-center px-4 rounded-xl text-base font-medium text-neutral-200 hover:text-white hover:bg-white/10 transition-colors"
            >
                Showcase
            </a>
            <a 
                href="#faq" 
                @click="open = false"
                class="min-h-[44px] flex items-center px-4 rounded-xl text-base font-medium text-neutral-200 hover:text-white hover:bg-white/10 transition-colors"
            >
                FAQ
            </a>
        </div>
        <div class="pt-4 border-t border-white/10 flex flex-col gap-3">
            <a 
                href="#masuk" 
                @click="open = false"
                class="min-h-[44px] flex items-center justify-center px-4 rounded-xl text-base font-semibold text-neutral-200 hover:text-white hover:bg-white/10 transition-colors"
            >
                Masuk
            </a>
            <a 
                href="#mulai" 
                @click="open = false"
                class="min-h-[44px] flex items-center justify-center px-5 rounded-xl bg-terracotta hover:bg-terracotta-hover text-white text-base font-semibold shadow-md transition-colors"
            >
                Mulai Bersama
            </a>
        </div>
    </div>
</header>
