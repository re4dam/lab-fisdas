<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $barang->nama_barang }}- Detail Barang</title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>

<body>
    <!-- Header Navigation -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="logo-img">
            </div>
            <nav class="nav">
                <a href="{{ route('barang.show', $barang->id_barang) }}" class="nav-link active">Detail Barang</a>
                <a href="{{ route('barang.keselamatan', $barang->id_barang) }}" class="nav-link">Panduan
                    Keselamatan</a>
                <a href="{{ route('barang.panduan', $barang->id_barang) }}" class="nav-link">Panduan
                    Penggunaan</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Title -->
            <h1 class="title">{{ $barang->nama_barang }} - Detail Barang</h1>

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
                            {{ $barang->deskripsi }}
                        </p>

                        <h3 class="parts-title">Bagian - Bagian :</h3>

                        <div class="parts-list">
                            @forelse($barang->komponen as $komponen)
                                <div class="part-item">
                                    <div class="part-number">{{ $loop->iteration }}</div>
                                    <div class="part-description">
                                        <strong>{{ $komponen->nama_komponen }}</strong>
                                        {{ $komponen->deskripsi }}
                                    </div>
                                </div>
                            @empty
                                <p>Belum ada data komponen untuk alat ini.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/detail.js') }}"></script>
</body>

</html>
