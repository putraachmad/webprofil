<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya - Ahmad Sholahuddin Putra</title>
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
    <!-- Navbar -->
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
                            <i class="bi bi-briefcase me-1"></i>Portofolio
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

    <!-- Main Content -->
    <main style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1 class="display-4 fw-bold">Tentang Saya</h1>
                    <p class="lead text-muted">Kenali lebih jauh tentang kami</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h3 class="mb-4">Siapa Saya?</h3>
                            <p class="text-muted">
                                Saya adalah Ahmad Sholahuddin Putra, lahir di Jombang dan sedang menempuh studi di Universitas Hasyim Asy'ari (Unhasy). Saya bekerja sebagai fullstack developer dengan fokus membangun aplikasi web profesional yang responsif dan user-friendly.
                            </p>
                            <hr class="my-4">
                            <h3 class="mb-4">Visi Saya</h3>
                            <p class="text-muted">
                                Menjadi mitra terpercaya dalam transformasi digital untuk bisnis Anda.
                            </p>
                            <hr class="my-4">
                            <h3 class="mb-4">Misi Saya</h3>
                            <ul class="text-muted">
                                <li>Menyediakan solusi teknologi yang inovatif dan berkualitas</li>
                                <li>Membangun hubungan jangka panjang dengan klien</li>
                                <li>Terus mengembangkan kompetensi dan pengetahuan</li>
                                <li>Memberikan hasil terbaik untuk setiap proyek</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>