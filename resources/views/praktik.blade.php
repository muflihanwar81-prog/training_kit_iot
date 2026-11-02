<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktik - IoT Kids | Politeknik Negeri Batam</title>

    <!-- Google Fonts: Fredoka & Nunito (sama dengan beranda) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700;800;900&family=Nunito:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS IoT Kids (urutan sama dengan beranda & materi) -->
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materi.css') }}">
</head>

<body class="d-flex flex-column min-vh-100" id="praktik-page">

    @include('partials.header')

    <section class="materi-banner">
        <div class="container">
            <div>
                <h1>Praktik</h1>
                <span class="materi-pill">{{ count($misi) }} misi</span>
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

                @foreach ($misi as $item)
                    @php $warna = ['c-blue', 'c-orange', 'c-red'][$loop->index % 3]; @endphp
                    <a class="materi-card praktik-card" href="{{ route('praktik.show', $item['id']) }}">
                        <div class="materi-thumb {{ $warna }}">
                            <span class="misi-label">Misi {{ $item['id'] }}</span>
                            <div class="circle">
                                <svg viewBox="0 0 100 100" fill="none" stroke="#262756" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                @switch($item['id'])

                                    {{-- 1. Buzzer Bunyi --}}
                                    @case(1)
                                        <path d="M30 48v28a6 6 0 0 0 6 6h28a6 6 0 0 0 6-6V48z" fill="#4B4E96"/>
                                        <ellipse cx="50" cy="48" rx="20" ry="8" fill="#6A6DB8"/>
                                        <ellipse cx="50" cy="48" rx="5" ry="2.5" fill="#262756"/>
                                        <path d="M42 82v8M58 82v8"/>
                                        <path d="M22 38q-8 8 0 16M13 31q-13 15 0 30" stroke="#FFBE65"/>
                                        <path d="M78 38q8 8 0 16M87 31q13 15 0 30" stroke="#FFBE65"/>
                                        <path d="M50 14v14" stroke="#FF7B7B"/><path d="M50 14l9 3" stroke="#FF7B7B"/>
                                        <circle cx="46" cy="30" r="4" fill="#FF7B7B"/>
                                        @break

                                    {{-- 2. Tombol dan Buzzer --}}
                                    @case(2)
                                        <rect x="8" y="54" width="36" height="26" rx="6" fill="#8CB3FF"/>
                                        <rect x="15" y="34" width="22" height="24" rx="9" fill="#FF7B7B"/>
                                        <path d="M21 42v4" stroke="#fff" opacity=".7"/>
                                        <path d="M46 68h12" stroke-dasharray="3 5"/>
                                        <path d="M60 58v18a5 5 0 0 0 5 5h16a5 5 0 0 0 5-5V58z" fill="#4B4E96"/>
                                        <ellipse cx="73" cy="58" rx="13" ry="5" fill="#6A6DB8"/>
                                        <path d="M84 36q6 6 0 12M90 30q11 12 0 24" stroke="#FFBE65"/>
                                        @break

                                    {{-- 3. Kontrol Relay --}}
                                    @case(3)
                                        <rect x="8" y="36" width="48" height="36" rx="7" fill="#66C4FF"/>
                                        <path d="M18 56h12" /><circle cx="34" cy="56" r="3.5" fill="#fff"/>
                                        <path d="M40 56l8-8" />
                                        <circle cx="18" cy="78" r="3" fill="#FFBE65"/><circle cx="32" cy="78" r="3" fill="#FFBE65"/><circle cx="46" cy="78" r="3" fill="#FFBE65"/>
                                        <path d="M56 56h10q6 0 6 6" stroke-dasharray="3 5"/>
                                        <circle cx="78" cy="40" r="13" fill="#FFBE65"/>
                                        <rect x="71" y="53" width="14" height="9" rx="3" fill="#fff"/>
                                        <path d="M78 16v6M62 22l4 4M94 22l-4 4M60 40h-5M96 40h-5" stroke="#FF7B7B"/>
                                        @break

                                    {{-- 4. Deteksi Gerak --}}
                                    @case(4)
                                        <circle cx="22" cy="30" r="8" fill="#FFBE65"/>
                                        <path d="M22 38v20M22 46l-10 8M22 46l11 6M22 58l-8 18M22 58l11 16"/>
                                        <path d="M40 40q5 10 0 20" stroke="#FF7B7B"/><path d="M47 33q10 17 0 34" stroke="#FF7B7B"/>
                                        <rect x="60" y="26" width="32" height="48" rx="9" fill="#6EE7B7"/>
                                        <circle cx="76" cy="46" r="11" fill="#fff"/>
                                        <circle cx="76" cy="46" r="5" fill="#FFBE65"/>
                                        <path d="M68 66h16" stroke-width="3" opacity=".6"/>
                                        @break

                                    {{-- 5. Sensor Miring --}}
                                    @case(5)
                                        <g transform="rotate(-20 50 56)">
                                            <rect x="14" y="42" width="72" height="28" rx="14" fill="#66C4FF"/>
                                            <circle cx="70" cy="56" r="8" fill="#FF7B7B"/>
                                            <path d="M26 52v8" stroke="#fff" opacity=".7"/>
                                        </g>
                                        <path d="M22 28q28-16 56 0" stroke="#FFBE65"/>
                                        <path d="M70 18l9 9-11 4" stroke="#FFBE65"/>
                                        <path d="M28 86h44" />
                                        @break

                                    {{-- 6. Sensor Sentuh (jari menyentuh lingkaran sidik jari) --}}
                                    @case(6)
                                        <circle cx="50" cy="66" r="20" fill="#6EE7B7"/>
                                        <path d="M38 66a12 12 0 0 1 24 0M43 70a7 7 0 0 1 14 0M48 74a2 2 0 0 1 4 0" stroke-width="3"/>
                                        <path d="M41 50V22a9 9 0 0 1 18 0v28z" fill="#FFBE65"/>
                                        <path d="M46 16v6" stroke="#fff" opacity=".7"/>
                                        <path d="M24 42l-8-5M76 42l8-5M22 28h-9M78 28h9" stroke="#FF7B7B"/>
                                        @break

                                    {{-- 7. Motor Getar --}}
                                    @case(7)
                                        <circle cx="50" cy="48" r="23" fill="#8CB3FF"/>
                                        <circle cx="50" cy="48" r="9" fill="#fff"/>
                                        <circle cx="58" cy="40" r="5" fill="#FF7B7B"/>
                                        <path d="M44 70v16M56 70v16"/>
                                        <path d="M20 38q-6 10 0 20M11 32q-12 16 0 32" stroke="#FFBE65"/>
                                        <path d="M80 38q6 10 0 20M89 32q12 16 0 32" stroke="#FFBE65"/>
                                        @break

                                    {{-- 8. LED Berkedip --}}
                                    @case(8)
                                        <path d="M36 58V42a14 14 0 0 1 28 0v16z" fill="#FF7B7B"/>
                                        <rect x="31" y="58" width="38" height="8" rx="3" fill="#FF9B9B"/>
                                        <path d="M43 66v22M57 66v16"/>
                                        <path d="M43 40v-5" stroke="#fff" opacity=".8"/>
                                        <path d="M50 10v8M24 20l6 6M76 20l-6 6M14 42h8M78 42h8" stroke="#FFBE65"/>
                                        @break

                                    {{-- 9. Sensor Suara --}}
                                    @case(9)
                                        <rect x="39" y="14" width="22" height="38" rx="11" fill="#8CB3FF"/>
                                        <path d="M45 26h10M45 33h10M45 40h10" stroke-width="3" opacity=".6"/>
                                        <path d="M30 46q0 20 20 20t20-20"/>
                                        <path d="M50 66v14M38 84h24"/>
                                        <path d="M20 34q-6 10 0 20M11 28q-12 16 0 32" stroke="#FFBE65"/>
                                        <path d="M80 34q6 10 0 20M89 28q12 16 0 32" stroke="#FF7B7B"/>
                                        @break

                                @endswitch
                                </svg>
                            </div>
                            <span class="mulai-badge">
                                Mulai Misi
                                <span class="mulai-icon">
                                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                                </span>
                            </span>
                        </div>
                        <h2>{{ $item['judul'] }}</h2>
                    </a>
                @endforeach

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