<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Data Bengkel</title>
</head>
<body>
    <h2>Hasil Data Bengkel</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jenis Service</th>
        </tr>
        <?php foreach ($hasil as $row): ?>
        <tr>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['jenis_service']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
