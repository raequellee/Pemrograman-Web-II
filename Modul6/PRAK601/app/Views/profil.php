<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - <?= $profil['nama'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #f0f4ff; }
        .navbar { background: linear-gradient(135deg, #667eea, #764ba2); }
        .avatar { width: 120px; height: 120px; background: linear-gradient(135deg, #667eea, #764ba2);
                  border-radius: 50%; display: flex; align-items: center; justify-content: center;
                  font-size: 48px; color: white; margin: 0 auto 20px; }
        .badge-skill { background: #667eea; font-size: 0.9rem; margin: 3px; }
        .profile-card { border-radius: 20px; overflow: hidden; }
        .profile-header { background: linear-gradient(135deg, #667eea, #764ba2); color: white; padding: 40px 30px; text-align: center; }
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
                <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link active" href="/profil">Profil</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow profile-card">
                    <div class="profile-header">
                        <img src="/img/foto.jpeg" alt="Foto Profil" 
     style="width:120px; height:120px; border-radius:50%; object-fit:cover; margin: 0 auto 20px; display:block;">
                        <h3 class="fw-bold mb-1"><?= $profil['nama'] ?></h3>
                        <p class="mb-0 opacity-75"><?= $profil['prodi'] ?></p>
                    </div>
                    <div class="card-body p-4">
                        <table class="table table-borderless">
                            <tr><th width="130">NIM</th><td>: <?= $profil['nim'] ?></td></tr>
                            <tr><th>Prodi</th><td>: <?= $profil['prodi'] ?></td></tr>
                            <tr><th>Email</th><td>: <?= $profil['email'] ?></td></tr>
                            <tr><th>Hobi</th><td>: <?= $profil['hobi'] ?></td></tr>
                        </table>
                        <hr>
                        <h6 class="fw-bold mb-2">💡 Skills</h6>
                        <?php foreach($profil['skill'] as $s): ?>
                            <span class="badge badge-skill"><?= $s ?></span>
                        <?php endforeach; ?>
                        <div class="mt-4">
                            <a href="/" class="btn btn-outline-secondary">← Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>