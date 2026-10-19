<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktik - IoT Kids | Politeknik Negeri Batam</title>
    <meta name="description"
        content="Praktik IoT Kids - Panduan 9 misi belajar Internet of Things yang interaktif dan menyenangkan untuk siswa SD. Politeknik Negeri Batam 2026.">

    <!-- Google Fonts: Fredoka & Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700;800;900&family=Nunito:wght@600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Base Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Halaman Praktik Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/praktik.css') }}">
</head>

<body class="praktik-page d-flex flex-column min-vh-100" id="praktik-page">

    <!-- ================= 1. NAVBAR ================= -->
    <header class="navbar-praktik">
        <div class="navbar-inner">
            <!-- Left: Logo IoT Kids -->
            <a href="{{ route('beranda') }}" class="d-flex align-items-center gap-2 text-decoration-none" title="IoT Kids">
                <!-- Mascot Robot Icon -->
                <svg width="34" height="30" viewBox="0 0 90 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="animate-arc-outer" d="M 22 10 A 26 26 0 0 1 68 10" stroke="#FFBD61" stroke-width="7"
                        stroke-linecap="round" />
                    <path class="animate-arc-inner" d="M 31 18 A 15 15 0 0 1 59 18" stroke="#FFBD61" stroke-width="7"
                        stroke-linecap="round" />
                    <rect x="41" y="20" width="8" height="9" rx="3" fill="#29285F" />
                    <rect x="7" y="26" width="76" height="52" rx="23" fill="#54aff8" stroke="#29285F" stroke-width="5" />
                    <rect x="17" y="34" width="56" height="36" rx="15" fill="#8de6fe" stroke="#29285F" stroke-width="3.5" />
                    <g class="robot-eyes">
                        <circle cx="33" cy="49" r="6.5" fill="#29285F" />
                        <circle cx="35.5" cy="46.5" r="2.2" fill="#fff" />
                        <circle cx="57" cy="49" r="6.5" fill="#29285F" />
                        <circle cx="59.5" cy="46.5" r="2.2" fill="#fff" />
                    </g>
                    <path d="M 41 58 Q 45 64 49 58" stroke="#29285F" stroke-width="3.5" stroke-linecap="round"
                        fill="none" />
                </svg>

                <!-- Text IoT Kids with Cartoon Sticker Stroke -->
                <svg width="105" height="32" viewBox="0 0 135 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <text x="2" y="32" class="svg-sticker-text" fill="#FFBD61" font-size="34">IoT</text>
                    <text x="60" y="32" class="svg-sticker-text" fill="#52a9f8" font-size="34">Kids</text>
                </svg>
            </a>

            <!-- Right: Menu Navigasi Desktop -->
            <nav class="d-none d-md-flex align-items-center gap-3">
                <a href="{{ route('beranda') }}" class="nav-link-item">Beranda</a>
                <a href="{{ route('materi') }}" class="nav-link-item">Materi</a>
                <a href="{{ route('praktik') }}" class="nav-pill-active">Praktik</a>
                <a href="javascript:void(0)" onclick="showToast('Fitur Kuis akan segera hadir! ✨')" class="nav-link-item">Kuis</a>
            </nav>

            <!-- Mobile Hamburger Toggle Button -->
            <button class="btn d-md-none p-1 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNavPraktik"
                aria-label="Menu Navigasi">
                <svg width="26" height="26" fill="none" stroke="#29285F" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-width="3" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Mobile Navigation Menu -->
    <div class="collapse d-md-none border-top bg-white px-4 pb-3" id="mobileNavPraktik">
        <div class="d-flex flex-column gap-2 pt-3">
            <a href="{{ route('beranda') }}" class="nav-link-item">Beranda</a>
            <a href="{{ route('materi') }}" class="nav-link-item">Materi</a>
            <a href="{{ route('praktik') }}" class="nav-pill-active d-inline-block" style="width:max-content;">Praktik</a>
            <a href="javascript:void(0)" onclick="showToast('Fitur Kuis akan segera hadir! ✨')" class="nav-link-item">Kuis</a>
        </div>
    </div>

    <!-- ================= 2. HERO SECTION ================= -->
    <section class="praktik-hero">
        <div class="praktik-hero-container">
            <div class="praktik-hero-text">
                <h1 class="praktik-hero-title">Praktik</h1>
                <span class="praktik-hero-badge">9 misi</span>
            </div>
            <div class="praktik-hero-mascot" aria-hidden="true">
                <!-- Ilustrasi Robot IoT Kids -->
                <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 26q30-26 60 0" stroke="#FFBE65" stroke-width="7" stroke-linecap="round" />
                    <path d="M44 38q16-14 32 0" stroke="#FFBE65" stroke-width="7" stroke-linecap="round" />
                    <rect x="8" y="40" width="104" height="74" rx="30" fill="#66C4FF" stroke="#29285F" stroke-width="7" />
                    <ellipse cx="38" cy="54" rx="14" ry="6" fill="#fff" opacity=".45" />
                    <circle cx="42" cy="78" r="13" fill="#fff" />
                    <circle cx="78" cy="78" r="13" fill="#fff" />
                    <circle cx="42" cy="80" r="6" fill="#29285F" />
                    <circle cx="78" cy="80" r="6" fill="#29285F" />
                    <path d="M48 96q12 9 24 0" stroke="#29285F" stroke-width="5" stroke-linecap="round" />
                </svg>
            </div>
        </div>
    </section>

    <!-- ================= 3. AREA DAFTAR MISI ================= -->
    @php
    $misis = [
        [
            'id' => 1,
            'badge' => 'Misi 1',
            'title' => 'Buzzer Bungi',
            'color' => 'thumb-blue',
            'desc' => 'Belajar memprogram suara buzzer pertama dan menghubungkannya dengan mikrokontroler IoT!'
        ],
        [
            'id' => 2,
            'badge' => 'Misi 2',
            'title' => 'Tombol dan Buzzer',
            'color' => 'thumb-orange',
            'desc' => 'Membuat sakelar bel pintar yang berbunyi ketika tombol ditekan anak-anak.'
        ],
        [
            'id' => 3,
            'badge' => 'Misi 3',
            'title' => 'Kontrol Relay',
            'color' => 'thumb-coral',
            'desc' => 'Mengendalikan modul sakelar relay otomatis untuk menyalakan perangkat elektronik.'
        ],
        [
            'id' => 4,
            'badge' => 'Misi 4',
            'title' => 'Deteksi Gerak',
            'color' => 'thumb-blue',
            'desc' => 'Mendeteksi langkah atau gerakan di sekitar sensor PIR untuk sistem alarm pengaman!'
        ],
        [
            'id' => 5,
            'badge' => 'Misi 5',
            'title' => 'Sensor Miring',
            'color' => 'thumb-orange',
            'desc' => 'Mengenali posisi kemiringan objek otomatis dengan sensor tilt switch.'
        ],
        [
            'id' => 6,
            'badge' => 'Misi 6',
            'title' => 'Sensor Sentuh',
            'color' => 'thumb-coral',
            'desc' => 'Mendeteksi sentuhan jari pintar untuk sakelar modern futuristik.'
        ],
        [
            'id' => 7,
            'badge' => 'Misi 7',
            'title' => 'Motor Getar',
            'color' => 'thumb-blue',
            'desc' => 'Mencoba aktuator motor getar untuk memberikan efek getar seperti ponsel pintar!'
        ],
        [
            'id' => 8,
            'badge' => 'Misi 8',
            'title' => 'LED Berkedip',
            'color' => 'thumb-orange',
            'desc' => 'Membuat kode Scratch untuk menyalakan dan mematikan lampu LED dengan interval waktu.'
        ],
        [
            'id' => 9,
            'badge' => 'Misi 9',
            'title' => 'Sensor Suara',
            'color' => 'thumb-coral',
            'desc' => 'Mendeteksi tepuk tangan atau suara keras di ruangan dengan mikrofon sensor suara!'
        ],
    ];
    @endphp

    <main class="praktik-main">
        <div class="praktik-container">
            <div class="praktik-grid" role="region" aria-label="Katalog 9 Misi Praktik IoT Kids">
                @foreach($misis as $misi)
                <div class="praktik-card" onclick="openMisiModal({{ json_encode($misi) }})" role="button" tabindex="0"
                    aria-label="{{ $misi['badge'] }}: {{ $misi['title'] }}">
                    <!-- Thumbnail Box -->
                    <div class="praktik-card-thumb {{ $misi['color'] }}">
                        <span class="praktik-badge-misi">{{ $misi['badge'] }}</span>
                        <div class="praktik-play-btn" title="Mulai {{ $misi['title'] }}">
                            <!-- Ikon Play: Segitiga Outline Navy -->
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#29285F"
                                stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polygon points="6 3 20 12 6 21 6 3"></polygon>
                            </svg>
                        </div>
                    </div>
                    <!-- Judul Misi -->
                    <div class="praktik-card-title">{{ $misi['title'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- ================= 4. FOOTER ================= -->
    <footer class="praktik-footer">
        <div class="praktik-footer-inner">
            <!-- Left: Logo IoT Kids -->
            <a href="{{ route('beranda') }}" class="d-flex align-items-center gap-2 text-decoration-none" title="IoT Kids">
                <!-- Mascot Robot Icon -->
                <svg width="28" height="24" viewBox="0 0 90 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 22 10 A 26 26 0 0 1 68 10" stroke="#FFBD61" stroke-width="7" stroke-linecap="round" />
                    <path d="M 31 18 A 15 15 0 0 1 59 18" stroke="#FFBD61" stroke-width="7" stroke-linecap="round" />
                    <rect x="41" y="20" width="8" height="9" rx="3" fill="#29285F" />
                    <rect x="7" y="26" width="76" height="52" rx="23" fill="#54aff8" stroke="#29285F" stroke-width="5" />
                    <rect x="17" y="34" width="56" height="36" rx="15" fill="#8de6fe" stroke="#29285F" stroke-width="3.5" />
                    <circle cx="33" cy="49" r="6" fill="#29285F" />
                    <circle cx="35.5" cy="46.5" r="2" fill="#fff" />
                    <circle cx="57" cy="49" r="6" fill="#29285F" />
                    <circle cx="59.5" cy="46.5" r="2.2" fill="#fff" />
                    <path d="M 41 58 Q 45 64 49 58" stroke="#29285F" stroke-width="3.5" stroke-linecap="round" fill="none" />
                </svg>

                <!-- Text IoT Kids with Cartoon Sticker Stroke -->
                <svg width="95" height="28" viewBox="0 0 135 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <text x="2" y="32" class="svg-sticker-text" fill="#FFBD61" font-size="34">IoT</text>
                    <text x="60" y="32" class="svg-sticker-text" fill="#52a9f8" font-size="34">Kids</text>
                </svg>
            </a>

            <!-- Right: Copyright -->
            <p class="praktik-footer-copy">
                Politeknik Negeri Batam 2026
            </p>
        </div>
    </footer>

    <!-- ================= MODAL INTERAKTIF PRAKTIK MISI ================= -->
    <div class="modal fade" id="misiModal" tabindex="-1" aria-labelledby="misiModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 22px; overflow: hidden;">
                <!-- Modal Header -->
                <div class="modal-header border-0 pb-0 pt-4 px-4 align-items-center justify-content-between" style="background:#F3F6FF;">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge" id="misiModalBadge" style="background-color: var(--pr-orange); color: var(--pr-navy); font-family: 'Fredoka', sans-serif; font-weight: 800; font-size: 13px; padding: 6px 14px; border-radius: 50px;">Misi</span>
                        <h2 class="modal-title fs-4 fw-bolder mb-0" id="misiModalTitle" style="color: var(--pr-navy); font-family: 'Fredoka', sans-serif;">Judul Misi</h2>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body p-4" style="background:#F3F6FF;">
                    <!-- Simulasi Video Pembelajaran -->
                    <div id="misiVideoSim" class="rounded-4 p-4 text-center mb-3 text-white d-flex flex-column align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #3167F5, #8DB0FF); min-height: 200px; box-shadow: inset 0 2px 10px rgba(0,0,0,0.1);">
                        <div class="bg-white rounded-circle p-3 mb-2 shadow" style="width: 64px; height: 64px; display: flex; align-items: center; justify-content: center;">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="#29285F">
                                <polygon points="8,5 19,12 8,19" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-1" id="misiPlayerHeading" style="font-family: 'Fredoka', sans-serif;">Video Panduan Misi</h4>
                        <p class="small text-white-50 mb-0">Klik Mulai untuk memutar animasi rangkaian dan langkah kode Scratch.</p>
                    </div>

                    <!-- Deskripsi dan Info Misi -->
                    <div class="bg-white p-3 rounded-4 border" style="border-color: #D4DEFF !important;">
                        <h6 class="fw-bold mb-2" style="color: var(--pr-navy); font-family: 'Fredoka', sans-serif;">🎯 Tujuan Misi:</h6>
                        <p class="mb-3 text-secondary" id="misiModalDesc" style="font-size: 14.5px;"></p>
                        
                        <div class="d-flex flex-wrap gap-2 pt-2 border-top">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill">🧩 Scratch Block</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill">⚡ Kit CrowPi</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill">🤖 IoT Kids</span>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer border-0 pt-0 pb-4 px-4 justify-content-between" style="background:#F3F6FF;">
                    <button type="button" class="btn btn-light fw-bold px-4 py-2 rounded-3 border" data-bs-dismiss="modal" style="color: var(--pr-navy);">
                        Tutup
                    </button>
                    <a href="#" id="misiDetailBtn" class="btn fw-bold px-4 py-2 rounded-3 text-decoration-none"
                        style="background-color: var(--pr-orange); color: var(--pr-navy); box-shadow: 0 4px 0 #E3A33A;">
                        Buka Panduan Lengkap 🚀
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="toast-iot" role="alert" aria-live="polite">
        <span id="toast-icon">✨</span>
        <span id="toast-message">Pesan IoT Kids</span>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let toastTimer;
        function showToast(message, icon = '✨') {
            const t = document.getElementById('toast');
            if (!t) return;
            const msgEl = document.getElementById('toast-message');
            const iconEl = document.getElementById('toast-icon');
            if (msgEl) msgEl.textContent = message;
            if (iconEl) iconEl.textContent = icon;
            clearTimeout(toastTimer);
            t.classList.add('show');
            toastTimer = setTimeout(() => t.classList.remove('show'), 3000);
        }

        function openMisiModal(misi) {
            document.getElementById('misiModalBadge').textContent = misi.badge;
            document.getElementById('misiModalTitle').textContent = misi.title;
            document.getElementById('misiPlayerHeading').textContent = 'Video Praktik: ' + misi.title;
            document.getElementById('misiModalDesc').textContent = misi.desc;
            document.getElementById('misiDetailBtn').href = "{{ url('/praktik') }}/" + misi.id;

            const modal = new bootstrap.Modal(document.getElementById('misiModal'));
            modal.show();
        }
    </script>
</body>

</html>
