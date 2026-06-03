<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Praktikum Web II</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #f0f4ff; }
        .navbar { background: linear-gradient(135deg, #667eea, #764ba2); }
        .hero { background: linear-gradient(135deg, #667eea, #764ba2); color: white; padding: 100px 0; }
        .card-nim { border-left: 5px solid #667eea; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">🎓 Web II Praktikum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Selamat Datang! 👋</h1>
        <p class="lead">Website Praktikum Pemrograman Web II</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow card-nim p-4">
                    <h4 class="fw-bold text-purple mb-3">👤 Identitas Praktikan</h4>
                    <p class="mb-1"><strong>Nama:</strong> <?= $profil['nama'] ?></p>
                    <p class="mb-1"><strong>NIM:</strong> <?= $profil['nim'] ?></p>
                    <p class="mb-3"><strong>Prodi:</strong> <?= $profil['prodi'] ?></p>
                    <a href="/profil" class="btn btn-primary">Lihat Profil Lengkap →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>