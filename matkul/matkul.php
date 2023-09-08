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
	<title>Data Mata Kuliah</title>
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
			<h1 class="h2">Mata Kuliah</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group me-3">
				<button type="button" class="btn btn-success">
				<a href="tambah.php">TAMBAH</a>
				</button>
			</div>
			</div>
		</div>
		<div class="table-responsive small">
			<table class="table table-striped table-sm">
				<thead>
					<tr>
					<th scope="col">NO</th>
					<th scope="col">Kode Mata Kuliah</th>
					<th scope="col">Nama Mata Kuliah</th>
					<th scope="col">Semester</th>
					<th scope="col">Jumlah SKS</th>
					<th scope="col">OPSI</th>
					</tr>           
				</thead>
				<tbody>
					<?php 
					include '../mahasiswa/koneksi.php';
					$no = 1;
					$data = mysqli_query($koneksi,"select * from mata_kuliah");
					while($d = mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['kode_mk']; ?></td>
							<td><?php echo $d['nama_mk']; ?></td>
							<td><?php echo $d['semester']; ?></td>
							<td><?php echo $d['jumlah_sks']; ?></td>
							<td>
								<button type="button" class="btn btn-warning">
									<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
								</button>
								<button type="button" class="btn btn-danger" onclick="hapusData(<?php echo $d['id']; ?>)">HAPUS</button>
								<!-- <button type="button" class="btn btn-danger">
									<a href="hapus.php?id=<?php echo $d['kode_mk']; ?>">HAPUS</a>
								</button> -->
							</td>
						</tr>
						<?php 
					}
					?>
				</tbody>

				<!-- konfirmasi menghapus data -->
				<script>
					function hapusData(id) {
						var konfirmasi = confirm("Apakah Anda yakin akan menghapus data ini?");
						if (konfirmasi) {
							window.location.href = "hapus.php?id=" + id;
						}
					}
            	</script>

			</table>
		</div>
    </main>
	<!-- end main program -->
	<?php
		include '../include/footer.php';
	?>		
</body>
</html>