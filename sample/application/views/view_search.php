<!DOCTYPE html>
<html>
<head>
	<title>Search Data</title>
</head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<body>

<div class="container">
    <div class="row" style="margin-top: 50px">    
        <div class="col-xs-4 col-xs-offset-4">
        	<form action="<?= base_url('index.php/SearchController/index/') ?>" method="get">
			    <div class="input-group">
	                <input type="text" class="form-control" name="keyword" placeholder="Masukan Kata Kunci...">
	                <span class="input-group-btn">
	                    <button class="btn btn-default" type="submit">Cari</button>
	                </span>
	            </div>
        	</form>
        </div>
	</div>
	<div class="row">
		<div class="col-xs-4 col-xs-offset-4 text-center">
			<h3>Data Barang</h3>
			<?php if(!empty($keyword)){ ?>
			<p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b></p>
			<?php } ?>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Jenis Servis</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($data as $row) { ?>
			    <tr>
			      <th scope="row"><?= $row['id'] ?></th>
			      <td><?= $row['nama'] ?></td>
			      <td><?= $row['jenis_service'] ?></td>
			    </tr>
			  	<?php }?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>