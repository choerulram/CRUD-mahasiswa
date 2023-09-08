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
  <title>Data Mahasiswa</title>
  <?php
	include '../include/header.php';
	include '../include/sidebar.php';
  ?>
  <body>
    
	<?php
		include '../include/svg.php';
	?>
	<!-- main program -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
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
              <th scope="col">NIM</th>
              <th scope="col">Program Studi</th>
              <th scope="col">Nama</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Agama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Foto</th>
              <th scope="col">OPSI</th>
            </tr>           
          </thead>
          <tbody>
          <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from mahasiswa");
            while($d = mysqli_fetch_array($data)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['program_studi']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tempat_lahir']; ?></td>
                <td><?php echo $d['tanggal_lahir']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['foto']; ?></td>
                <td>
                  <button type="button" class="btn btn-warning">
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                  </button>
                  <button type="button" class="btn btn-danger" onclick="hapusData(<?php echo $d['id']; ?>)">HAPUS</button>
                </td>
              </tr>
              <?php 
            }
            ?>

            <!-- konfirmasi menghapus data -->
            <script>
                function hapusData(id) {
                    var konfirmasi = confirm("Apakah Anda yakin akan menghapus data ini?");
                    if (konfirmasi) {
                        window.location.href = "hapus.php?id=" + id;
                    }
                }
            </script>
            <!-- end confirm -->
            
          </tbody>
        </table>
      </div>
    </main>
	<!-- end main program -->

  
	<?php
		include '../include/footer.php';
	?>		
