<?php

return [
    [
        'slug' => 'apa-itu-iot', 'judul' => 'Apa itu IoT?',
        'ringkas' => 'Benda-benda di sekitar kita bisa terhubung ke internet.',
        'bagian' => [
            [
                'judul' => 'IoT itu apa sih?',
                'isi' => [
                    'IoT singkatan dari <strong>Internet of Things</strong>, artinya "internet untuk benda-benda".',
                    'Biasanya hanya HP dan komputer yang bisa memakai internet. Dengan IoT, benda lain seperti lampu, kipas, dan jam tangan juga bisa terhubung ke internet. Benda-benda itu bisa mengirim kabar dan menerima perintah.',
                ],
            ],
            [
                'judul' => 'Contoh IoT di sekitar kita',
                'daftar' => [
                    '💡 <strong>Lampu pintar</strong>: bisa dinyalakan dari HP, walaupun kamu sedang di luar kamar.',
                    '⌚ <strong>Jam tangan pintar</strong>: menghitung langkah kakimu dan mengirim datanya ke HP.',
                    '🌱 <strong>Penyiram tanaman otomatis</strong>: menyiram sendiri kalau tanahnya kering.',
                    '🚪 <strong>Pintu pintar</strong>: terbuka kalau ada orang yang boleh masuk.',
                ],
            ],
            [
                'judul' => 'Bagaimana cara kerjanya?',
                'isi' => ['Sistem IoT bekerja seperti tubuh kita, dengan tiga langkah:'],
                'daftar' => [
                    '👀 <strong>Merasakan</strong>: <em>sensor</em> mengumpulkan kabar dari sekitar.',
                    '🧠 <strong>Berpikir</strong>: komputer kecil memutuskan apa yang harus dilakukan.',
                    '💪 <strong>Bertindak</strong>: <em>aktuator</em> melakukan sesuatu, misalnya menyalakan lampu.',
                ],
            ],
        ],
        'fakta' => 'Di praktik nanti, CrowPi-mu juga merasakan (sensor), berpikir (Scratch), lalu bertindak (buzzer, LED, getar)!',
        'kuis' => [
            ['tanya' => 'IoT singkatan dari apa?', 'opsi' => ['Internet of Things', 'Input of Tools', 'Idea of Toys'], 'benar' => 0],
            ['tanya' => 'Mana yang termasuk contoh IoT?', 'opsi' => ['Buku tulis', 'Lampu yang bisa dinyalakan dari HP', 'Batu'], 'benar' => 1],
        ],
    ],
    [
        'slug' => 'kenal-scratch', 'judul' => 'Kenal Scratch',
        'ringkas' => 'Membuat program dengan menyusun blok, seperti bermain lego.',
        'bagian' => [
            [
                'judul' => 'Apa itu Scratch?',
                'isi' => [
                    'Scratch adalah bahasa pemrograman gratis yang dibuat oleh kelompok <strong>Lifelong Kindergarten di MIT</strong>, sebuah kampus teknologi terkenal di Amerika. Scratch sudah dipakai jutaan orang di seluruh dunia.',
                    'Di Scratch kamu <strong>tidak perlu mengetik kode</strong>. Kamu cukup menyusun blok berwarna, seperti menyusun lego.',
                ],
                'gambar' => ['scratch-logo.jpg', 'Logo Scratch', 'Logo Scratch. Maskotnya adalah kucing oranye!'],
            ],
            [
                'judul' => 'Rumus dasar program',
                'isi' => ['Semua program punya urutan yang sama: <strong>Masukan → Proses → Keluaran</strong>.'],
                'daftar' => [
                    '<strong>Masukan</strong>: tombol ditekan, ada suara, atau ada gerakan.',
                    '<strong>Proses</strong>: komputer memutuskan apa yang dilakukan.',
                    '<strong>Keluaran</strong>: lampu menyala, buzzer berbunyi, atau kucing berbicara.',
                ],
            ],
            [
                'judul' => 'Blok khusus untuk CrowPi',
                'isi' => [
                    'Supaya Scratch bisa mengendalikan CrowPi, kita menambahkan ekstensi <strong>Raspberry Pi GPIO</strong>. Caranya: klik tombol <em>Add Extension</em> di pojok kiri bawah, lalu pilih <em>Raspberry Pi GPIO</em>.',
                    'Blok hijau ini bisa menyalakan atau mematikan alat, dan juga bisa membaca sensor.',
                ],
                'gambar' => ['scratch-gpio.jpg', 'Blok hijau Raspberry Pi GPIO di Scratch', 'Blok hijau Raspberry Pi GPIO. Blok ini yang akan sering kamu pakai.'],
            ],
            [
                'judul' => 'Contoh program',
                'isi' => ['Ini program dari Misi 2: buzzer berbunyi saat tombol ditekan. Blok dibaca dari atas ke bawah.'],
                'gambar' => ['scratch-contoh-blok.jpg', 'Contoh susunan blok Scratch', 'Contoh program dari modul CrowPi.'],
            ],
        ],
        'fakta' => 'Nomor di blok GPIO adalah nomor "rumah" tiap alat. Buzzer tinggal di nomor 18, relay di nomor 21.',
        'kuis' => [
            ['tanya' => 'Di Scratch, program dibuat dengan cara...', 'opsi' => ['Menyusun blok', 'Menggambar', 'Menyanyi'], 'benar' => 0],
            ['tanya' => 'Ekstensi yang dipakai untuk mengendalikan CrowPi adalah...', 'opsi' => ['Music', 'Raspberry Pi GPIO', 'Pen'], 'benar' => 1],
        ],
    ],
    [
        'slug' => 'sensor', 'judul' => 'Sensor',
        'ringkas' => 'Sensor adalah "indera" bagi komputer.',
        'bagian' => [
            [
                'judul' => 'Sensor itu apa?',
                'isi' => [
                    'Kamu punya mata untuk melihat, telinga untuk mendengar, dan kulit untuk merasakan. Komputer tidak punya itu semua, jadi ia memakai <strong>sensor</strong>.',
                    'Sensor adalah alat yang <strong>merasakan keadaan di sekitar</strong> lalu memberi tahu komputer.',
                ],
            ],
            [
                'judul' => 'Sensor di CrowPi',
                'daftar' => [
                    '🎤 <strong>Sensor suara</strong>: seperti telinga, bisa mendengar tepuk tangan.',
                    '🚶 <strong>Sensor gerak</strong>: tahu kalau ada orang bergerak di depannya.',
                    '👆 <strong>Sensor sentuh</strong>: tahu kalau jarimu menyentuhnya.',
                    '📐 <strong>Sensor miring</strong>: tahu kalau CrowPi dimiringkan ke kiri atau kanan.',
                    '🔘 <strong>Tombol</strong>: tahu kalau kamu menekannya.',
                ],
                'gambar' => ['crowpi-sensor.jpg', 'Papan sensor CrowPi', 'Sebagian papan CrowPi. Ada mikrofon (suara), sensor gerak berbentuk kubah putih, dan sensor jarak ultrasonic.'],
            ],
            [
                'judul' => 'Bagaimana sensor "berbicara"?',
                'isi' => [
                    'Sensor berbicara dengan bahasa sederhana: <strong>HIGH</strong> (artinya "ya, ada!") dan <strong>LOW</strong> (artinya "tidak ada").',
                    'Contohnya sensor suara: <strong>HIGH</strong> berarti ada suara keras, <strong>LOW</strong> berarti sunyi.',
                ],
            ],
        ],
        'fakta' => 'Sensor suara dan sensor gerak di CrowPi punya sekrup kecil untuk mengatur seberapa peka mereka. Putar pakai obeng kecil!',
        'kuis' => [
            ['tanya' => 'Sensor itu seperti apa bagi komputer?', 'opsi' => ['Indera', 'Baterai', 'Kabel'], 'benar' => 0],
            ['tanya' => 'Sensor suara mengirim HIGH ketika...', 'opsi' => ['Sunyi', 'Ada suara keras', 'Lampu mati'], 'benar' => 1],
        ],
    ],
    [
        'slug' => 'aktuator', 'judul' => 'Aktuator',
        'ringkas' => 'Aktuator adalah "tangan dan suara" bagi komputer.',
        'bagian' => [
            [
                'judul' => 'Aktuator itu apa?',
                'isi' => [
                    'Kalau sensor adalah indera, maka <strong>aktuator</strong> adalah alat yang <strong>melakukan sesuatu</strong>. Ia bergerak, berbunyi, bergetar, atau menyala.',
                    'Aktuator menjalankan perintah dari komputer, seperti otot yang menjalankan perintah dari otak.',
                ],
            ],
            [
                'judul' => 'Aktuator di CrowPi',
                'daftar' => [
                    '🔔 <strong>Buzzer</strong>: berbunyi "tiit!".',
                    '📳 <strong>Motor getar</strong>: bergetar seperti HP.',
                    '💡 <strong>LED</strong>: menyala dan berkedip.',
                    '🔌 <strong>Relay</strong>: saklar otomatis yang bunyi "klik" saat bekerja.',
                ],
                'gambar' => ['crowpi-papan.jpg', 'Papan CrowPi dengan LED dan buzzer', 'Papan CrowPi. Lampu LED sedang menyala di atas breadboard.'],
            ],
            [
                'judul' => 'Sensor + Aktuator = Pintar!',
                'isi' => ['Dua-duanya bekerja sama:'],
                'daftar' => [
                    '🎤 Sensor suara mendengar tepuk tangan → 🔔 buzzer berbunyi.',
                    '👆 Sensor sentuh dipegang → 🔔 buzzer berbunyi seperti alarm.',
                    '🔘 Tombol ditekan → 🔔 buzzer berbunyi.',
                ],
            ],
        ],
        'fakta' => 'Untuk menyalakan aktuator, kita mengirim HIGH. Untuk mematikannya, kita mengirim LOW.',
        'kuis' => [
            ['tanya' => 'Mana yang termasuk aktuator?', 'opsi' => ['Sensor gerak', 'Buzzer', 'Mikrofon'], 'benar' => 1],
            ['tanya' => 'Untuk mematikan aktuator, kita mengirim...', 'opsi' => ['HIGH', 'LOW', 'PINK'], 'benar' => 1],
        ],
    ],
    [
        'slug' => 'kenal-crowpi', 'judul' => 'Kenal CrowPi',
        'ringkas' => 'Komputer mini dalam koper, penuh sensor.',
        'bagian' => [
            [
                'judul' => 'CrowPi itu apa?',
                'isi' => [
                    'CrowPi dibuat oleh perusahaan <strong>Elecrow</strong>. Di dalam kopernya ada komputer kecil <strong>Raspberry Pi</strong>, layar, dan banyak sensor.',
                    'Jadi kamu bisa belajar membuat program tanpa harus menyambung kabel sendiri satu per satu.',
                ],
                'gambar' => ['crowpi-koper.jpg', 'Koper CrowPi dengan layar Scratch', 'CrowPi sedang menjalankan Scratch.'],
            ],
            [
                'judul' => 'Apa saja isinya?',
                'daftar' => [
                    '🖥️ <strong>Layar</strong> untuk menjalankan Scratch.',
                    '🔘 <strong>Tombol</strong> hijau dan kuning.',
                    '🔴 <strong>Layar lampu titik-titik dan angka</strong>.',
                    '🧪 <strong>Sensor</strong> suara, gerak, sentuh, miring, dan jarak.',
                    '🔔 <strong>Aktuator</strong> seperti buzzer, relay, dan motor getar.',
                    '🧱 <strong>Breadboard</strong> untuk merakit rangkaian sendiri.',
                ],
                'gambar' => ['crowpi-papan.jpg', 'Papan CrowPi dilihat dari atas', 'Papan CrowPi dari atas. Tombol kuning dan hijau terlihat jelas.'],
            ],
            [
                'judul' => 'Rahasia nomor GPIO',
                'isi' => ['Setiap alat punya nomor "rumah" yang disebut <strong>GPIO</strong>. Di Scratch kita memanggil alat lewat nomor itu.'],
                'daftar' => [
                    'Buzzer → GPIO 18',
                    'Relay → GPIO 21',
                    'Sensor gerak → GPIO 23',
                    'Sensor miring → GPIO 22',
                    'Sensor sentuh → GPIO 17',
                    'Motor getar → GPIO 27',
                    'Sensor suara → GPIO 24',
                    'Tombol atas → GPIO 26',
                ],
            ],
        ],
        'fakta' => 'Scratch memakai nomor GPIO dengan sistem "BCM", jadi nomor 0 sampai 27 saja.',
        'kuis' => [
            ['tanya' => 'Buzzer tinggal di GPIO nomor...', 'opsi' => ['18', '5', '99'], 'benar' => 0],
            ['tanya' => 'Komputer kecil di dalam CrowPi bernama...', 'opsi' => ['Raspberry Pi', 'Blueberry Pie', 'Banana Pi'], 'benar' => 0],
        ],
    ],
    [
        'slug' => 'saklar-crowpi', 'judul' => 'Saklar CrowPi',
        'ringkas' => 'Cara mengatur saklar kecil di papan CrowPi.',
        'bagian' => [
            [
                'judul' => 'Kenapa ada saklar?',
                'isi' => [
                    'Raspberry Pi punya jumlah "pintu" (pin GPIO) yang terbatas, padahal alat di CrowPi banyak sekali. Karena itu CrowPi punya <strong>2 saklar kecil, masing-masing 8 pin</strong>. Saklar ini membuat satu pintu bisa dipakai bergantian oleh alat yang berbeda.',
                ],
                'gambar' => ['saklar-dip.jpg', 'Dua saklar DIP di papan CrowPi', 'Dua saklar DIP. Tulisan ON berarti posisi menyala. Naikkan tuasnya ke atas untuk menyalakan.'],
            ],
            [
                'judul' => 'Kapan saklar harus dinyalakan?',
                'daftar' => [
                    '🔘 <strong>Tombol</strong>: seluruh saklar <strong>kiri</strong> dinaikkan.',
                    '📳 <strong>Motor getar</strong>: saklar kanan pin <strong>1</strong>.',
                    '📐 <strong>Sensor miring</strong>: saklar kanan pin <strong>2</strong>.',
                    '⚙️ <strong>Motor step</strong>: saklar kanan pin <strong>3, 4, 5, 6</strong>.',
                    '🦾 <strong>Servo</strong>: saklar kanan pin <strong>7, 8</strong>.',
                ],
            ],
            [
                'judul' => 'Aturan emas',
                'daftar' => [
                    '✅ Naikkan tuas sebelum memakai alat itu.',
                    '✅ <strong>Turunkan lagi setelah selesai</strong>, karena pin yang sama dipakai alat lain.',
                    '🔍 Kalau program tidak jalan, cek saklarnya dulu!',
                ],
            ],
        ],
        'fakta' => 'Kalau saklar lupa dimatikan, dua alat bisa "berebut" pin yang sama, jadi CrowPi bisa error. Itu sebabnya wajib dimatikan lagi.',
        'kuis' => [
            ['tanya' => 'Setelah selesai memakai alat, saklar sebaiknya...', 'opsi' => ['Dibiarkan menyala', 'Diturunkan lagi', 'Dilepas'], 'benar' => 1],
            ['tanya' => 'Untuk motor getar, kita menaikkan saklar...', 'opsi' => ['Kanan pin 1', 'Kiri pin 8', 'Semua pin kanan'], 'benar' => 0],
        ],
    ],
];