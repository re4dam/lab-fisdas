<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neraca - Panduan Keselamatan</title>
    <link rel="stylesheet" href="{{ asset('css/panduankeselamatan.css') }}">
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
                <a href="#" class="nav-link active">Panduan Keselamatan</a>
                <a href="#" class="nav-link">Panduan Penggunaan</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Red Section -->
        <section class="red-section">
            <div class="red-container">
                <!-- Title -->
                <h1 class="title">NERACA</h1>

                <!-- Neraca Image -->
                <div class="neraca-container">
                    <img src="neraca-image.png" alt="Neraca" class="neraca-image">
                </div>
                
                <!-- HAPUS "Panduan Keselamatan Title" dari sini -->
                <!-- <h2 class="panduan-title">Panduan Keselamatan</h2> -->
            </div>
        </section>

        <!-- White Cards Section -->
        <section class="cards-section">
            <!-- TAMBAHKAN CONTAINER JUDUL DI SINI -->
            <div class="panduan-container">
                <div class="panduan-title-container">
                    <h2 class="panduan-title">PANDUAN KESELAMATAN</h2>
                    <div class="panduan-line"></div>
                </div>
            </div>

            <!-- Cards Container -->
            <div class="cards-container">
                <!-- Card 1 -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                        </div>
                        <h3 class="card-title">Penempatan</h3>
                    </div>
                    <div class="card-content">
                        <p>Letakkan di permukaan yang rata dan stabil. Pastikan tidak ada getaran atau hembusan udara yang kuat yang dapat mempengaruhi pembacaan.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                        </div>
                        <h3 class="card-title">Kalibrasi</h3>
                    </div>
                    <div class="card-content">
                        <p>Pastikan neraca dalam keadaan nol sebelum digunakan. Gunakan tombol kalibrasi atau atur pointer ke posisi nol.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                        </div>
                        <h3 class="card-title">Beban Maksimal</h3>
                    </div>
                    <div class="card-content">
                        <p>Jangan melebihi kapasitas maksimal neraca (biasanya 610 gram). Kelebihan beban dapat merusak mekanisme internal.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                        </div>
                        <h3 class="card-title">Perawatan</h3>
                    </div>
                    <div class="card-content">
                        <p>Bersihkan piringan dan komponen neraca setelah digunakan. Simpan di tempat yang kering dan terlindung dari debu.</p>
                    </div>
                </div>
            </div>
            
            <!-- Scroll Indicator -->
            <div class="scroll-indicator">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
                Geser untuk melihat lebih banyak
            </div>
        </section>
    </main>

    <script src="{{ asset('js/panduankeselamatan.js') }}"></script>
</body>
</html>