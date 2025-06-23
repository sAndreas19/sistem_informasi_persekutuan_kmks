<?php
include '../koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Cek apakah user sudah ada
    $cek = mysqli_query($konek, "SELECT * FROM user WHERE user_name='$username'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Username sudah terdaftar!');</script>";
    } else {
        $simpan = mysqli_query($konek, "INSERT INTO user(user_name, password) VALUES('$username', '$password')");
        if ($simpan) {
            echo "<script>alert('Registrasi berhasil!'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal. Coba lagi!');</script>";
        }
    }
}
?>

<html>
<head>
    <title>Register Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Registrasi Akun</h3>
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" name="register" class="btn btn-success btn-block">Daftar</button>
                <p class="mt-3 text-center">Sudah punya akun? <a href="index.php">Login</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>