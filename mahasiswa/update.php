<?php
session_start();

  // cek session
  if(!isset($_SESSION["login"])) {
    header("Location: ../users/login.php");
    exit;
  }
  
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nim = $_POST['nim'];
$program_studi = $_POST['program_studi'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$foto = $_POST['foto'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nim='$nim', program_studi='$program_studi',
nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',
jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat', foto='$foto' where id='$id'");
 
// mengalihkan halaman kembali ke mahasiswa.php
header("location:mahasiswa.php");
 
?>