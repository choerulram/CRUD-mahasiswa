<?php
    session_start();
    include 'koneksi.php';
    
    // cek cookie
    if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan id
        $result = mysqli_query($koneksi, "SELECT username FROM users WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if($key === hash('sha256', $row['username'])) {
            $_SESSION['login'] = true;
        }
    }
    
    // cek session
    if(isset($_SESSION['login'])) {
        header("Location: ../portfolio/dashboard.php");
        exit;
    } 

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

        // cek username
        if(mysqli_num_rows($result) === 1) {
            
            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])) {
                // set session
                $_SESSION["login"] = true;

                // cek remember me
                if(isset($_POST['remember'])) {
                    // buat cookie
                    setcookie('id', $row['id'], time() + 60);
                    setcookie('key', hash('sha256', $row['username']), time() + 60);
                }
                
                // diarahkan ke mahasiswa.php
                header("Location: ../portfolio/dashboard.php");
                exit;
            }
        }
        // jika terjadi kesalahan pada proses login
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
            margin: none;
            padding: none;
            box-sizing: border-box;
        }
        body {
            /* background-color: hsl(0, 4%, 95%); */
            background-image: url("https://img.freepik.com/free-vector/dark-hexagonal-background-with-gradient-color_79603-1410.jpg?w=900&t=st=1689144335~exp=1689144935~hmac=6827e0dded2e70e354cc3f9017bef74c7c640cffb1a35d8f8b8510eb1447191b");
        }
        h1 {
            text-align: center;
            margin-top: 0;
        }
        .container {
            width: 40%;
            border-radius: 10px;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px ;
        }
        .btn-primary a {
            color: white;
            text-decoration: none;
            width: 100px;
        }
        img {
            /* background-color: blue; */
            padding-left: 5px;
        }
    </style>
</head>
<body>
    
    <!-- form login -->
    <div class="container border p-5 bg-light rounded">
        <div class="text-center mb-4">
            <img src="https://cdn-icons-png.flaticon.com/512/4407/4407405.png" class="img-fluid w-25" alt="Sample image">
        </div>
        <h1 class="text-center mb-4">Login</h1>
        <?php if(isset($error)) : ?> 
            <p style="color: red; font-style: italic;">Username atau password yang Anda masukkan salah!</p>
        <?php endif; ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputUsername">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
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
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="exampleRemember">
                <label class="form-check-label" for="exampleRemember">Remember me</label>
            </div>
            <div class="text-center">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </div>
            <p class="text-center mt-3">Don't have an account yet? <a href="register.php">Sign up</a></p>
        </form>
    </div>
    <!-- end form login -->

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>