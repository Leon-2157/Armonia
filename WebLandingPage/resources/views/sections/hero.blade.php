<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Video -->
    <video 
        class="absolute inset-0 w-full h-full object-cover" 
        autoplay 
        loop 
        muted 
        playsinline
        preload="auto"
    >
        <source src="{{ asset('videos/vt-utama.mp4') }}" type="video/mp4">
        Browser Anda tidak mendukung tag video.
    </video>

    <!-- Warm Dark Contrast Overlay (WCAG AA Compliant > 4.5:1) -->
    <div 
        class="absolute inset-0 bg-gradient-to-t from-neutral-950 via-neutral-950/50 to-neutral-950/70 pointer-events-none" 
        aria-hidden="true"
    ></div>

    <!-- Hero Content (Centered Layout) -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center pt-24 pb-16 flex flex-col items-center">
        <!-- Status Badge (Subtle, purposeful, non-slop) -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/15 backdrop-blur-md text-xs sm:text-sm font-medium text-neutral-200 shadow-xs">
            <span>Aplikasi Finansial untuk Pasangan</span>
        </div>

        <!-- Headline H1 -->
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight leading-[1.15] mt-6 max-w-3xl">
            Kelola Finansial Berdua Tanpa Drama Rasa
        </h1>

        <!-- Subheadline -->
        <p class="text-lg sm:text-xl text-neutral-300 font-normal leading-relaxed mt-6 max-w-2xl text-balance">
            Transparansi pengeluaran, sinkronisasi tabungan bersama, dan pemantauan mood harian dalam satu sentuhan harmonis.
        </p>

        <!-- CTA Action Buttons -->
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 w-full sm:w-auto">
            <!-- Primary CTA -->
            <a 
                href="#mulai" 
                class="w-full sm:w-auto min-h-[48px] px-8 py-3.5 rounded-xl bg-terracotta hover:bg-[#b04e2b] text-white font-semibold text-base shadow-lg shadow-terracotta/25 transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-terracotta focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-950 flex items-center justify-center"
            >
                Coba Armonia Gratis
            </a>

            <!-- Secondary CTA -->
            <a 
                href="#fitur" 
                class="w-full sm:w-auto min-h-[48px] px-8 py-3.5 rounded-xl bg-white/10 hover:bg-white/20 text-white backdrop-blur-sm border border-white/20 font-semibold text-base transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/50 flex items-center justify-center"
            >
                Lihat Cara Kerja
            </a>
        </div>
    </div>
</section>
