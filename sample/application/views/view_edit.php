<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($peserta as $p){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $p->id ?>">
					<input type="text" name="nama" value="<?php echo $p->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $p->alamat ?>"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $p->pekerjaan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>