<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- DINAMIS: Judul Tab --}}
    <title>{{ $barang->nama_barang }} - Panduan Penggunaan</title>

    <link rel="stylesheet" href="{{ asset('css/panduan.css') }}">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('logo.png') }}" alt="Logo" class="logo-img"
                        onerror="this.style.display='none'">
                </a>
            </div>
            <nav class="nav">
                {{-- Pastikan nama route sesuai dengan web.php --}}
                <a href="{{ route('barang.show', $barang->id_barang) }}" class="nav-link">Detail Barang</a>

                <a href="{{ route('barang.keselamatan', $barang->id_barang) }}" class="nav-link">Panduan Keselamatan</a>

                {{-- Link Aktif --}}
                <a href="{{ route('barang.panduan', $barang->id_barang) }}" class="nav-link active">Panduan
                    Penggunaan</a>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <section class="panduan-section">
            <div class="main-white-container">

                <div class="hero-grid">
                    <div class="hero-text">
                        <h1 class="hero-title">Panduan Penggunaan</h1>
                        {{-- DINAMIS: Nama Barang --}}
                        <h2 class="hero-subtitle">{{ strtoupper($barang->nama_barang) }}</h2>
                    </div>
                    <div class="hero-image">
                        {{-- DINAMIS: Gambar Barang --}}
                        <img src="{{ asset($barang->gambar) }}" alt="{{ $barang->nama_barang }}" class="neraca-image">
                    </div>
                </div>

                @forelse($barang->panduanPenggunaan as $fase)

                    <div class="guide-section">
                        {{-- Judul Fase (Contoh: "Persiapan dan Kalibrasi") --}}
                        <h3 class="section-title">{{ $fase->tahap_penggunaan }}</h3>

                        <div class="cards-wrapper">

                            {{--
                               DINAMIS LOOPING DALAM:
                               Loop Dalam untuk LANGKAH DETAIL pada fase tersebut
                            --}}
                            @foreach ($fase->penggunaanDetail as $detail)
                                <div class="step-card">
                                    {{-- Nomor urut langkah (1, 2, 3...) reset setiap ganti fase --}}
                                    <div class="step-number">{{ $loop->iteration }}</div>

                                    {{-- Isi deskripsi langkah --}}
                                    <p class="step-text">{{ $detail->deskripsi_penggunaan }}</p>
                                </div>
                            @endforeach

                        </div>
                    </div>

                @empty
                    {{-- Tampilan jika belum ada data panduan sama sekali --}}
                    <div class="guide-section">
                        <p style="text-align: center; padding: 20px;">
                            Belum ada panduan penggunaan tersedia untuk alat ini.
                        </p>
                    </div>
                @endforelse

            </div>
        </section>
    </main>

    <script src="{{ asset('js/panduan.js') }}"></script>
</body>

</html>
