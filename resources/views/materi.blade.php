<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materi - IoT Kids | Politeknik Negeri Batam</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700;800;900&family=Nunito:wght@700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
                <span class="materi-pill">{{ count($materi) }} materi</span>
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

                @foreach ($materi as $item)
                    @php $warna = ['c-blue', 'c-orange', 'c-red'][$loop->index % 3]; @endphp
                    <a class="materi-card" href="{{ route('materi.show', $item['slug']) }}">
                        <div class="materi-thumb {{ $warna }}">
                            <div class="circle">
                                <svg viewBox="0 0 100 100" fill="none" stroke="#262756" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                @switch($item['slug'])

                                    {{-- Apa itu IoT? : bola dunia + benda terhubung --}}
                                    @case('apa-itu-iot')
                                        <circle cx="50" cy="52" r="24" fill="#66C4FF"/>
                                        <path d="M26 52h48M50 28q-14 24 0 48M50 28q14 24 0 48" stroke-width="3"/>
                                        <circle cx="18" cy="24" r="8" fill="#FFBE65"/>
                                        <rect x="72" y="16" width="14" height="22" rx="4" fill="#FF7B7B"/>
                                        <circle cx="82" cy="78" r="7" fill="#6EE7B7"/>
                                        <path d="M25 30l8 8M72 36l-8 6M76 74l-8-6" stroke="#FFBE65" stroke-dasharray="3 4"/>
                                        <path d="M14 82q8-8 16 0M18 88q4-4 8 0" stroke="#FF7B7B" stroke-width="3"/>
                                        @break

                                    {{-- Kenal Scratch : kucing + blok --}}
                                    @case('kenal-scratch')
                                        <path d="M18 54l4-24 14 12h16l14-12 4 24q4 24-26 24T18 54z" fill="#FFBE65"/>
                                        <circle cx="38" cy="54" r="3" fill="#262756"/><circle cx="62" cy="54" r="3" fill="#262756"/>
                                        <path d="M46 62l4 3 4-3M50 65v4" stroke-width="3"/>
                                        <path d="M26 62h-12M26 67l-11 4M74 62h12M74 67l11 4" stroke-width="2.5"/>
                                        <rect x="22" y="80" width="26" height="10" rx="3" fill="#0FBD8C"/>
                                        <rect x="46" y="80" width="26" height="10" rx="3" fill="#9966FF"/>
                                        <path d="M50 80v-3h6v3" stroke-width="3"/>
                                        @break

                                    {{-- Sensor : modul sensor + gelombang sinyal --}}
                                    @case('sensor')
                                        <rect x="24" y="48" width="52" height="34" rx="8" fill="#6EE7B7"/>
                                        <path d="M34 82v8M50 82v8M66 82v8"/>
                                        <circle cx="50" cy="44" r="18" fill="#fff"/>
                                        <circle cx="50" cy="44" r="8" fill="#66C4FF"/>
                                        <circle cx="50" cy="44" r="3" fill="#262756" stroke="none"/>
                                        <path d="M18 34q-6 10 0 20M10 28q-12 16 0 32" stroke="#FFBE65"/>
                                        <path d="M82 34q6 10 0 20M90 28q12 16 0 32" stroke="#FFBE65"/>
                                        @break

                                    {{-- Aktuator : roda gigi + panah putar --}}
                                    @case('aktuator')
                                        <circle cx="50" cy="50" r="18" fill="#FFBE65"/>
                                        <circle cx="50" cy="50" r="7" fill="#fff"/>
                                        <path d="M50 22v8M50 70v8M22 50h8M70 50h8M30 30l6 6M64 64l6 6M70 30l-6 6M36 64l-6 6" stroke-width="7"/>
                                        <path d="M14 30q8-18 28-18" stroke="#FF7B7B"/><path d="M34 6l8 6-8 7" stroke="#FF7B7B"/>
                                        <path d="M86 70q-8 18-28 18" stroke="#6EE7B7"/><path d="M66 94l-8-6 8-7" stroke="#6EE7B7"/>
                                        @break

                                    {{-- Kenal CrowPi : koper berlayar --}}
                                    @case('kenal-crowpi')
                                        <path d="M40 30v-8a4 4 0 0 1 4-4h12a4 4 0 0 1 4 4v8" />
                                        <rect x="12" y="30" width="76" height="56" rx="10" fill="#4B4E96"/>
                                        <rect x="22" y="38" width="56" height="30" rx="4" fill="#6EE7B7"/>
                                        <path d="M32 54l6-6 8 8 8-12 14 12" stroke-width="3"/>
                                        <circle cx="30" cy="77" r="3" fill="#FFBE65"/><circle cx="42" cy="77" r="3" fill="#FFBE65"/>
                                        <circle cx="54" cy="77" r="3" fill="#FF7B7B"/><circle cx="66" cy="77" r="3" fill="#8CB3FF"/>
                                        @break

                                    {{-- Saklar CrowPi : saklar DIP --}}
                                    @case('saklar-crowpi')
                                        <rect x="10" y="26" width="80" height="48" rx="8" fill="#4B4E96"/>
                                        <path d="M26 36v28M42 36v28M58 36v28M74 36v28" stroke="#6A6DB8" stroke-width="12"/>
                                        <rect x="21" y="38" width="10" height="12" rx="2" fill="#fff"/>
                                        <rect x="37" y="50" width="10" height="12" rx="2" fill="#fff"/>
                                        <rect x="53" y="38" width="10" height="12" rx="2" fill="#FFBE65"/>
                                        <rect x="69" y="50" width="10" height="12" rx="2" fill="#fff"/>
                                        <path d="M22 86h56" stroke="#FF7B7B"/>
                                        @break

                                @endswitch
                                </svg>
                            </div>
                        </div>
                        <h2>{{ $item['judul'] }}</h2>
                    </a>
                @endforeach

            </div>
        </div>
    </main>

    @include('partials.footer')

    <div id="toast" class="toast-iot">
        <span id="toast-icon">✨</span>
        <span id="toast-message">Pesan IoT Kids</span>
    </div>

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