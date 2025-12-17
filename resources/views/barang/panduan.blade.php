<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neraca - Panduan Penggunaan</title>
    <link rel="stylesheet" href="{{ asset('css/panduan.css') }}">
</head>
<body>
    <!-- Header Navigation -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Logo" class="logo-img">
            </div>
            <nav class="nav">
                <a href="#" class="nav-link">Detail Barang</a>
                <a href="#" class="nav-link">Panduan Keselamatan</a>
                <a href="#" class="nav-link active">Panduan Penggunaan</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- SATU CONTAINER PUTIH BESAR -->
        <section class="panduan-section">
            <div class="main-white-container">
                
                <!-- Hero Section: Title & Image Side by Side -->
                <div class="hero-grid">
                    <div class="hero-text">
                        <h1 class="hero-title">Panduan Penggunaan</h1>
                        <h2 class="hero-subtitle">NERACA</h2>
                    </div>
                    <div class="hero-image">
                        <img src="neraca-image.png" alt="Neraca" class="neraca-image">
                    </div>
                </div>

                <!-- Section 1: Persiapan dan Kalibrasi -->
                <div class="guide-section">
                    <h3 class="section-title">Persiapan dan Kalibrasi (Mengatur ke Nol)</h3>
                    <div class="cards-wrapper">
                        <div class="step-card">
                            <div class="step-number">1</div>
                            <p class="step-text">Basar semua anak timbangan (rider) pada kedua lengan hingga posisinya ada di nol (0), yaitu paling kiri.</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">2</div>
                            <p class="step-text">Perhatikan jarum penunjuk di ujung kanan neraca. Pastikan jarum berada di tengah skala atau tepat di nol.</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">3</div>
                            <p class="step-text">Jika jarum tidak berada di nol, putar sekrup pengatur (biasanya di ujung kiri neraca) hingga jarum tepat berada di tengah skala nol.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Pengukuran Massa -->
                <div class="guide-section">
                    <h3 class="section-title">Pengukuran Massa</h3>
                    <div class="cards-wrapper">
                        <div class="step-card">
                            <div class="step-number">1</div>
                            <p class="step-text">Tempatkan benda yang akan diukur massanya di atas piringan (pan).</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">2</div>
                            <p class="step-text">Geser anak timbangan (rider) terlebih dahulu pada lengan belakang (yang memiliki angka skala lebih besar). Geser perlahan hingga jarum mendekati nol, tapi jangan sampai melebihi nol.</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">3</div>
                            <p class="step-text">Ulangi proses yang sama pada lengan depan (dengan skala lebih kecil). Geser hingga jarum berada tepat di tengah atau di nol.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Pembacaan Hasil -->
                <div class="guide-section">
                    <h3 class="section-title">Pembacaan Hasil</h3>
                    <div class="cards-wrapper">
                        <div class="step-card">
                            <div class="step-number">1</div>
                            <p class="step-text">Tempatkan benda yang akan diukur massanya di atas piringan (pan).</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">2</div>
                            <p class="step-text">Geser anak timbangan (rider) pada lengan belakang hingga jarum mendekati nol, tapi tidak sampai melebihi nol.</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">3</div>
                            <p class="step-text">Ulangi proses yang sama pada lengan depan hingga jarum berada tepat di tengah skala. Baca angka di kedua lengan dan jumlahkan.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <script src="{{ asset('js/panduan.js') }}"></script>
</body>
</html>