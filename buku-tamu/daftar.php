<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2 class="mb-4">Daftar Tamu</h2>
    <a href="index.php" class="btn btn-success mb-3">Kembali ke Form</a>

    <!-- Form Pencarian -->
    <form method="GET" class="form-inline mb-3">
        <input type="text" name="cari" class="form-control mr-2" placeholder="Cari nama atau instansi" value="<?php if(isset($_GET['cari'])) echo $_GET['cari']; ?>">
        <button type="submit" class="btn btn-primary">Cari</button>
        <a href="daftar.php" class="btn btn-secondary ml-2">Reset</a>
    </form>

    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Instansi</th>
                <th>Tujuan</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            if (isset($_GET['cari'])) {
                $keyword = mysqli_real_escape_string($koneksi, $_GET['cari']);
                $sql = "SELECT * FROM buku_tamu 
                        WHERE nama LIKE '%$keyword%' OR instansi LIKE '%$keyword%' 
                        ORDER BY id DESC";
            } else {
                $sql = "SELECT * FROM buku_tamu ORDER BY id DESC";
            }

            $result = mysqli_query($koneksi, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>$no</td>
                            <td>{$row['nama']}</td>
                            <td>{$row['instansi']}</td>
                            <td>{$row['tujuan']}</td>
                            <td>{$row['tanggal']}</td>
                            <td>{$row['waktu']}</td>
                            <td>
                                <a href='hapus.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Hapus</a>
                            </td>
                          </tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='7'>Tidak ada data ditemukan.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

