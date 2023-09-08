<!-- sidebar -->
<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="../portfolio/dashboard.php">
                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../mahasiswa/mahasiswa.php">
                <svg class="bi"><use xlink:href="#people"/></svg>
                Mahasiswa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../matkul/matkul.php">
                <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                Mata Kuliah
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../portfolio/portfolio.php">
                <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                Portfolio
              </a>
            </li>
          </ul>
          
          <hr class="my-3">

          <ul class="nav flex-column mb-auto">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../portfolio/settings.php">
                <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
                Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#" onclick="konfirmasiLogout()">
                <svg class="bi"><use xlink:href="#door-closed"/></svg>
                Log out
              </a>
            </li>

            <!-- konfirmasi logout -->
            <script>
              function konfirmasiLogout() {
                var konfirmasi = confirm("Apakah Anda yakin ingin keluar?");
                if (konfirmasi) {
                  // Tambahkan kode untuk melakukan tindakan logout di sini
                  window.location.href = "../users/logout.php";
                }
              }
            </script>
            
          </ul>
        </div>
      </div>
    </div>
    <!-- end sidebar -->