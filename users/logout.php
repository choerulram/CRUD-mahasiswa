<?php

session_start();

// menghapus semua session
$_SESSION = [];
session_unset();
session_destroy();

// menghapus cookie dengan nama id dan key
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

// mengarahkan ke halaman index
header("Location: ../index.php");
exit;

?>