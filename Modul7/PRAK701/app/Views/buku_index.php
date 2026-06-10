<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Daftar Buku</h2>
            <div>
                <span class="me-3">Halo, <strong><?= session()->get('username'); ?></strong>!</span>
                <a href="/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <a href="/buku/create" class="btn btn-success mb-3">+ Tambah Buku</a>
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($buku as $b): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b['judul']; ?></td>
                            <td><?= $b['penulis']; ?></td>
                            <td><?= $b['penerbit']; ?></td>
                            <td><?= $b['tahun_terbit']; ?></td>
                            <td>
                                <a href="/buku/edit/<?= $b['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="/buku/delete/<?= $b['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php if(empty($buku)): ?>
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data buku.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>