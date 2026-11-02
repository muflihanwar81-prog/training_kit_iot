<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Misi {{ $misi['id'] }}: {{ $misi['judul'] }} - IoT Kids</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700;800;900&family=Nunito:wght@700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materi.css') }}">
</head>

<body class="d-flex flex-column min-vh-100" id="praktik-detail-page">

    @include('partials.header')

    <section class="materi-banner">
        <div class="container">
            <div>
                <a href="{{ route('praktik') }}" class="kembali-link">← Semua misi</a>
                <h1>Misi {{ $misi['id'] }}: {{ $misi['judul'] }}</h1>
                <span class="materi-pill">{{ $misi['deskripsi'] }}</span>
            </div>
        </div>
    </section>

    <main class="materi-main">
        <div class="container misi-detail">

            {{-- 1. Video --}}
            <section class="misi-box">
                <h2><span class="step-no">1</span> Tonton videonya</h2>
                @if ($misi['video'])
                    <div class="ratio ratio-16x9 misi-video">
                        <iframe src="{{ $misi['video'] }}" title="Video Misi {{ $misi['id'] }}" allowfullscreen></iframe>
                    </div>
                @else
                    <div class="misi-video misi-video-kosong">🎬 Video tutorial segera hadir</div>
                @endif
            </section>

            {{-- 2. Persiapan --}}
            <section class="misi-box">
                <h2><span class="step-no">2</span> Siapkan alat</h2>
                <ul class="info-list">
                    <li><strong>Komponen:</strong> {{ $misi['komponen'] }}</li>
                    <li><strong>Pin:</strong> {{ $misi['pin'] }}</li>
                </ul>
                <div class="switch-note">
                    <strong>⚙️ Atur switch dulu!</strong>
                    <ul>
                        @foreach ($misi['switch'] as $s)
                            <li>{{ $s }}</li>
                        @endforeach
                    </ul>
                </div>
            </section>

            {{-- 3. Susun blok --}}
            <section class="misi-box">
                <h2><span class="step-no">3</span> Susun blok programnya</h2>
                <p class="misi-hint">
                    Buka Scratch → tambah ekstensi <strong>Raspberry Pi GPIO</strong>, lalu susun blok seperti di bawah dari atas ke bawah.
                </p>
                <div class="blok-stack">
                    @foreach ($misi['blok'] as [$tipe, $teks, $indent])
                        <div class="blok blok-{{ $tipe }}" style="margin-left: {{ $indent * 28 }}px">
                            <span class="blok-no">{{ $loop->iteration }}</span>{{ $teks }}
                        </div>
                    @endforeach
                </div>
                <div class="blok-legend">
                    <span class="blok-event">Mulai</span>
                    <span class="blok-var">Variabel</span>
                    <span class="blok-gpio">GPIO</span>
                    <span class="blok-control">Kontrol</span>
                    <span class="blok-looks">Tampilan</span>
                    <span class="blok-motion">Gerak</span>
                </div>
            </section>

            {{-- 4. Hasil --}}
            <section class="misi-box misi-hasil">
                <h2><span class="step-no">4</span> Hasil yang diharapkan</h2>
                <p>✅ {{ $misi['hasil'] }}</p>
                @if ($misi['tips'])
                    <p class="misi-tips">💡 {{ $misi['tips'] }}</p>
                @endif
            </section>

            {{-- Navigasi --}}
            <div class="misi-nav">
                @if ($sebelumnya)
                    <a href="{{ route('praktik.show', $sebelumnya['id']) }}" class="btn-nav">← Misi {{ $sebelumnya['id'] }}</a>
                @else <span></span> @endif

                @if ($berikutnya)
                    <a href="{{ route('praktik.show', $berikutnya['id']) }}" class="btn-nav btn-nav-next">Misi {{ $berikutnya['id'] }} →</a>
                @else
                    <a href="{{ route('praktik') }}" class="btn-nav btn-nav-next">Selesai 🎉</a>
                @endif
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