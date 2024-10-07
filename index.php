<?php
include('koneksi.php');

$query = "SELECT * FROM burung_kalkun";
$result = $koneksi->query($query);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Data Siswa</title>
</head>
<body>

<div class="container" style="margin-top: 80px">
    <h2>TABEL SISWA</h2>
    <a href="tambah-siswa.php" class="btn btn-primary">TAMBAH DATA</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>Gender</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id_siswa']; ?></td>
                        <td><?php echo $row['nisn']; ?></td>
                        <td><?php echo $row['nama_lengkap']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>
                            <?php if ($row['foto']): ?>
                                <img src="uploads/<?php echo $row['foto']; ?>" width="100" height="100">
                            <?php else: ?>
                                DATA KOSONG
                            <?php endif; ?>
                        </td>
                        <td><?php echo $row['gender']; ?></td>
                        <td>
                            <a href="edit-siswa.php?id=<?php echo $row['id_siswa']; ?>" class="btn btn-info">EDIT</a>
                            <a href="hapus-siswa.php?id=<?php echo $row['id_siswa']; ?>" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Tidak ada data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
