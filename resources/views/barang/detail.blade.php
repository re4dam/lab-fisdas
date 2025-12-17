<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neraca - Detail Barang</title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>
<body>
    <!-- Header Navigation -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Logo" class="logo-img">
            </div>
            <nav class="nav">
                <a href="#" class="nav-link active">Detail Barang</a>
                <a href="#" class="nav-link">Panduan Penggunaan</a>
                <a href="#" class="nav-link">Panduan Keselamatan</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Title -->
            <h1 class="title">NERACA</h1>

            <!-- Neraca Image with Numbered Points -->
            <div class="neraca-container">
                <img src="neraca-image.png" alt="Neraca" class="neraca-image">
                <div class="point point-1">1</div>
                <div class="point point-2">2</div>
                <div class="point point-3">3</div>
            </div>

            <!-- Detail Section -->
            <!-- Ganti bagian detail-section menjadi seperti ini -->
            <div class="detail-section">
                <div class="content-container">
                    <h2 class="detail-title">Detail Barang</h2>
                    
                    <div class="detail-content">
                        <p class="description">
                            Mengukur massa suatu benda dengan tingkat ketelitian yang relatif tinggi di laboratorium. Memiliki prinsip keseimbangan, di mana massa diukur dengan menggeser tiga buah anak timbangan (atau beban geser) pada lengan dengan skala hingga tercapai posisi seimbang (nol). Umumnya dapat mengukur hingga masa 610 gram, tergantung model.
                        </p>

                        <h3 class="parts-title">Bagian - Bagian :</h3>

                        <div class="parts-list">
                            <div class="part-item">
                                <div class="part-number">1</div>
                                <div class="part-description">
                                    <strong>Piringan/Wadah (Pan):</strong> Tempat meletakkan benda yang akan diukur massanya.
                                </div>
                            </div>

                            <div class="part-item">
                                <div class="part-number">2</div>
                                <div class="part-description">
                                    <strong>Tiga Lengan (Beams):</strong> Skala tempat anak timbangan digeser, biasanya mewakili ratusan gram, puluhan gram, dan satuan gram/desimal.
                                </div>
                            </div>

                            <div class="part-item">
                                <div class="part-number">3</div>
                                <div class="part-description">
                                    <strong>Pointers:</strong> Menunjukkan apakah neraca sudah seimbang (nol) atau belum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/detail.js') }}"></script>
</body>
</html>