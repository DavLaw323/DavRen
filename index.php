<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Tugas Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn { padding: 5px 10px; text-decoration: none; border-radius: 3px; }
        .btn-edit { background-color: #ffc107; color: black; }
        .btn-hapus { background-color: #f44336; color: white; }
    </style>
</head>
<body>

    <h2>Daftar Tugas Kuliah</h2>
    <a href="tambah.php" class="btn" style="background-color: #4CAF50; color: white;">+ Tambah Tugas Baru</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Tugas</th>
            <th>Mata Kuliah</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM tugas ORDER BY deadline ASC");
        $no = 1;
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo htmlspecialchars($row['nama_tugas']); ?></td>
            <td><?php echo htmlspecialchars($row['mata_kuliah']); ?></td>
            <td><?php echo $row['deadline']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <!-- Tombol Edit dan Hapus yang siap kita fungsikan nanti -->
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>
                <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus tugas ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>