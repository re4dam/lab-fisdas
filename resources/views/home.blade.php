<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Neraca</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <div class="container">
        <!-- Header -->
        <header class="header">
            <div class="logo">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <circle cx="20" cy="20" r="18" fill="white" stroke="none" />
                    <path d="M20 8L28 16H24V24H16V16H12L20 8Z" fill="#E53E3E" />
                    <circle cx="20" cy="28" r="3" fill="#E53E3E" />
                </svg>
            </div>

            <div class="search-container">
                <svg viewBox="0 0 24 24">
                    <path d="M21 21l-4.35-4.35M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <input type="text" class="search-input" placeholder="Search">
            </div>


            <div class="category-container">
                <button class="menu-button" id="category-button">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M3 12H21M3 6H21M3 18H21" stroke="white" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>

                <!-- Popup kategori -->
                <div class="category-popup" id="category-popup">
                    <ul>
                        <li>Kategori 1</li>
                        <li>Kategori 2</li>
                        <li>Kategori 3</li>
                        <li>Kategori 4</li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <div class="title-section">
                <h1 class="main-title">Pilih Barang yang kamu butuhkan</h1>
            </div>

            <div class="products-grid">
                @foreach ($barang as $item)
                    <a href="{{ route('barang.show', $item->id_barang) }}"
                        style="text-decoration: none; color: inherit;">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.pexels.com/photos/6975474/pexels-photo-6975474.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                                    width="974" height="650"
                                    alt="Top view of crop anonymous barefoot female measuring weight on scales on white background">
                            </div>
                            <div class="product-label">{{ $item->nama_barang }}</div>
                        </div>
                    </a>
                @endforeach

            </div>
        </main>
    </div>

    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>
