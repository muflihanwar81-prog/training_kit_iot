<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda - IoT Kids | Politeknik Negeri Batam</title>
    <meta name="description"
        content="IoT Kids - Platform belajar Internet of Things untuk anak-anak. Politeknik Negeri Batam 2026.">

    <!-- Google Fonts: Fredoka (Playful, chunky, rounded) & Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700;800;900&family=Nunito:wght@700;800;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IoT Kids Animations CSS -->
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">

    <!-- IoT Kids Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Kartu praktik (sama dengan halaman Praktik) -->
    <link rel="stylesheet" href="{{ asset('css/materi.css') }}">
</head>

<body class="d-flex flex-column min-vh-100" id="beranda">

    <!-- ================= 1. NAVBAR / HEADER ================= -->
    @include('partials.header')


    <!-- ================= 2. HERO SECTION ================= -->
    <section class="hero text-white py-5 user-select-none">
        <div class="container py-lg-2">
            <div class="row align-items-center">

                <!-- LEFT COLUMN: Headline & CTA -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <!-- Badge -->
                    <div class="hero-badge mb-3">Tanpa pengalaman pun bisa!</div>

                    <!-- Title "Ayo Main IoT!" -->
                    <h1 class="hero-title mb-2">Ayo Main</h1>
                    <div class="mb-4">
                        <span class="hero-iot-box">IoT!</span>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="{{ route('materi') }}" class="btn-hero-orange">
                            Ayo Mulai!
                        </a>
                        {{-- Langsung ke Video Misi 1 di halaman Praktik --}}
                        <a href="{{ route('praktik') }}#misi-1" class="btn-hero-white">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="#29285F">
                                <circle cx="12" cy="12" r="11" fill="#fff" stroke="#29285F" stroke-width="2" />
                                <polygon points="10,8 16,12 10,16" fill="#29285F" />
                            </svg>
                            Tonton Misi 1
                        </a>
                    </div>

                    <!-- Little Star Decoration -->
                    <div class="mt-4 ps-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#FFBD61" class="animate-sparkle"
                            style="opacity:.95;">
                            <polygon points="12,2 15,9 22,9.5 17,14.5 18.5,22 12,18 5.5,22 7,14.5 2,9.5 9,9" />
                        </svg>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Computer Monitor & Robot Mascot Illustration -->
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end">
                    <div class="position-relative" style="width: 100%; max-width: 540px; height: 380px;">

                        <!-- Peach/Orange Circular Disk in Background -->
                        <div class="position-absolute rounded-circle"
                            style="width: 310px; height: 310px; background-color: #FFBD61; top: 16px; right: 28px; z-index: 1;">
                        </div>

                        <!-- Top-Left Floating Circle: Lightbulb Icon -->
                        <div class="position-absolute animate-float" style="top: 14px; left: 88px; z-index: 4;">
                            <div class="d-flex align-items-center justify-content-center rounded-circle bg-white"
                                style="width: 60px; height: 60px; border: 3.5px solid #29285F; box-shadow: 0 6px 14px rgba(0,0,0,0.08);">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#29285F"
                                    stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 18h6" />
                                    <path d="M10 22h4" />
                                    <path
                                        d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5A4.61 4.61 0 0 1 8.91 14" />
                                </svg>
                            </div>
                        </div>

                        <!-- Top-Center Floating Circle: Mint Green Speaker -->
                        <div class="position-absolute animate-float-alt" style="top: 8px; right: 185px; z-index: 4;">
                            <div class="position-relative">
                                <div class="animate-pulse-ring"></div>
                                <div class="d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 62px; height: 62px; background-color: #63E3B5; border: 3.5px solid #29285F; box-shadow: 0 6px 14px rgba(0,0,0,0.08);">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#29285F"
                                        stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5" fill="#29285F" />
                                        <path d="M15.54 8.46a5 5 0 0 1 0 7.07" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Top-Right Star Outline -->
                        <div class="position-absolute animate-sparkle" style="top: 36px; right: 44px; z-index: 4;">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#29285F"
                                stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12,2 15,9 22,9.5 17,14.5 18.5,22 12,18 5.5,22 7,14.5 2,9.5 9,9" />
                            </svg>
                        </div>

                        <!-- Main Computer Monitor / Tablet -->
                        <div class="position-absolute bg-white"
                            style="width: 320px; height: 230px; border: 6px solid #29285F; border-radius: 36px; top: 72px; left: 74px; z-index: 2; box-shadow: 0 12px 30px rgba(41,40,95,0.22);">
                            <!-- Inner Screen (Dark Navy) -->
                            <div class="m-2 rounded-4 d-flex align-items-center justify-content-center"
                                style="height: 145px; background-color: #29285F;">
                                <span
                                    style="color: #FFBD61; font-weight: 900; font-size: 32px; letter-spacing: -0.5px;">
                                    Halo, IoT!<span class="terminal-cursor">_</span>
                                </span>
                            </div>

                            <!-- Lower Bezel with 3 Colored Dots -->
                            <div class="d-flex align-items-center gap-2 ps-3 pt-1">
                                <span
                                    style="width: 15px; height: 15px; border-radius: 50%; background-color: #FFBD61; display: inline-block;"></span>
                                <span
                                    style="width: 15px; height: 15px; border-radius: 50%; background-color: #FF777D; display: inline-block;"></span>
                                <span
                                    style="width: 15px; height: 15px; border-radius: 50%; background-color: #63E3B5; display: inline-block;"></span>
                            </div>
                        </div>

                        <!-- Stylus / Pencil poking out at monitor bottom-right -->
                        <div class="position-absolute"
                            style="top: 218px; left: 356px; z-index: 2; transform: rotate(-35deg);">
                            <div
                                style="width: 12px; height: 52px; background: #FFBD61; border: 3px solid #29285F; border-radius: 4px;">
                            </div>
                        </div>

                        <!-- Bottom-Right Cute Robot Mascot Face -->
                        <div class="position-absolute animate-float" style="top: 185px; right: 10px; z-index: 3;">
                            <svg width="155" height="138" viewBox="0 0 124 110" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Ears / Bolts -->
                                <rect x="4" y="44" width="10" height="24" rx="4" fill="#29285F" />
                                <rect x="110" y="44" width="10" height="24" rx="4" fill="#29285F" />

                                <!-- Robot Face Head -->
                                <rect x="10" y="8" width="104" height="92" rx="36" fill="#8CE4FE" stroke="#29285F"
                                    stroke-width="7" />

                                <!-- Big Cute Eyes with Reflection -->
                                <g class="robot-eyes">
                                    <circle cx="43" cy="52" r="10.5" fill="#29285F" />
                                    <circle cx="47" cy="48" r="3.5" fill="#fff" />
                                    <circle cx="81" cy="52" r="10.5" fill="#29285F" />
                                    <circle cx="85" cy="48" r="3.5" fill="#fff" />
                                </g>

                                <!-- Cute Smile -->
                                <path d="M 52 68 Q 62 80 72 68" stroke="#29285F" stroke-width="5" stroke-linecap="round"
                                    fill="none" />
                            </svg>
                        </div>

                        <!-- Bottom-Left Star under monitor -->
                        <div class="position-absolute animate-sparkle" style="top: 310px; left: 106px; z-index: 4;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="#FFBD61" stroke="#29285F"
                                stroke-width="2.2">
                                <polygon points="12,2 15,9 22,9.5 17,14.5 18.5,22 12,18 5.5,22 7,14.5 2,9.5 9,9" />
                            </svg>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= 3. IoT ADA DI SEKITAR KITA ================= -->
    <section class="py-5" id="materi">
        <div class="container">
            <div class="panel-iot-bg">

                <!-- Top Left Star Sparkle (Lilac/Blue) -->
                <div class="position-absolute animate-sparkle" style="top: 20px; left: 22px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#8A94DF" stroke="#29285F" stroke-width="1.8">
                        <path d="M12 2 Q12 12 2 12 Q12 12 12 22 Q12 12 22 12 Q12 12 12 2 Z" />
                    </svg>
                </div>

                <!-- Bottom Right Star Sparkle (Orange) -->
                <div class="position-absolute animate-sparkle" style="bottom: 18px; right: 24px;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="#FFBD61" stroke="#29285F" stroke-width="1.8">
                        <path d="M12 2 Q12 12 2 12 Q12 12 12 22 Q12 12 22 12 Q12 12 12 2 Z" />
                    </svg>
                </div>

                <!-- Center Header Pill with Orange Slashes -->
                <div class="text-center mb-4">
                    <div class="panel-pill-header">
                        <span
                            style="color: #FFBD61; font-weight: 900; font-size: 34px; letter-spacing: -2px;">&#47;&#47;</span>
                        <span class="pill-title">IoT Ada di Sekitar Kita!</span>
                        <span
                            style="color: #FFBD61; font-weight: 900; font-size: 34px; letter-spacing: -2px;">&#92;&#92;</span>
                    </div>
                </div>

                <!-- Main Grid: Robot Mascot on Left + 3 Example Cards on Right -->
                <div class="row align-items-center g-4">

                    <!-- Left: Robot with Antenna & Extended Sensor Stick (diperbesar) -->
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-start ps-lg-4">
                        <div class="animate-float position-relative" style="max-width: 400px; width: 100%;">
                            <svg width="100%" height="auto" viewBox="0 0 270 150" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- WiFi/Radar Arcs on Head -->
                                <path class="animate-arc-outer" d="M 68 18 A 24 24 0 0 1 112 18" stroke="#FFBD61"
                                    stroke-width="6" stroke-linecap="round" />
                                <path class="animate-arc-inner" d="M 76 26 A 14 14 0 0 1 104 26" stroke="#FFBD61"
                                    stroke-width="6" stroke-linecap="round" />

                                <!-- Robot Head Stem -->
                                <rect x="86" y="28" width="8" height="12" rx="3" fill="#29285F" />

                                <!-- Sensor Stick / Wand extended to the right -->
                                <g transform="translate(140, 84) rotate(-22)">
                                    <rect x="0" y="4" width="90" height="18" rx="9" fill="#5bb4f8" stroke="#29285F"
                                        stroke-width="5" />
                                    <circle cx="86" cy="13" r="10" fill="#fff" stroke="#29285F" stroke-width="4.5" />
                                </g>

                                <!-- Robot Body / Head Box -->
                                <rect x="36" y="40" width="112" height="78" rx="34" fill="#5bb4f8" stroke="#29285F"
                                    stroke-width="6.5" />

                                <!-- Robot Eyes -->
                                <g class="robot-eyes">
                                    <circle cx="68" cy="74" r="10" fill="#29285F" />
                                    <circle cx="72" cy="70" r="3.5" fill="#fff" />
                                    <circle cx="112" cy="74" r="10" fill="#29285F" />
                                    <circle cx="116" cy="70" r="3.5" fill="#fff" />
                                </g>

                                <!-- Robot Smile -->
                                <path d="M 80 88 Q 90 98 100 88" stroke="#29285F" stroke-width="4.5"
                                    stroke-linecap="round" fill="none" />
                            </svg>
                        </div>
                    </div>

                    <!-- Right: 3 Cards in a Row -->
                    <div class="col-lg-8">
                        <div class="row g-3">

                            <!-- Card 1: Lampu Otomatis -->
                            <div class="col-12 col-sm-4">
                                <div class="card-iot-example"
                                    onclick="showToast('💡 Lampu Otomatis: Menyala sendiri saat mendeteksi gerakan!')">
                                    <div class="py-2 d-flex align-items-center justify-content-center"
                                        style="height: 170px;">
                                        <!-- Hanging Lamp Illustration -->
                                        <svg width="150" height="150" viewBox="0 0 100 100" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="44" y="4" width="12" height="6" rx="2" fill="#29285F" />
                                            <line x1="50" y1="10" x2="50" y2="28" stroke="#29285F" stroke-width="3" />
                                            <path d="M 32 44 L 46 28 L 54 28 L 68 44 Z" fill="#FFBD61" stroke="#29285F"
                                                stroke-width="3.5" stroke-linejoin="round" />
                                            <ellipse cx="50" cy="44" rx="18" ry="4" fill="#FFBD61" stroke="#29285F"
                                                stroke-width="3" />
                                            <circle cx="50" cy="53" r="8" fill="#fff" stroke="#29285F"
                                                stroke-width="3" />
                                            <text x="14" y="40" font-family="Fredoka" font-weight="900" font-size="20"
                                                fill="#FFBD61">+</text>
                                            <text x="76" y="40" font-family="Fredoka" font-weight="900" font-size="20"
                                                fill="#FFBD61">+</text>
                                            <text x="24" y="68" font-family="Fredoka" font-weight="900" font-size="16"
                                                fill="#FFBD61">+</text>
                                            <text x="68" y="68" font-family="Fredoka" font-weight="900" font-size="16"
                                                fill="#FFBD61">+</text>
                                        </svg>
                                    </div>
                                    <div class="card-iot-label label-orange">
                                        Lampu<br>Otomatis
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2: Pintu Otomatis -->
                            <div class="col-12 col-sm-4">
                                <div class="card-iot-example"
                                    onclick="showToast('🚪 Pintu Otomatis: Membuka saat sensor mendeteksi orang lewat!')">
                                    <div class="py-2 d-flex align-items-center justify-content-center"
                                        style="height: 170px;">
                                        <!-- Automatic Sliding Door Illustration -->
                                        <svg width="150" height="150" viewBox="0 0 100 100" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="22" y="24" width="56" height="8" rx="2" fill="#29285F" />
                                            <line x1="14" y1="36" x2="20" y2="36" stroke="#29285F" stroke-width="2.5"
                                                stroke-linecap="round" />
                                            <line x1="14" y1="44" x2="20" y2="44" stroke="#29285F" stroke-width="2.5"
                                                stroke-linecap="round" />
                                            <line x1="14" y1="52" x2="20" y2="52" stroke="#29285F" stroke-width="2.5"
                                                stroke-linecap="round" />

                                            <line x1="80" y1="36" x2="86" y2="36" stroke="#29285F" stroke-width="2.5"
                                                stroke-linecap="round" />
                                            <line x1="80" y1="44" x2="86" y2="44" stroke="#29285F" stroke-width="2.5"
                                                stroke-linecap="round" />
                                            <line x1="80" y1="52" x2="86" y2="52" stroke="#29285F" stroke-width="2.5"
                                                stroke-linecap="round" />

                                            <rect x="25" y="32" width="22" height="42" fill="#8FB1FF" stroke="#29285F"
                                                stroke-width="3" />
                                            <rect x="53" y="32" width="22" height="42" fill="#8FB1FF" stroke="#29285F"
                                                stroke-width="3" />
                                            <rect x="47" y="32" width="6" height="42" fill="#FFBD61" stroke="#29285F"
                                                stroke-width="2.5" />
                                        </svg>
                                    </div>
                                    <div class="card-iot-label label-blue">
                                        Pintu<br>Otomatis
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3: Alarm Otomatis -->
                            <div class="col-12 col-sm-4">
                                <div class="card-iot-example"
                                    onclick="showToast('🚨 Alarm Otomatis: Berbunyi nyaring ketika mendeteksi bahaya!')">
                                    <div class="py-2 d-flex align-items-center justify-content-center"
                                        style="height: 170px;">
                                        <!-- Alarm Siren Illustration -->
                                        <svg width="150" height="150" viewBox="0 0 100 100" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <line x1="50" y1="16" x2="50" y2="22" stroke="#29285F" stroke-width="3"
                                                stroke-linecap="round" />
                                            <line x1="36" y1="20" x2="40" y2="25" stroke="#29285F" stroke-width="3"
                                                stroke-linecap="round" />
                                            <line x1="64" y1="20" x2="60" y2="25" stroke="#29285F" stroke-width="3"
                                                stroke-linecap="round" />

                                            <path d="M 28 36 Q 22 46 28 56" stroke="#29285F" stroke-width="3.5"
                                                stroke-linecap="round" fill="none" />
                                            <path d="M 72 36 Q 78 46 72 56" stroke="#29285F" stroke-width="3.5"
                                                stroke-linecap="round" fill="none" />

                                            <path d="M 36 60 C 36 34 64 34 64 60 Z" fill="#FF777D" stroke="#29285F"
                                                stroke-width="3.5" />
                                            <rect x="32" y="60" width="36" height="8" rx="2" fill="#29285F" />
                                        </svg>
                                    </div>
                                    <div class="card-iot-label label-pink">
                                        Alarm<br>Otomatis
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- ================= 4. VIDEO PRAKTIK SECTION ================= -->
    <section class="py-4 py-lg-5" id="praktik">
        <div class="container">

            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0"
                    style="color: var(--c-navy); font-weight: 900; font-size: 36px; letter-spacing: -0.5px;">
                    Video Praktik
                </h2>
                <a href="{{ route('praktik') }}" class="btn-lihat-semua">Lihat Semua</a>
            </div>

            <div class="materi-grid">

                <!-- Misi 1: Buzzer Bunyi -->
                <a class="materi-card praktik-card" href="{{ route('praktik.show', 1) }}">
                    <div class="materi-thumb c-blue">
                        <span class="misi-label">Misi 1</span>
                        <div class="circle">
                            <svg viewBox="0 0 100 100" fill="none" stroke="#262756" stroke-width="4"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M30 48v28a6 6 0 0 0 6 6h28a6 6 0 0 0 6-6V48z" fill="#4B4E96" />
                                <ellipse cx="50" cy="48" rx="20" ry="8" fill="#6A6DB8" />
                                <ellipse cx="50" cy="48" rx="5" ry="2.5" fill="#262756" />
                                <path d="M42 82v8M58 82v8" />
                                <path d="M22 38q-8 8 0 16M13 31q-13 15 0 30" stroke="#FFBE65" />
                                <path d="M78 38q8 8 0 16M87 31q13 15 0 30" stroke="#FFBE65" />
                                <path d="M50 14v14" stroke="#FF7B7B" />
                                <path d="M50 14l9 3" stroke="#FF7B7B" />
                                <circle cx="46" cy="30" r="4" fill="#FF7B7B" />
                            </svg>
                        </div>
                        <span class="mulai-badge">
                            Mulai Misi
                            <span class="mulai-icon">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M5 12h14M13 6l6 6-6 6" />
                                </svg>
                            </span>
                        </span>
                    </div>
                    <h2>Buzzer Bunyi</h2>
                </a>

                <!-- Misi 5: Sensor Miring -->
                <a class="materi-card praktik-card" href="{{ route('praktik.show', 5) }}">
                    <div class="materi-thumb c-orange">
                        <span class="misi-label">Misi 5</span>
                        <div class="circle">
                            <svg viewBox="0 0 100 100" fill="none" stroke="#262756" stroke-width="4"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <g transform="rotate(-20 50 56)">
                                    <rect x="14" y="42" width="72" height="28" rx="14" fill="#66C4FF" />
                                    <circle cx="70" cy="56" r="8" fill="#FF7B7B" />
                                    <path d="M26 52v8" stroke="#fff" opacity=".7" />
                                </g>
                                <path d="M22 28q28-16 56 0" stroke="#FFBE65" />
                                <path d="M70 18l9 9-11 4" stroke="#FFBE65" />
                                <path d="M28 86h44" />
                            </svg>
                        </div>
                        <span class="mulai-badge">
                            Mulai Misi
                            <span class="mulai-icon">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M5 12h14M13 6l6 6-6 6" />
                                </svg>
                            </span>
                        </span>
                    </div>
                    <h2>Sensor Miring</h2>
                </a>

                <!-- Misi 6: Sensor Sentuh -->
                <a class="materi-card praktik-card" href="{{ route('praktik.show', 6) }}">
                    <div class="materi-thumb c-red">
                        <span class="misi-label">Misi 6</span>
                        <div class="circle">
                            <svg viewBox="0 0 100 100" fill="none" stroke="#262756" stroke-width="4"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="50" cy="66" r="20" fill="#6EE7B7" />
                                <path d="M38 66a12 12 0 0 1 24 0M43 70a7 7 0 0 1 14 0M48 74a2 2 0 0 1 4 0"
                                    stroke-width="3" />
                                <path d="M41 50V22a9 9 0 0 1 18 0v28z" fill="#FFBE65" />
                                <path d="M46 16v6" stroke="#fff" opacity=".7" />
                                <path d="M24 42l-8-5M76 42l8-5M22 28h-9M78 28h9" stroke="#FF7B7B" />
                            </svg>
                        </div>
                        <span class="mulai-badge">
                            Mulai Misi
                            <span class="mulai-icon">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M5 12h14M13 6l6 6-6 6" />
                                </svg>
                            </span>
                        </span>
                    </div>
                    <h2>Sensor Sentuh</h2>
                </a>

            </div>

        </div>
    </section>

    @include('partials.footer')


    <!-- ================= TOAST NOTIFICATION ================= -->
    <div id="toast" class="toast-iot">
        <span id="toast-icon">✨</span>
        <span id="toast-message">Pesan IoT Kids</span>
    </div>


    <!-- ================= SCRIPTS ================= -->
    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Toast Function
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