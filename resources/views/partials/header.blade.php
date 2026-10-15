<!-- ================= NAVBAR / HEADER ================= -->
<header class="navbar-iot sticky-top" id="headerNavbar">
    <div class="container d-flex align-items-center justify-content-between py-2">

        <!-- Left: Logo IoT Kids -->
        <a href="beranda" class="d-flex align-items-center gap-2 text-decoration-none" title="IoT Kids">
            <!-- Mascot Robot Icon -->
            <svg width="40" height="36" viewBox="0 0 90 82" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            <svg width="124" height="38" viewBox="0 0 135 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <text x="2" y="32" class="svg-sticker-text" fill="#FFBD61" font-size="34">IoT</text>
                <text x="60" y="32" class="svg-sticker-text" fill="#52a9f8" font-size="34">Kids</text>
            </svg>
        </a>

        <!-- Desktop Navigation -->
        <nav class="d-none d-md-flex align-items-center gap-3">
            <a href="{{ route('beranda') }}"
                class="{{ request()->routeIs('beranda') ? 'nav-pill-active' : 'nav-link-iot' }} text-decoration-none">Beranda</a>
            <a href="{{ route('materi') }}"
                class="{{ request()->routeIs('materi') ? 'nav-pill-active' : 'nav-link-iot' }} text-decoration-none">Materi</a>
            <a href="" class="nav-link-iot text-decoration-none">Praktik</a>
            <a href="" class="nav-link-iot text-decoration-none">Kuis</a>
        </nav>

        <!-- Mobile Toggle Button -->
        <button class="btn d-md-none p-1 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav"
            aria-label="Menu Navigasi">
            <svg width="28" height="28" fill="none" stroke="#29285F" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="3" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation Collapse -->
    <div class="collapse d-md-none border-top bg-white px-4 pb-3" id="mobileNav">
        <div class="d-flex flex-column gap-2 pt-3">
            <a href="beranda" class="nav-pill-active text-decoration-none d-inline-block"
                style="width:max-content;">Beranda</a>
            <a href="" class="nav-link-iot text-decoration-none">Materi</a>
            <a href="" class="nav-link-iot text-decoration-none">Praktik</a>
            <a href="" class="nav-link-iot text-decoration-none">Kuis</a>
        </div>
    </div>
</header>