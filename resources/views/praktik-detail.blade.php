<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
    $misiData = [
        1 => ['title' => 'Buzzer Bungi', 'color' => '#8DB0FF', 'badge' => 'Misi 1', 'component' => 'Modul Buzzer Pasif/Aktif', 'desc' => 'Belajar memprogram suara buzzer pertama dan menghubungkannya dengan mikrokontroler IoT!'],
        2 => ['title' => 'Tombol dan Buzzer', 'color' => '#FFC15F', 'badge' => 'Misi 2', 'component' => 'Push Button & Buzzer', 'desc' => 'Membuat sakelar bel pintar yang berbunyi ketika tombol ditekan.'],
        3 => ['title' => 'Kontrol Relay', 'color' => '#FF777C', 'badge' => 'Misi 3', 'component' => 'Modul Relay 1 Channel', 'desc' => 'Mengendalikan modul sakelar relay otomatis untuk menyalakan perangkat elektronik.'],
        4 => ['title' => 'Deteksi Gerak', 'color' => '#8DB0FF', 'badge' => 'Misi 4', 'component' => 'Sensor Gerak PIR', 'desc' => 'Mendeteksi langkah atau gerakan di sekitar sensor PIR untuk sistem alarm pengaman!'],
        5 => ['title' => 'Sensor Miring', 'color' => '#FFC15F', 'badge' => 'Misi 5', 'component' => 'Sensor Tilt (Kemiringan)', 'desc' => 'Mengenali posisi kemiringan objek otomatis dengan sensor tilt switch.'],
        6 => ['title' => 'Sensor Sentuh', 'color' => '#FF777C', 'badge' => 'Misi 6', 'component' => 'Capacitive Touch Sensor', 'desc' => 'Mendeteksi sentuhan jari pintar untuk sakelar modern futuristik.'],
        7 => ['title' => 'Motor Getar', 'color' => '#8DB0FF', 'badge' => 'Misi 7', 'component' => 'Vibration Motor Module', 'desc' => 'Mencoba aktuator motor getar untuk memberikan efek getar seperti ponsel pintar!'],
        8 => ['title' => 'LED Berkedip', 'color' => '#FFC15F', 'badge' => 'Misi 8', 'component' => 'Lampu LED & Resistor', 'desc' => 'Membuat kode Scratch untuk menyalakan dan mematikan lampu LED dengan interval waktu.'],
        9 => ['title' => 'Sensor Suara', 'color' => '#FF777C', 'badge' => 'Misi 9', 'component' => 'Sound Sensor Microphone', 'desc' => 'Mendeteksi tepuk tangan atau suara keras di ruangan dengan mikrofon sensor suara!'],
    ];

    $currentId = is_numeric($id) ? (int)$id : 1;
    if ($currentId < 1) $currentId = 1;
    if ($currentId > 9) $currentId = 9;

    $currentMisi = $misiData[$currentId] ?? $misiData[1];
    @endphp

    <title>{{ $currentMisi['badge'] }}: {{ $currentMisi['title'] }} - IoT Kids</title>
    <meta name="description" content="{{ $currentMisi['desc'] }}">

    <!-- Google Fonts: Fredoka & Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700;800;900&family=Nunito:wght@600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/praktik.css') }}">

    <style>
        .detail-card {
            background: #fff;
            border: 1.5px solid #D4DEFF;
            border-radius: 20px;
            padding: 24px;
        }
        .step-pill {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #FFC15F;
            color: #29285F;
            font-weight: 800;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-family: 'Fredoka', sans-serif;
            flex-shrink: 0;
        }
    </style>
</head>

