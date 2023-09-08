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
$nim = $_POST['nim'];
$program_studi = $_POST['program_studi'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$foto = $_POST['foto'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa (nim,program_studi,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat,foto) values ('$nim','$program_studi','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat','$foto')");
 
// mengalihkan halaman kembali ke index.php
header("location:mahasiswa.php");
 
?>