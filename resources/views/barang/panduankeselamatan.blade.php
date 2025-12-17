<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- DINAMIS: Judul Tab Browser --}}
    <title>{{ $barang->nama_barang }} - Panduan Keselamatan</title>

    <link rel="stylesheet" href="{{ asset('css/panduankeselamatan.css') }}">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                {{-- Logo Aplikasi --}}
                <img src="{{ asset('logo.png') }}" alt="Logo" class="logo-img" onerror="this.style.display='none'">
            </div>
            <nav class="nav">
                <a href="{{ route('barang.show', $barang->id_barang) }}" class="nav-link">Detail Barang</a>
                <a href="{{ route('barang.keselamatan', $barang->id_barang) }}" class="nav-link active">Panduan
                    Keselamatan</a>
                <a href="{{ route('barang.panduan', $barang->id_barang) }}" class="nav-link">Panduan Penggunaan</a>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <section class="red-section">
            <div class="red-container">
                {{-- DINAMIS: Nama Barang --}}
                <h1 class="title">{{ strtoupper($barang->nama_barang) }}</h1>

                <div class="neraca-container">
                    {{-- DINAMIS: Gambar Barang --}}
                    <img src="{{ asset('images/' . $barang->gambar) }}" alt="{{ $barang->nama_barang }}"
                        class="neraca-image">
                </div>
            </div>
        </section>

        <section class="cards-section">
            <div class="panduan-container">
                <div class="panduan-title-container">
                    <h2 class="panduan-title">PANDUAN KESELAMATAN</h2>
                    <div class="panduan-line"></div>
                </div>
            </div>

            <div class="cards-container">
                {{-- DINAMIS: Looping Data Panduan Keselamatan --}}
                @forelse($barang->panduanKeselamatan as $keselamatan)
                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                {{-- Ikon statis (tanda peringatan umum) --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                    </path>
                                    <line x1="12" y1="9" x2="12" y2="13"></line>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                            </div>
                            {{-- Judul menggunakan nomor urut karena di DB tidak ada kolom judul --}}
                            <h3 class="card-title">Poin Keselamatan {{ $loop->iteration }}</h3>
                        </div>
                        <div class="card-content">
                            {{-- Isi deskripsi dari database --}}
                            <p>{{ $keselamatan->deskripsi_keselamatan }}</p>
                        </div>
                    </div>
                @empty
                    {{-- Tampilan jika data kosong --}}
                    <div class="card">
                        <div class="card-content">
                            <p>Belum ada data panduan keselamatan untuk alat ini.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            {{-- Tampilkan indikator scroll hanya jika datanya banyak (misal > 3) --}}
            @if ($barang->panduanKeselamatan->count() > 3)
                <div class="scroll-indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                    Geser untuk melihat lebih banyak
                </div>
            @endif
        </section>
    </main>

    <script src="{{ asset('js/panduankeselamatan.js') }}"></script>
</body>

</html>
