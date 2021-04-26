<?php
$id = $_GET['mhs_id'];
include 'model.php'; 
$model = new Model();
$data = $model->edit_nilai($id);
?>
<!doctype html>
<html lang="en">

<head>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Edit Nilai Mahasiswa</title>
</head>

<body>
	    <?php
            include 'navbar.php';
        ?>		
	<div class="container-fluid">
		<h1>Edit Nilai Mahasiswa</h1>
		<a href="index.php">Kembali</a>
		<br><br>
		<form action="proses.php" method="post">
			<label>Mahasiswa ID</label>
			<br>
			<input type="text" name="mhs_id" value="<?php echo $data->mhs_id ?>">
			<br>
			<label>Nama</label>
			<br>
			<input type="text" name="nama" value="<?php echo $data->nama ?>">
			<br>
			<label>UTS</label>
			<br>
			<input type="number" name="uts" value="<?php echo $data->uts ?>">
			<br>
			<label>UAS</label>
			<br>
			<input type="number" name="uas" value="<?php echo $data->uas ?>">
			<br>
			<label>Tugas</label>
			<br>
			<input type="number" name="tugas" value="<?php echo $data->tugas ?>">
			<br><br>
			<button type="submit" name="submit_edit_nilai" class="btn btn-success">Submit</button>
			<button type="reset" class="btn btn-danger">Reset</button>
		</form>
	</div>
</body>

</html>