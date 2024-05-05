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
    <table>
        <tr>
            <th colspan="3" class="judul">
            Tampil Data D-Lemas
            </th>
        </tr>

        <tr>
            <td colspan="3">
            <hr class="disable-line">
            </td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <?= $nama; ?>
            </td>
        </tr>

        <tr>
            <td>Nis</td>
            <td>:</td>
            <td>
                <?= $nis; ?>
            </td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
                <?= $kelas; ?>
            </td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <?= $tglhir; ?>
            </td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>
                <?= $tmptlhir; ?>
            </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <?= $alamat; ?>
            </td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <?= $jk; ?>
            </td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
                <?= $agama; ?>
            </td>
        </tr>
            
        <tr>
            <td colspan="3" align="center">
                <a href="<?= base_url('admin'); ?>">Kembali</a>
            </td>
        </tr>
    </table>
    </center>
</body>
</html>