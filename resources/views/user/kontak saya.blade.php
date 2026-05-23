<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Saya - Web Profile</title>
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
                        <a class="nav-link" href="{{ route('beranda') }}">
                            <i class="bi bi-house-door me-1"></i>Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang.saya') }}">
                            <i class="bi bi-person me-1"></i>Tentang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('kontak.saya') }}">
                            <i class="bi bi-envelope me-1"></i>Kontak
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main style="margin-top: 100px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-5">
                            <h1 class="display-5 fw-bold mb-4">Kontak Saya</h1>
                            <p>Silakan hubungi saya melalui salah satu metode berikut untuk proyek atau pertanyaan.</p>

                            <div class="row g-4 mt-4">
                                <div class="col-md-6">
                                    <div class="p-4 border rounded-4 bg-light">
                                        <h5 class="mb-3">Alamat</h5>
                                        <p>Jl. Contoh No. 123<br>Bandung, Jawa Barat</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 border rounded-4 bg-light">
                                        <h5 class="mb-3">Email</h5>
                                        <p>ahmad@example.com</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 border rounded-4 bg-light">
                                        <h5 class="mb-3">Telepon</h5>
                                        <p>+62 812 3456 7890</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 border rounded-4 bg-light">
                                        <h5 class="mb-3">Sosial Media</h5>
                                        <p class="mb-1"><i class="bi bi-linkedin me-2"></i>LinkedIn</p>
                                        <p><i class="bi bi-instagram me-2"></i>Instagram</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h4 class="mb-3">Kirim Pesan</h4>
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama Anda">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="Email Anda">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Pesan</label>
                                        <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
