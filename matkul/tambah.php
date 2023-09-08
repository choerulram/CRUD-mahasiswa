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
	<title>Tambah Data Mata Kuliah</title>
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
			<h1 class="h2">Tambah Data Mata Kuliah</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group me-3">
				<button type="button" class="btn btn-success">
				<a href="matkul.php">KEMBALI</a>
				</button>
			</div>
			</div>
		</div>

		<!-- form --> 
        <form method="post" action="tambah_aksi.php">
            <div class="container border p-5 bg-light rounded">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Kode Mata Kuliah</b></label>
                    <input type="text" class="form-control" name="kode_mk" id="exampleFormControlInput1" placeholder="Masukkan kode mata kuliah..." required/>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Nama Mata Kuliah</b></label>
                    <input type="text" class="form-control" name="nama_mk" id="exampleFormControlInput1" placeholder="Masukkan nama mata kuliah..." required/>
                </div>
                <div class="mb-3 w-25">
					<label for="exampleInputEmail1" class="form-label"><b>Semester</b></label>
					<select class="form-select w-75" aria-label="Default select example" name="semester" required>
						<option value="" selected disabled>Pilih Semester</option>
                        <option value="1 (Satu)">1 (Satu)</option>
                        <option value="2 (Dua)">2 (Dua)</option>
                        <option value="3 (Tiga)">3 (Tiga)</option>
                        <option value="4 (Empat)">4 (Empat)</option>
                        <option value="5 (Lima)">5 (Lima)</option>
                        <option value="6 (Enam)">6 (Enam)</option>
                        <option value="7 (Tujuh)">7 (Tujuh)</option>
                        <option value="8 (Delapan)">8 (Delapan)</option>
					</select>
				</div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Jumlah SKS</b></label>
                    <input type="text" class="form-control" name="jumlah_sks" id="exampleFormControlInput1" placeholder="Masukkan jumlsh sks..." required/>
                </div>
                <div class="button-choice p-0">
                    <input type="submit" value="SIMPAN" class="btn btn-success">
                </div>
            </div>
        </form>
        <!-- end form -->
    </main>
    <?php
		include '../include/footer.php';
	?>	
</body>
</html>