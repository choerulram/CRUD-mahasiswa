<?php
session_start();

  // cek session
  if(!isset($_SESSION["login"])) {
    header("Location: ../users/login.php");
    exit;
  }

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Settings</title>
    <style>
      .p {
        /* text-decoration: italic; */
        /* background-color: blue; */
        margin: auto;
        margin-top: 60px;
        margin-left: 20%;
        margin-right: 15%;
      }
    </style>
    <?php
      include '../include/header.php';
      include '../include/sidebar.php';
    ?>
</head>
<body>
    <?php
      include '../include/svg.php';
    ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <h1 class="p"><i>Ini Adalah Halaman Settings</i></h1>
      </div>
  </div>
</body>