<!-- ================= IOT KIDS INTRO ANIMATION / SPLASH SCREEN ================= -->
<link rel="stylesheet" href="{{ asset('css/intro-animation.css') }}">

<div id="iotIntroSplash" role="dialog" aria-modal="true" aria-label="Animasi Pembuka IoT Kids">
    <!-- 1. Background Teknologi Halus & Ceria -->
    <div class="intro-bg-canvas" aria-hidden="true">
        <div class="intro-circuit-grid"></div>
        <div class="intro-float-circle intro-circle-1"></div>
        <div class="intro-float-circle intro-circle-2"></div>
        <div class="intro-float-circle intro-circle-3"></div>

        <!-- Bintang Sparkle Twinkle -->
        <div class="intro-sparkle intro-sparkle-1">✦</div>
        <div class="intro-sparkle intro-sparkle-2">✦</div>
        <div class="intro-sparkle intro-sparkle-3">★</div>
        <div class="intro-sparkle intro-sparkle-4">★</div>

        <!-- Mini Floating Tech Icons -->
        <div class="intro-mini-tech intro-tech-wifi" title="Koneksi IoT">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                <line x1="12" y1="20" x2="12.01" y2="20"></line>
            </svg>
        </div>
        <div class="intro-mini-tech intro-tech-chip" title="Microcontroller">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                <rect x="9" y="9" width="6" height="6"></rect>
                <line x1="9" y1="1" x2="9" y2="4"></line>
                <line x1="15" y1="1" x2="15" y2="4"></line>
                <line x1="9" y1="20" x2="9" y2="23"></line>
                <line x1="15" y1="20" x2="15" y2="23"></line>
            </svg>
        </div>
        <div class="intro-mini-tech intro-tech-code" title="Coding">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="16 18 22 12 16 6"></polyline>
                <polyline points="8 6 2 12 8 18"></polyline>
            </svg>
        </div>
    </div>

    <!-- 2. Hero Stage: Logo Utama & Tagline -->
    <div class="intro-stage">
        <!-- Logo IoT Kids Composite (Menggunakan file asli yang dipotong presisi) -->
        <div class="intro-logo-composite">
            
            <!-- Tahap 2: Bagian Robot Mascot -->
            <div class="intro-robot-unit">
                <!-- Cahaya Biru Lembut di Belakang Robot -->
                <div class="intro-robot-glow"></div>

                <!-- Gambar Asli Karakter Robot IoT Kids -->
                <img src="{{ asset('images/logo-part-robot.png') }}" class="intro-robot-img" alt="Robot Maskot IoT Kids">

                <!-- Efek Sinyal Wi-Fi Menyala dari Bawah ke Atas -->
                <div class="intro-wifi-indicator" aria-hidden="true">
                    <div class="wifi-wave-lower"></div>
                    <div class="wifi-wave-upper"></div>
                </div>

                <!-- Wi-Fi Pulse Ring -->
                <div class="intro-wifi-ripple" aria-hidden="true"></div>

                <!-- Efek Kedipan Mata Halus -->
                <div class="intro-eyes-blink" aria-hidden="true">
                    <div class="intro-eyelid blink-left"></div>
                    <div class="intro-eyelid blink-right"></div>
                </div>
            </div>

            <!-- Tahap 3: Bagian Tulisan "IoT Kids" dengan Animasi Stagger -->
            <div class="intro-text-unit">
                <!-- Tulisan "IoT" (Kuning-Oranye) -->
                <div class="intro-word-iot">
                    <img src="{{ asset('images/logo-part-iot.png') }}" class="intro-iot-img" alt="IoT">
                </div>

                <!-- Tulisan "Kids" (Biru Muda) -->
                <div class="intro-word-kids">
                    <img src="{{ asset('images/logo-part-kids.png') }}" class="intro-kids-img" alt="Kids">
                </div>
            </div>

        </div>

        <!-- Tahap 4: Tagline "Belajar IoT Jadi Seru!" -->
        <div class="intro-tagline-wrap">
            <div class="intro-tagline-badge">
                <span class="intro-tagline-sparkle">✨</span>
                <span>Belajar IoT Jadi Seru!</span>
                <span class="intro-tagline-sparkle">🚀</span>
            </div>
        </div>
    </div>

    <!-- Tombol Lewati untuk Ramah Pengguna -->
    <button type="button" class="intro-skip-btn" id="introSkipBtn" title="Lewati animasi intro">
        <span>Lewati</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="5 4 15 12 5 20 5 4"></polygon>
            <line x1="19" y1="5" x2="19" y2="19"></line>
        </svg>
    </button>

    <!-- Progress Bar Indikator Durasi 3.2s -->
    <div class="intro-progress-bar" aria-hidden="true"></div>
</div>

<script src="{{ asset('js/intro-animation.js') }}"></script>
