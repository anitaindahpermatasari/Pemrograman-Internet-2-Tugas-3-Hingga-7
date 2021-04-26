<?php
include 'connection.php';
class Model extends Connection
{
	//tabel nilai
	public function __construct()
    {
        $this->conn = $this->get_connection();
    }
	public function insert_nilai($mhs_id, $nama, $uts, $uas, $tugas)
	{
	    $na = $this->na($uts,$tugas,$uas);
	    $status = $this->status_nilai($na);
	    $sql = "INSERT INTO tbl_nilai (mhs_id, nama, uts, uas, tugas, na, status) VALUES ('$mhs_id', '$nama',
	            '$uts', '$uas', '$tugas', '$na', '$status')";
	    $this->conn->query($sql);
	}
	public function na($uts,$tugas,$uas)
	{
	    $na=(0.3*$uts)+(0.3*$tugas)+(0.4*$uas);
	    return $na;
	}
	public function status_nilai($na)
	{
	    $status="";
	    if($na >=60 && $na <=100){
	    	$status="Lulus";
		}else{
		    $status="Tidak Lulus";
		}
		    return $status;
	}
	public function tampil_nilai()
	{
	    $sql = "SELECT * FROM tbl_nilai";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
		}
	}
	public function edit_nilai($mhs_id)
	{
	    $sql = "SELECT * FROM tbl_nilai WHERE mhs_id='$mhs_id'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_nilai($mhs_id, $nama, $uts, $tugas,$uas)
	{
	    $na=$this->na($uts,$tugas,$uas);
	    $status=$this->status_nilai($na);
	    $sql = "UPDATE tbl_nilai SET nama='$nama', uts='$uts', uas='$uas', tugas='$tugas', na='$na',status='$status' WHERE mhs_id='$mhs_id'";
	    $this->conn->query($sql);
	}
	public function delete_nilai($mhs_id)
	{
	    $sql = "DELETE FROM tbl_nilai WHERE mhs_id='$mhs_id'";
	    $this->conn->query($sql);
	}
	//tabel mahasiswa
	public function insert_data($mhs_id, $nama, $semester, $alamat, $no_tlp, $email)
	{
	    $sql = "INSERT INTO tbl_mahasiswa (mhs_id, nama, semester, alamat, no_tlp, email) VALUES ('$mhs_id', '$nama',
	    	   '$semester', '$alamat', '$no_tlp', '$email')";
	    $this->conn->query($sql);
	}
	public function tampil_data()
	{
	    $sql = "SELECT * FROM tbl_mahasiswa";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_data($mhs_id)
	{
	    $sql = "SELECT * FROM tbl_mahasiswa WHERE mhs_id='$mhs_id'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_data($mhs_id, $nama, $semester, $alamat, $no_tlp, $email)
	{
	    $sql = "UPDATE tbl_mahasiswa SET nama='$nama', semester='$semester', alamat='$alamat', no_tlp='$no_tlp', email='$email' WHERE mhs_id='$mhs_id'";
	    $this->conn->query($sql);
	}
	public function delete_data($mhs_id)
	{
	    $sql = "DELETE FROM tbl_mahasiswa WHERE mhs_id='$mhs_id'";
	    $this->conn->query($sql);
	}
	//tabel absen
	public function insert_absen($absen_id, $mhs_id, $matakuliah_id, $tanggal_absen, $waktu_absen, $status)
	{
	    $sql = "INSERT INTO tbl_absen (absen_id, mhs_id, matakuliah_id, tanggal_absen, waktu_absen, status) VALUES ('$absen_id', '$mhs_id',
	    	   '$matakuliah_id', '$tanggal_absen', '$waktu_absen', '$status')";
	    $this->conn->query($sql);
	}
	public function tampil_absen()
	{
	    $sql = "SELECT * FROM tbl_absen";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_absen($absen_id)
	{
	    $sql = "SELECT * FROM tbl_absen WHERE absen_id='$absen_id'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_absen($absen_id, $mhs_id, $matakuliah_id, $tanggal_absen, $waktu_absen, $status)
	{
	    $sql = "UPDATE tbl_absen SET mhs_id='$mhs_id', matakuliah_id='$matakuliah_id', tanggal_absen='$tanggal_absen', waktu_absen='$waktu_absen', status='$status' WHERE absen_id='$absen_id'";
	    $this->conn->query($sql);
	}
	public function delete_absen($absen_id)
	{
	    $sql = "DELETE FROM tbl_absen WHERE absen_id='$absen_id'";
	    $this->conn->query($sql);
	}
	//tabel matakuliah
	public function insert_matakuliah($matakuliah_id, $nama_matakuliah)
	{
	    $sql = "INSERT INTO matakuliah (matakuliah_id, nama_matakuliah) VALUES ('$matakuliah_id', '$nama_matakuliah')";
	    $this->conn->query($sql);
	}
	public function tampil_matakuliah()
	{
	    $sql = "SELECT * FROM matakuliah";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_matakuliah($matakuliah_id)
	{
	    $sql = "SELECT * FROM matakuliah WHERE matakuliah_id='$matakuliah_id'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_matakuliah($matakuliah_id, $nama_matakuliah)
	{
	    $sql = "UPDATE matakuliah SET matakuliah_id='$matakuliah_id', nama_matakuliah='$nama_matakuliah'";
	    $this->conn->query($sql);
	}
	public function delete_matakuliah($matakuliah_id)
	{
	    $sql = "DELETE FROM matakuliah WHERE matakuliah_id='$matakuliah_id'";
	    $this->conn->query($sql);
	}
	//tabel kontrak matakuliah
	public function insert_kontrak($matakuliah_id, $mhs_id)
	{
	    $sql = "INSERT INTO kontrak_mk (matakuliah_id, mhs_id) VALUES ('$matakuliah_id', '$mhs_id')";
	    $this->conn->query($sql);
	}
	public function tampil_kontrak()
	{
	    $sql = "SELECT * FROM kontrak_mk";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_kontrak($mhs_id)
	{
	    $sql = "SELECT * FROM kontrak_mk WHERE mhs_id='$mhs_id'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_kontrak($matakuliah_id, $mhs_id)
	{
	    $sql = "UPDATE kontrak_mk SET matakuliah_id='$matakuliah_id', mhs_id='$mhs_id'";
	    $this->conn->query($sql);
	}
	public function delete_kontrak($mhs_id)
	{
	    $sql = "DELETE FROM kontrak_mk WHERE mhs_id='$mhs_id'";
	    $this->conn->query($sql);
	}
}
