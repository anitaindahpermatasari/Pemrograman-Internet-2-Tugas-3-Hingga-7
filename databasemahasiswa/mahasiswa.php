<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Data Mahasiswa</title>
</head>

<body>
	    <?php
            include 'navbar.php';
        ?>		
	<div class="container-fluid">
		<h1>Data Mahasiswa</h1>
		<a href="create_data.php">Tambah Data</a>
		<br>
		<a href="print_data.php" target="_blank">Cetak Data</a>
		<br><br>
		<table class="table table-striped" border=1>
			<thead>
				<tr>
                    <th>No.</th>
                    <th>Mahasiswa ID</th>
                    <th>Nama</th>
                    <th>Semester</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model->tampil_data();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
						<tr>
                            <td><?=$index++ ?></td>
                            <td><?=$data->mhs_id ?></td>
                            <td><?=$data->nama ?></td>
                            <td><?=$data->semester ?></td>
                            <td><?=$data->alamat ?></td>
                            <td><?=$data->no_tlp ?></td>
                            <td><?=$data->email ?></td>
							<td>
								<a name="edit" id="edit" href="edit_data.php?mhs_id=<?=$data->mhs_id ?>">Edit</a>
								<a name="hapus" id="hapus" href="proses.php?mhs_id=<?=$data->mhs_id ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel data mahasiswa.</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>

</html>