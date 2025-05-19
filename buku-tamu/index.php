<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2 class="mb-4">Form Buku Tamu</h2>
    <form action="proses.php" method="post">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Instansi</label>
            <input type="text" name="instansi" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tujuan Kedatangan</label>
            <textarea name="tujuan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
        <a href="daftar.php" class="btn btn-info">Lihat Daftar Tamu</a>
    </form>
</body>
</html>


