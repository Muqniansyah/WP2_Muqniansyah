<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman utama</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style/style2.css">
</head>
<body>
    <center>
        <h1>Daftar Siswa</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
            </tr>
            <?php foreach ($siswa_list as $siswa) : ?>
                <tr>
                    <td><?= $siswa['id']; ?></td>
                    <td><?= $siswa['nama']; ?></td>
                    <td><?= $siswa['nis']; ?></td>
                    <td><?= $siswa['kelas']; ?></td>
                    <td><?= $siswa['tglhir']; ?></td>
                    <td><?= $siswa['tmptlhir']; ?></td>
                    <td><?= $siswa['alamat']; ?></td>
                    <td><?= $siswa['jk']; ?></td>
                    <td><?= $siswa['agama']; ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="9" align="center">
                    <a href="<?= base_url('admin'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
