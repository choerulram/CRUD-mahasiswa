<?php
session_start();

  // cek session
  if(!isset($_SESSION["login"])) {
    header("Location: ../users/login.php");
    exit;
  }
  
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from mahasiswa where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:mahasiswa.php");
 
?>