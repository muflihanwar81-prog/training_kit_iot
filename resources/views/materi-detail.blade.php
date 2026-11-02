<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $materi['judul'] }} - Materi IoT Kids</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700;800;900&family=Nunito:wght@700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materi.css') }}">
</head>

<body class="d-flex flex-column min-vh-100" id="materi-detail-page">

    @include('partials.header')

    <section class="materi-banner">
        <div class="container">
            <div>
                <a href="{{ route('materi') }}" class="kembali-link">← Semua materi</a>
                <h1>{{ $materi['judul'] }}</h1>
                <span class="materi-pill">{{ $materi['ringkas'] }}</span>
            </div>
        </div>
    </section>

    <main class="materi-main">
        <div class="container misi-detail">

            @foreach ($materi['bagian'] as $b)
                <section class="misi-box">
                    <h2><span class="step-no">{{ $loop->iteration }}</span> {{ $b['judul'] }}</h2>

                    @foreach ($b['isi'] ?? [] as $p)
                        <p class="materi-teks">{!! $p !!}</p>
                    @endforeach

                    @if (!empty($b['daftar']))
                        <ul class="materi-daftar">
                            @foreach ($b['daftar'] as $d)
                                <li>{!! $d !!}</li>
                            @endforeach
                        </ul>
                    @endif

                    @if (!empty($b['gambar']))
                        <figure class="materi-gambar">
                            <img src="{{ asset('img/materi/' . $b['gambar'][0]) }}" alt="{{ $b['gambar'][1] }}" loading="lazy">
                            <figcaption>{{ $b['gambar'][2] }}</figcaption>
                        </figure>
                    @endif
                </section>
            @endforeach

            <div class="misi-nav">
                @if ($sebelumnya)
                    <a href="{{ route('materi.show', $sebelumnya['slug']) }}" class="btn-nav">← {{ $sebelumnya['judul'] }}</a>
                @else <span></span> @endif

                @if ($berikutnya)
                    <a href="{{ route('materi.show', $berikutnya['slug']) }}" class="btn-nav btn-nav-next">{{ $berikutnya['judul'] }} →</a>
                @else
                    <a href="{{ route('praktik') }}" class="btn-nav btn-nav-next">Mulai Praktik 🚀</a>
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