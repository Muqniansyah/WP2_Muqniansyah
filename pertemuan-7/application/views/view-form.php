<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input D-Lemas</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style/style.css">
</head>
<body>
    <center>
    <form action="<?= base_url('admin/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3" class="judul">
                Form Input Data D-Lemas
                </th>
            </tr>

            <tr>
                <td colspan="3">
                <hr>
                </td>
            </tr>

            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama"> 
                </td>
                <td class="error">
                    <?php echo form_error('nama'); ?>
                </td>
            </tr>

            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="nis" id="nis">
                </td>
                <td class="error">
                    <?php echo form_error('nis'); ?>
                </td>
            </tr>

            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <select name="kelas" id="kelas">
                        <option value="">Pilih Kelas</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td class="error">
                    <?php echo form_error('kelas'); ?>
                </td>
            </tr>

            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="date" name="tglhir" id="tglhir" min="2004-01-01" max="2010-01-01" value="2004-01-01">
                </td>
                <td class="error">
                    <?php echo form_error('tglhir'); ?>
                </td>
            </tr>

            <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tmptlhir" id="tmptlhir">
                </td>
                <td class="error">
                    <?php echo form_error('tmptlhir'); ?>
                </td>
            </tr>

            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <textarea name="alamat" id="alamat" cols="5" rows="2"></textarea>
                </td>
                <td class="error">
                    <?php echo form_error('alamat'); ?>
                </td>
            </tr>

            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" id="jk1" value="cowo">
                    <label for="jk1">Laki - Laki</label>
                    <input type="radio" name="jk" id="jk2" value="cewe">
                    <label for="jk2">Perempuan</label>
                </td>
                <td class="error">
                    <?php echo form_error('jk'); ?>
                </td>
            </tr>

            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katolik">Katolik</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                        <option value="protestan">Protestan</option>
                        <option value="khonghucu">Khonghucu</option>
                    </select>
                </td>
                <td class="error">
                    <?php echo form_error('agama'); ?>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>