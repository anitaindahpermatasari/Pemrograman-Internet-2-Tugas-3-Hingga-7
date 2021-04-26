<?php
include 'model.php';
//tabel nilai
if (isset($_POST['submit_simpan_nilai'])) {
    $mhs_id = $_POST['mhs_id'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();
    $model->insert_nilai($mhs_id, $nama, $uts, $uas, $tugas);
    header('location:index.php');
}
if (isset($_POST['submit_edit_nilai'])) {
    $mhs_id = $_POST['mhs_id'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();
    $model->update_nilai($mhs_id, $nama, $uts, $tugas,$uas);
    header('location:index.php');
}
if (isset($_GET['mhs_id'])) {
    $id = $_GET['mhs_id'];
    $model = new Model();
    $model->delete_nilai($id);
    header('location:index.php');
}

//tabel mahasiswa
if (isset($_POST['submit_simpan_data'])) {
    $mhs_id = $_POST['mhs_id'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $email = $_POST['email'];
    $model = new Model();
    $model->insert_data($mhs_id, $nama, $semester, $alamat, $no_tlp, $email);
    header('location:mahasiswa.php');
}
if (isset($_POST['submit_edit_data'])) {
    $mhs_id = $_POST['mhs_id'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $email = $_POST['email'];
    $model = new Model();
    $model->update_data($mhs_id, $nama, $semester, $alamat, $no_tlp, $email);
    header('location:mahasiswa.php');
}
if (isset($_GET['mhs_id'])) {
    $id = $_GET['mhs_id'];
    $model = new Model();
    $model->delete_data($id);
    header('location:mahasiswa.php');
}

//tabel absen
if (isset($_POST['submit_simpan_absen'])) {
    $absen_id = $_POST['absen_id'];
    $mhs_id = $_POST['mhs_id'];
    $matakuliah_id = $_POST['matakuliah_id'];
    $tanggal_absen = $_POST['tanggal_absen'];
    $waktu_absen = $_POST['waktu_absen'];
    $status = $_POST['status'];
    $model = new Model();
    $model->insert_absen($absen_id, $mhs_id, $matakuliah_id, $tanggal_absen, $waktu_absen, $status);
    header('location:absen.php');
}
if (isset($_POST['submit_edit_absen'])) {
    $absen_id = $_POST['absen_id'];
    $mhs_id = $_POST['mhs_id'];
    $matakuliah_id = $_POST['matakuliah_id'];
    $tanggal_absen = $_POST['tanggal_absen'];
    $waktu_absen = $_POST['waktu_absen'];
    $status = $_POST['status'];
    $model = new Model();
    $model->update_absen($absen_id, $mhs_id, $matakuliah_id, $tanggal_absen, $waktu_absen, $status);
    header('location:absen.php');
}
if (isset($_GET['absen_id'])) {
    $id = $_GET['absen_id'];
    $model = new Model();
    $model->delete_absen($id);
    header('location:absen.php');
}

//tabel matakuliah
if (isset($_POST['submit_simpan_matakuliah'])) {
    $matakuliah_id = $_POST['matakuliah_id'];
    $nama_matakuliah = $_POST['nama_matakuliah'];
    $model = new Model();
    $model->insert_matakuliah($matakuliah_id, $nama_matakuliah);
    header('location:matakuliah.php');
}
if (isset($_POST['submit_edit_matakuliah'])) {
    $matakuliah_id = $_POST['matakuliah_id'];
    $nama_matakuliah = $_POST['nama_matakuliah'];
    $model = new Model();
    $model->update_matakuliah($matakuliah_id, $nama_matakuliah);
    header('location:matakuliah.php');
}
if (isset($_GET['matakuliah_id'])) {
    $id = $_GET['matakuliah_id'];
    $model = new Model();
    $model->delete_matakuliah($id);
    header('location:matakuliah.php');
}

//tabel kontrak matakuliah
if (isset($_POST['submit_simpan_kontrak'])) {
    $matakuliah_id = $_POST['matakuliah_id'];
    $mhs_id = $_POST['mhs_id'];
    $model = new Model();
    $model->insert_kontrak($matakuliah_id, $mhs_id);
    header('location:kontrak_mk.php');
}
if (isset($_POST['submit_edit_kontrak'])) {
    $matakuliah_id = $_POST['matakuliah_id'];
    $mhs_id = $_POST['mhs_id'];
    $model = new Model();
    $model->update_kontrak($matakuliah_id, $mhs_id);
    header('location:kontrak_mk.php');
}
if (isset($_GET['mhs_id'])) {
    $id = $_GET['mhs_id'];
    $model = new Model();
    $model->delete_kontrak($id);
    header('location:kontrak_mk.php');
}

