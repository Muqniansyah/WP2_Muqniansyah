<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($peserta as $p){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p->nama ?></td>
			<td><?php echo $p->alamat ?></td>
			<td><?php echo $p->pekerjaan ?></td>
			<td>
			    <?php echo anchor('crud/edit/'.$p->id,'Edit'); ?>
                <?php echo anchor('crud/hapus/'.$p->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>