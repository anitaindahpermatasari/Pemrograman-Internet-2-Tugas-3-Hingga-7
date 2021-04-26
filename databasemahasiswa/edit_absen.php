<?php
$id = $_GET['absen_id'];
include 'model.php';
$model = new Model();
$data = $model->edit_absen($id);
?>
<!doctype html>
<html lang="en">

<head>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Edit Absen Mahasiswa</title>
</head>

<body>
	    <?php
            include 'navbar.php';
        ?>		
	<div class="container-fluid">
		<h1>Edit Absen Mahasiswa</h1>
		<a href="absen.php">Kembali</a>
		<br><br>
		<form action="proses.php" method="post">
			<label>Absen ID</label>
			<br>
			<input type="text" name="absen_id" value="<?php echo $data->absen_id ?>">
			<br>
			<label>Mahasiswa ID</label>
			<br>
			<input type="text" name="mhs_id" value="<?php echo $data->mhs_id ?>">
			<br>
			<label>Matakuliah ID</label>
			<br>
			<input type="text" name="matakuliah_id" value="<?php echo $data->matakuliah_id ?>">
			<br>
			<label>Tanggal Absen</label>
			<br>
			<input type="date" name="tanggal_absen" value="<?php echo $data->tanggal_absen ?>">
			<br>
			<label>Waktu Absen</label>
			<br>
			<input type="time" name="waktu_absen" value="<?php echo $data->waktu_absen ?>">
			<br>
			<label>Status</label>
			<br>
			<input type="text" name="status" value="<?php echo $data->status ?>">
			<br><br>
			<button type="submit" name="submit_edit_absen" class="btn btn-success">Submit</button>
			<button type="reset" class="btn btn-danger">Reset</button>
		</form>
	</div>
</body>

</html>