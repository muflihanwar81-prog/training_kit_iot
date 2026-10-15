<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materi - IoT Kids | Politeknik Negeri Batam</title>

    <!-- Google Fonts: Fredoka & Nunito (sama dengan beranda) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700;800;900&family=Nunito:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS IoT Kids (urutan sama dengan beranda) -->
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materi.css') }}">
</head>

<body class="d-flex flex-column min-vh-100" id="materi-page">

    @include('partials.header')

    <section class="materi-banner">
        <div class="container">
            <div>
                <h1>Materi</h1>
                <span class="materi-pill">6 materi</span>
            </div>
            <svg class="mascot" viewBox="0 0 120 120" aria-hidden="true">
                <path d="M30 26q30-26 60 0" fill="none" stroke="#FFBE65" stroke-width="7" stroke-linecap="round"/>
                <path d="M44 38q16-14 32 0" fill="none" stroke="#FFBE65" stroke-width="7" stroke-linecap="round"/>
                <rect x="8" y="40" width="104" height="74" rx="30" fill="#66C4FF" stroke="#262756" stroke-width="7"/>
                <ellipse cx="38" cy="54" rx="14" ry="6" fill="#fff" opacity=".45"/>
                <circle cx="42" cy="78" r="13" fill="#fff"/><circle cx="78" cy="78" r="13" fill="#fff"/>
                <circle cx="42" cy="80" r="6" fill="#262756"/><circle cx="78" cy="80" r="6" fill="#262756"/>
                <path d="M48 96q12 9 24 0" fill="none" stroke="#262756" stroke-width="5" stroke-linecap="round"/>
            </svg>
        </div>
    </section>

    <main class="materi-main">
        <div class="container">
            <div class="materi-grid">

                {{-- 1. Apa itu IoT? --}}
                <a class="materi-card" href="#">
                    <div class="materi-thumb c-blue"><div class="circle">
                        <svg viewBox="0 0 100 100" fill="none" stroke="#262756" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="50" cy="58" r="30" fill="#66C4FF"/>
                            <ellipse cx="50" cy="58" rx="13" ry="30"/>
                            <path d="M20 58h60M25 42h50M25 74h50"/>
                            <path d="M32 22q18-14 36 0" stroke="#FFBE65"/><path d="M40 28q10-8 20 0" stroke="#FFBE65"/>
                        </svg>
                    </div></div>
                    <h2>Apa itu IoT?</h2>
                </a>

                {{-- 2. Kenal Scratch --}}
                <a class="materi-card" href="#">
                    <div class="materi-thumb c-orange"><div class="circle">
                        <svg viewBox="0 0 100 100" stroke="#262756" stroke-width="4" stroke-linejoin="round" stroke-linecap="round">
                            <path d="M16 16h22a6 6 0 0 1 12 0h14v18H16z" fill="#FFBE65"/>
                            <path d="M16 38h30a6 6 0 0 1 12 0h14v18H16z" fill="#8CB3FF"/>
                            <path d="M16 60h22a6 6 0 0 1 12 0h14v18H16z" fill="#FF7B7B"/>
                            <path d="M28 25h22M28 47h26M28 69h20" stroke-width="3" opacity=".6"/>
                            <path d="M78 22l10 10-10 10M84 70l-6 12 12-2" fill="none"/>
                        </svg>
                    </div></div>
                    <h2>Kenal Scratch</h2>
                </a>

                {{-- 3. Sensor --}}
                <a class="materi-card" href="#">
                    <div class="materi-thumb c-red"><div class="circle">
                        <svg viewBox="0 0 100 100" fill="none" stroke="#262756" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="30" cy="30" r="9" fill="#FFBE65"/>
                            <path d="M30 42v20M30 50l-12 8M30 50l12 8M30 62l-10 20M30 62l10 20"/>
                            <rect x="62" y="30" width="26" height="40" rx="8" fill="#6EE7B7"/>
                            <circle cx="75" cy="50" r="8" fill="#fff"/><circle cx="75" cy="50" r="3" fill="#262756"/>
                            <path d="M54 40q-5 10 0 20M48 34q-10 16 0 32" stroke="#FF7B7B"/>
                        </svg>
                    </div></div>
                    <h2>Sensor</h2>
                </a>

                {{-- 4. Aktuator --}}
                <a class="materi-card" href="#">
                    <div class="materi-thumb c-blue"><div class="circle">
                        <svg viewBox="0 0 100 100" fill="none" stroke="#262756" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M50 18c-15 0-24 10-24 22 0 9 5 14 9 19 2 3 3 5 3 9h24c0-4 1-6 3-9 4-5 9-10 9-19 0-12-9-22-24-22z" fill="#FFBE65"/>
                            <path d="M38 76h24M42 84h16"/>
                            <path d="M44 62V48l6 6 6-6v14" stroke-width="3"/>
                            <path d="M50 4v6M16 18l5 4M84 18l-5 4M8 44h6M86 44h6" stroke="#FF7B7B"/>
                        </svg>
                    </div></div>
                    <h2>Aktuator</h2>
                </a>

                {{-- 5. Kenal CrowPi --}}
                <a class="materi-card" href="#">
                    <div class="materi-thumb c-orange"><div class="circle">
                        <svg viewBox="0 0 100 100" fill="none" stroke="#262756" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="10" y="22" width="80" height="56" rx="10" fill="#6EE7B7"/>
                            <rect x="34" y="34" width="32" height="32" rx="5" fill="#262756"/>
                            <path d="M42 30v4M50 30v4M58 30v4M42 66v4M50 66v4M58 66v4M30 42h4M30 50h4M30 58h4M66 42h4M66 50h4M66 58h4" stroke-width="3"/>
                            <circle cx="20" cy="32" r="3" fill="#FF7B7B"/><circle cx="80" cy="68" r="3" fill="#FFBE65"/>
                            <path d="M50 44l5 6-5 6-5-6z" fill="#FFBE65" stroke="none"/>
                        </svg>
                    </div></div>
                    <h2>Kenal CrowPi</h2>
                </a>

                {{-- 6. Saklar CrowPi --}}
                <a class="materi-card" href="#">
                    <div class="materi-thumb c-red"><div class="circle">
                        <svg viewBox="0 0 100 100" fill="none" stroke="#262756" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="12" y="30" width="76" height="40" rx="20" fill="#6EE7B7"/>
                            <circle cx="68" cy="50" r="13" fill="#fff"/>
                            <path d="M26 50h14M33 43v14" stroke-width="3.5" opacity=".6"/>
                            <path d="M20 16l4 6M50 12v7M80 16l-4 6" stroke="#FFBE65"/>
                            <path d="M30 82h40" stroke="#FF7B7B"/>
                        </svg>
                    </div></div>
                    <h2>Saklar CrowPi</h2>
                </a>

            </div>
        </div>
    </main>

    @include('partials.footer')

    <!-- Toast (dipakai header/footer) -->
    <div id="toast" class="toast-iot">
        <span id="toast-icon">✨</span>
        <span id="toast-message">Pesan IoT Kids</span>
    </div>

    <!-- Bootstrap 5 Bundle JS (untuk tombol menu mobile) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let toastTimer;
        function showToast(message) {
            const t = document.getElementById('toast');
            document.getElementById('toast-message').textContent = message;
            clearTimeout(toastTimer);
            t.classList.add('show');
            toastTimer = setTimeout(() => t.classList.remove('show'), 3200);
        }
    </script>
</body>
</html>