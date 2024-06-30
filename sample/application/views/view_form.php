<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Bengkel</title>
</head>
<body>
    <h2>Form Input Bengkel</h2>
    <form action="<?php echo base_url('FormController/simpan_form'); ?>" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="jenis_service">Jenis Service:</label><br>
        <input type="text" id="jenis_service" name="jenis_service"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