<body class="praktik-page d-flex flex-column min-vh-100" id="praktik-detail-page">

    <!-- Navbar -->
    @include('partials.header')

    <main class="praktik-main py-4">
        <div class="container" style="max-width: 720px;">

            <!-- Back to Praktik -->
            <div class="mb-3">
                <a href="{{ route('praktik') }}" class="d-inline-flex align-items-center gap-2 text-decoration-none fw-bold"
                    style="color: var(--pr-navy); font-family: 'Fredoka', sans-serif; font-size: 15px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#29285F" stroke-width="2.6"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    <span>Semua Praktik</span>
                </a>
            </div>

            <!-- Header Misi -->
            <div class="d-flex align-items-center gap-2 mb-2">
                <span class="badge" style="background-color: var(--pr-orange); color: var(--pr-navy); font-family: 'Fredoka', sans-serif; font-weight: 800; font-size: 14px; padding: 6px 16px; border-radius: 50px;">
                    {{ $currentMisi['badge'] }}
                </span>
                <span class="text-muted fw-bold" style="font-size: 14px;">Praktik IoT Kids</span>
            </div>
            <h1 class="fw-bolder mb-3" style="color: var(--pr-navy); font-family: 'Fredoka', sans-serif; font-size: 34px;">
                {{ $currentMisi['title'] }}
            </h1>

            <!-- Media / Preview Card -->
            <div class="detail-card mb-4 text-center text-white"
                style="background: {{ $currentMisi['color'] }}; height: 210px; display: flex; align-items: center; justify-content: center; border: none;">
                <div class="bg-white rounded-circle p-3 shadow-sm d-flex align-items-center justify-content-center"
                    style="width: 76px; height: 76px;">
                    <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#29285F" stroke-width="2.6"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                    </svg>
                </div>
            </div>

            <!-- Detail Isi Panduan -->
            <div class="detail-card mb-4">
                <h4 class="fw-bold mb-3" style="color: var(--pr-navy); font-family: 'Fredoka', sans-serif;">
                    📖 Ringkasan Misi
                </h4>
                <p style="color: var(--pr-navy); font-size: 15px; line-height: 1.6;">
                    {{ $currentMisi['desc'] }}
                </p>

                <h5 class="fw-bold mt-4 mb-3" style="color: var(--pr-navy); font-family: 'Fredoka', sans-serif;">
                    🧰 Alat & Komponen:
                </h5>
                <ul class="list-unstyled d-flex flex-wrap gap-2">
                    <li class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-bold">📦 Kit IoT CrowPi</li>
                    <li class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-bold">🔌 {{ $currentMisi['component'] }}</li>
                    <li class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-bold">💻 Laptop & Scratch IoT</li>
                </ul>

                <h5 class="fw-bold mt-4 mb-3" style="color: var(--pr-navy); font-family: 'Fredoka', sans-serif;">
                    🚀 Langkah-langkah Praktik:
                </h5>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-start gap-3">
                        <span class="step-pill">1</span>
                        <div>
                            <strong style="color: var(--pr-navy);">Pasang Komponen:</strong>
                            <p class="mb-0 text-muted small">Hubungkan {{ $currentMisi['component'] }} ke pin port IoT pada board CrowPi.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <span class="step-pill">2</span>
                        <div>
                            <strong style="color: var(--pr-navy);">Buka Aplikasi Scratch IoT:</strong>
                            <p class="mb-0 text-muted small">Pilih ekstensi perangkat keras untuk {{ $currentMisi['title'] }}.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <span class="step-pill">3</span>
                        <div>
                            <strong style="color: var(--pr-navy);">Susun Blok Kode & Uji Coba:</strong>
                            <p class="mb-0 text-muted small">Susun blok visual berwarna-warni sesuai panduan dan klik bendera hijau untuk menjalankan program.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Navigasi Antar Misi -->
            <div class="d-flex justify-content-between align-items-center">
                @if($currentId > 1)
                <a href="{{ route('praktik.detail', ['id' => $currentId - 1]) }}"
                    class="btn btn-white border fw-bold px-4 py-2 rounded-3 text-decoration-none"
                    style="color: var(--pr-navy); border-color: var(--pr-navy) !important;">
                    ← Misi Sebelumnya
                </a>
                @else
                <div></div>
                @endif

                @if($currentId < 9)
                <a href="{{ route('praktik.detail', ['id' => $currentId + 1]) }}"
                    class="btn fw-bold px-4 py-2 rounded-3 text-decoration-none"
                    style="background-color: var(--pr-orange); color: var(--pr-navy); box-shadow: 0 4px 0 #E3A33A;">
                    Misi Berikutnya →
                </a>
                @else
                <a href="{{ route('praktik') }}"
                    class="btn fw-bold px-4 py-2 rounded-3 text-decoration-none"
                    style="background-color: var(--pr-orange); color: var(--pr-navy); box-shadow: 0 4px 0 #E3A33A;">
                    Selesai & Ke Daftar Misi 🎉
                </a>
                @endif
            </div>

        </div>
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
