<html>
<head>
	<title>Form Upload</title>
</head>
<body>
	<center>
        <h1>Membuat Upload File Dengan CodeIgniter</h1>
    </center>
	<?php echo $error;?>
    <!--  form tersebut kita arahkan ke method aksi_upload pada controller upload -->
	<?php echo form_open_multipart('upload/aksi_upload');?>

	<input type="file" name="berkas" />

	<br /><br />

	<input type="submit" value="upload" />

</form>

</body>
</html>