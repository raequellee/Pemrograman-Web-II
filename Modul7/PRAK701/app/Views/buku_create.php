<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light mt-5">
    <div class="container">
        <div class="card shadow col-md-6 mx-auto">
            <div class="card-body p-4">
                <h4 class="mb-4">Tambah Buku</h4>
                <?php $errors = session()->getFlashdata('errors') ?? []; ?>
                
                <form action="/buku/store" method="post">
                    <div class="mb-3">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control <?= isset($errors['judul']) ? 'is-invalid' : '' ?>" value="<?= old('judul') ?>">
                        <div class="invalid-feedback"><?= $errors['judul'] ?? '' ?></div>
                    </div>
                    <div class="mb-3">
                        <label>Penulis</label>
                        <input type="text" name="penulis" class="form-control <?= isset($errors['penulis']) ? 'is-invalid' : '' ?>" value="<?= old('penulis') ?>">
                        <div class="invalid-feedback"><?= $errors['penulis'] ?? '' ?></div>
                    </div>
                    <div class="mb-3">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" class="form-control <?= isset($errors['penerbit']) ? 'is-invalid' : '' ?>" value="<?= old('penerbit') ?>">
                        <div class="invalid-feedback"><?= $errors['penerbit'] ?? '' ?></div>
                    </div>
                    <div class="mb-3">
                        <label>Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control <?= isset($errors['tahun_terbit']) ? 'is-invalid' : '' ?>" value="<?= old('tahun_terbit') ?>">
                        <div class="invalid-feedback"><?= $errors['tahun_terbit'] ?? '' ?></div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/buku" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>