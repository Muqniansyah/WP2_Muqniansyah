<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat form validation dengan codeigniter</title>
</head>
<body>
    <h1>Membuat Form Validation dengan Codeigniter</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('form/aksi') ?>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama"><br>
        <?php echo form_error('nama'); ?>

        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
        <?php echo form_error('email'); ?>

        <label for="konfir_email">Konfirmasi Email</label><br>
        <input type="text" name="konfir_email"><br>
        <?php echo form_error('konfir_email'); ?>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>