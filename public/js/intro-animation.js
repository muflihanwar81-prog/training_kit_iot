/**
 * IoT Kids - Intro Animation Controller
 * File: public/js/intro-animation.js
 */
(function() {
    'use strict';

    const STORAGE_KEY = 'iot_kids_intro_shown';
    const DEFAULT_TOTAL_DURATION = 3500; // ms (sekitar 3.5 detik)
    const EXIT_ANIMATION_START = 3000;   // ms (Tahap 5: transisi masuk website)

    function initIntroAnimation() {
        const splashEl = document.getElementById('iotIntroSplash');
        if (!splashEl) return;

        // 1. Cek parameter URL untuk force replay (?intro=1 atau ?replay=1)
        const urlParams = new URLSearchParams(window.location.search);
        const forceReplay = urlParams.has('intro') || urlParams.has('replay');

        // 2. Cek konfigurasi global jika ada
        const config = window.IOT_KIDS_INTRO_CONFIG || {};
        if (config.enabled === false && !forceReplay) {
            hideImmediately(splashEl);
            return;
        }

        // 3. Cek prefers-reduced-motion
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (prefersReducedMotion && !forceReplay) {
            hideImmediately(splashEl);
            return;
        }

        // 4. Cek sessionStorage (hanya tampil 1x per sesi peramban)
        if (!forceReplay && sessionStorage.getItem(STORAGE_KEY) === 'true') {
            hideImmediately(splashEl);
            return;
        }

        // Jalankan intro animasi!
        playIntro(splashEl, config.duration || DEFAULT_TOTAL_DURATION);
    }

    function hideImmediately(splashEl) {
        splashEl.classList.add('intro-hidden');
        splashEl.style.display = 'none';
        document.body.classList.remove('intro-active');
    }

    function playIntro(splashEl, duration) {
        // Kunci scroll halaman saat intro berlangsung agar tidak ada scrolling liar
        document.body.classList.add('intro-active');

        const stageEl = splashEl.querySelector('.intro-stage');
        const skipBtn = splashEl.querySelector('.intro-skip-btn');

        let isExited = false;
        let exitTimer = null;
        let finishTimer = null;

        function exitIntro() {
            if (isExited) return;
            isExited = true;

            clearTimeout(exitTimer);
            clearTimeout(finishTimer);

            // Tahap 5: Zoom out lembut & fade out background
            if (stageEl) {
                stageEl.classList.add('stage-zoom-out');
            }
            splashEl.classList.add('intro-fade-out');

            // Simpan status ke sessionStorage agar tidak berulang di halaman berikutnya
            try {
                sessionStorage.setItem(STORAGE_KEY, 'true');
            } catch (e) {
                // Ignore storage errors jika cookies/storage diblokir
            }

            // Setelah transisi fade selesai (450ms)
            setTimeout(() => {
                splashEl.classList.add('intro-hidden');
                splashEl.style.display = 'none';
                document.body.classList.remove('intro-active');
            }, 450);
        }

        // Tombol Lewati / Skip
        if (skipBtn) {
            skipBtn.addEventListener('click', (e) => {
                e.preventDefault();
                exitIntro();
            });
        }

        // Tombol keyboard ESC untuk lewati
        const onKeyDown = function(e) {
            if (e.key === 'Escape' || e.keyCode === 27) {
                exitIntro();
                window.removeEventListener('keydown', onKeyDown);
            }
        };
        window.addEventListener('keydown', onKeyDown);

        // Timer tahap 5 (transisi keluar)
        const exitDelay = Math.max(EXIT_ANIMATION_START, duration - 450);
        exitTimer = setTimeout(() => {
            exitIntro();
            window.removeEventListener('keydown', onKeyDown);
        }, exitDelay);

        // Fallback safety timer
        finishTimer = setTimeout(() => {
            hideImmediately(splashEl);
            window.removeEventListener('keydown', onKeyDown);
        }, duration + 800);
    }

    // Expose fungsi global untuk replay kapan saja secara manual
    window.replayIoTIntro = function() {
        try {
            sessionStorage.removeItem(STORAGE_KEY);
        } catch (e) {}

        const splashEl = document.getElementById('iotIntroSplash');
        if (!splashEl) {
            window.location.search = '?replay=1';
            return;
        }

        splashEl.classList.remove('intro-hidden', 'intro-fade-out');
        splashEl.style.display = 'flex';
        const stageEl = splashEl.querySelector('.intro-stage');
        if (stageEl) {
            stageEl.classList.remove('stage-zoom-out');
        }

        // Reset semua animasi dengan trick reflow
        const clone = splashEl.cloneNode(true);
        splashEl.parentNode.replaceChild(clone, splashEl);
        playIntro(clone, DEFAULT_TOTAL_DURATION);
    };

    // Jalankan segera setelah DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initIntroAnimation);
    } else {
        initIntroAnimation();
    }
})();
