<?php
session_start();

// cek session
if(isset($_SESSION['login'])) {
    header("Location: ../include/dashboard.php");
    exit;
} 

// import file koneksi
include 'koneksi.php';

    // cek tombol register apa sudah di klik
    if(isset($_POST["register"])) {

        // memanggil fungsi registrasi di koneksi.php dengan kondisi dibawah
        if(registrasi($_POST) > 0) {
            echo "<script>
                    alert('User baru berhasil ditambahkan!');
                    window.location.href = 'login.php';
                </script>";
            exit;
        } else {
            echo mysqli_error($koneksi);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
            margin: none;
            padding: none;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
        }
        .container {
            width: 40%;
            border-radius: 10px;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
        }
        p {
            text-align: center;
        }
    </style>
</head>
<body>
    
    <!-- form register -->
    <div class="container border p-5 bg-light rounded">
        <div class="text-center mb-4">
            <img src="https://cdn-icons-png.flaticon.com/512/4407/4407405.png" class="img-fluid w-25" alt="Sample image">
        </div>
        <h1 class="text-center mb-4">Register</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputUsername" placeholder="masukan username...">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="masukan password...">
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i class="fas fa-eye"></i></button>
                </div>

                <!-- lihat password -->
                <script>
                    const togglePassword = document.querySelector('#togglePassword');
                    const password = document.querySelector('#exampleInputPassword1');

                    togglePassword.addEventListener('click', function () {
                        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                        password.setAttribute('type', type);
                        this.textContent = type === 'password' ? 'Lihat' : 'Sembunyikan';
                    });
                </script>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword2" placeholder="konfirmasi password...">
                    <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword"><i class="fas fa-eye"></i></button>
                </div>
            </div>

            <!-- Lihat password -->
            <script>
                const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
                const confirmPasswordInput = document.querySelector('#exampleInputPassword2');

                toggleConfirmPassword.addEventListener('click', function () {
                    const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    confirmPasswordInput.setAttribute('type', type);
                    this.querySelector('i').classList.toggle('fa-eye-slash');
                });
            </script>
    
            <div class="text-center">
                <button type="submit" name="register" class="btn btn-primary">Register</button>
            </div>
            <p class="text-center mt-3">Already have an account? <a href="login.php">Sign in</a></p>
        </form>
    </div>
    <!-- end form register -->
    
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

</body>
</html>