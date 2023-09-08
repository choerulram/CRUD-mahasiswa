<?php
session_start();

  // cek session
  if(!isset($_SESSION["login"])) {
    header("Location: ../users/login.php");
    exit;
  }

// koneksi database
include '../mahasiswa/koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_mk = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$semester = $_POST['semester'];
$jumlah_sks = $_POST['jumlah_sks'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mata_kuliah (kode_mk,nama_mk,semester,jumlah_sks) values('$kode_mk','$nama_mk','$semester','$jumlah_sks')");
 
// mengalihkan halaman kembali ke index.php
header("location:matkul.php");
 
?>

