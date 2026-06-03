<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Ahmad Sholahuddin Putra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .navbar-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-custom .navbar-brand {
            font-weight: 700;
            color: white !important;
        }
        .navbar-custom .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .navbar-custom .nav-link:hover {
            color: white !important;
            background: rgba(255,255,255,0.1);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('beranda') }}">
                <i class="bi bi-person-circle me-2"></i>Ahmad Sholahuddin Putra
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">
                            <i class="bi bi-house-door me-1"></i>Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('tentang.saya') ? 'active' : '' }}" href="{{ route('tentang.saya') }}">
                            <i class="bi bi-person me-1"></i>Tentang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">
                            <i class="bi bi-briefcase me-1"></i>Portfolio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('kontak.saya') ? 'active' : '' }}" href="{{ route('kontak.saya') }}">
                            <i class="bi bi-envelope me-1"></i>Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main style="margin-top: 100px;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Portofolio</h1>
                    <p class="lead text-muted">Contoh proyek terbaru dan hasil kerja yang menonjol.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">
                            <h3 class="card-title">Situs Web Perusahaan</h3>
                            <p class="card-text text-muted">Desain dan pengembangan website profil perusahaan dengan fitur halaman layanan, galeri, dan form kontak.</p>
                            <span class="badge bg-primary">Web</span>
                            <span class="badge bg-secondary">Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">
                            <h3 class="card-title">Aplikasi Portofolio</h3>
                            <p class="card-text text-muted">Aplikasi web responsif untuk menampilkan karya, testimoni, dan detail kontak secara profesional.</p>
                            <span class="badge bg-primary">UI/UX</span>
                            <span class="badge bg-secondary">Frontend</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">
                            <h3 class="card-title">Toko Online</h3>
                            <p class="card-text text-muted">Platform e-commerce dengan fitur katalog produk, keranjang belanja, dan integrasi pembayaran.</p>
                            <span class="badge bg-primary">E-commerce</span>
                            <span class="badge bg-secondary">Backend</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">
                            <h3 class="card-title">Aplikasi Mobile</h3>
                            <p class="card-text text-muted">Prototipe aplikasi mobile yang dirancang untuk meningkatkan pengalaman pelanggan dan interaksi pengguna.</p>
                            <span class="badge bg-primary">Mobile</span>
                            <span class="badge bg-secondary">Prototype</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
