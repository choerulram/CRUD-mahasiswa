<?php 
$koneksi = mysqli_connect("localhost","root","","akademik");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


function registrasi($data) { 
	global $koneksi;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$confirm_password = mysqli_real_escape_string($koneksi, $data["confirm_password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username yang Anda masukkan sudah terdaftar!');
            </script>";
        return false;
    }

	// cek konfirmasi password
	if($password!==$confirm_password) {
		echo "<script>
				alert('Konfirmasi password yang Anda masukkan salah');
			</script>";
		return false;
	} 

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru ke database
	mysqli_query($koneksi, "INSERT INTO users (username, password) VALUES ('$username', '$password')");

    return mysqli_affected_rows($koneksi);
}
?>