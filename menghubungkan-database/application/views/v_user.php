<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
    <h1>Mengenal model pada codeigniter</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
        </tr>
        <?php foreach($user as $u) { ?>
        <tr>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->alamat ?></td>
            <td><?php echo $u->pekerjaan ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<!-- menampilkan data dengan menggunakan foreach(). -->
<!-- variabel $user akan menjadi $u. $user adalah variabel yang di parsing dari controller tadi dan berisi data user dalam bentuk array.  -->