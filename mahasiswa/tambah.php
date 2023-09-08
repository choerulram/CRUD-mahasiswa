<?php
session_start();

	// cek session
	if(!isset($_SESSION["login"])) {
		header("Location: ../users/login.php");
		exit;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<?php
		include '../include/header.php';
		include '../include/sidebar.php';
	?>
</head>
<body>
	<?php
		include '../include/svg.php';
	?>
	<!-- main program -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Tambah Data Mahasiswa</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group me-3">
				<button type="button" class="btn btn-success">
				<a href="mahasiswa.php">KEMBALI</a>
				</button>
			</div>
			</div>
		</div>

		<!-- form -->
		<form method="post" action="tambah_aksi.php">
			<div class="container border p-5 bg-light rounded">
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label"><b>NIM</b></label>
					<input type="text" name="nim" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nim..." required/>
				</div>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label"><b>Program Studi</b></label>
					<select class="form-select w-100" aria-label="Default select example" name="program_studi" required>
						<option value="" selected disabled>Pilih Program Studi</option>
						<option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
						<option value="D3 Teknik Elektro">D3 Teknik Elektro</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label"><b>Nama</b></label>
					<input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama..." required/>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label"><b>Tempat Lahir</b></label>
					<input type="text" name="tempat_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan tempat lahir..." required/>
				</div>
				<div class="mb-3 w-25">
					<label for="exampleFormControlInput1" class="form-label"><b>Tanggal Lahir</b></label>
					<input type="date" name="tanggal_lahir" class="form-control" id="exampleFormControlInput1" required/>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label"><b>Jenis Kelamin</b></label><br/>
					<input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-Laki" required/>
					<label for="laki_laki">Laki-laki</label>
					<input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required/>
					<label for="perempuan">Perempuan</label>
				</div>
				<div class="mb-3 w-25">
					<label for="exampleInputEmail1" class="form-label"><b>Agama</b></label>
					<select class="form-select w-75" aria-label="Default select example" name="agama" required>
						<option value="" selected disabled>Pilih Agama</option>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
						<option value="Konghuchu">Konghuchu</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label"><b>Alamat</b></label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Tuliskan alamat lengkap anda..." name="alamat" required></textarea>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label"><b>Foto</b></label>
					<input type="file" class="form-control" id="exampleFormControlInput1" name="foto"/>
				</div>
				<div class="button-choice p-0">
					<input class="btn btn-success" type="submit" value="SIMPAN">
				</div>
			</div>
		</form>
		<!-- end form -->
		
	</main>
	<!-- end program -->
	<?php
		include '../include/footer.php';
	?>	
</body>
</html>