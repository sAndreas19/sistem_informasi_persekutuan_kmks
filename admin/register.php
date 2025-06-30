/* Password strength indicator */
        .password-strength {
            margin-top: 5px;
            font-size: 12px;
        }

        .strength-weak { color: #ff4757; }
        .strength-medium { color: #ffa502; }
        .strength-strong { color: #4CAF50; }<?php
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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REGISTER ADMIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="shortcut icon" href="img/logo.jpg">
    <style>
        /* Custom CSS untuk Register Page */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .register-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px 0;
        }

        .register-page .container {
            width: 100%;
            max-width: none;
            padding: 0 20px;
        }

        .register-page .form-outer {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .register-page .form-inner {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeInUp 0.6s ease-out;
            width: 100%;
            min-width: 60%; /* Default untuk laptop */
            max-width: 500px;
        }

        .register-page .logo {
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 700;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
        }

        .register-page .logo .text-primary {
            color: #4CAF50 !important;
            background: linear-gradient(45deg, #4CAF50, #45a049);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .register-page .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 16px;
        }

        .register-page .form-group-material {
            margin-bottom: 25px;
            position: relative;
        }

        .register-page .input-material {
            width: 100%;
            padding: 15px 0;
            border: none;
            border-bottom: 2px solid #e1e1e1;
            background: transparent;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .register-page .input-material:focus {
            outline: none;
            border-bottom-color: #4CAF50;
        }

        .register-page .label-material {
            position: absolute;
            top: 15px;
            left: 0;
            color: #999;
            font-size: 16px;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .register-page .input-material:focus + .label-material,
        .register-page .input-material:valid + .label-material {
            top: -5px;
            font-size: 12px;
            color: #4CAF50;
            font-weight: 600;
        }

        .register-page .btn-primary {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, #4CAF50, #45a049);
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            margin-top: 20px;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }

        .register-page .btn-primary:hover {
            background: linear-gradient(45deg, #45a049, #3d8b40);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(76, 175, 80, 0.4);
        }

        .register-page .btn-primary:active {
            transform: translateY(0);
        }

        .register-page p a,
        .register-page h5 a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .register-page p a:hover,
        .register-page h5 a:hover {
            color: #45a049;
            text-decoration: underline;
        }

        .register-page h5 {
            margin-top: 15px;
            text-align: center;
        }

        /* Alert styling */
        .register-page .alert {
            border-radius: 10px;
            border: none;
            padding: 15px 20px;
            margin-bottom: 25px;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            animation: slideInDown 0.5s ease-out;
        }

        .register-page .alert-danger {
            background: linear-gradient(45deg, #ff6b6b, #ee5a52);
            color: white;
            border-left: 4px solid #ff4757;
        }

        .register-page .alert-success {
            background: linear-gradient(45deg, #4CAF50, #45a049);
            color: white;
            border-left: 4px solid #2e7d32;
        }

        .register-page .alert i {
            margin-right: 8px;
            font-size: 16px;
        }

        /* Password strength indicator */
        .password-strength {
            margin-top: 5px;
            font-size: 12px;
        }

        .strength-weak { color: #ff4757; }
        .strength-medium { color: #ffa502; }
        .strength-strong { color: #4CAF50; }

        /* Icon styling */
        .input-group-icon {
            position: relative;
        }

        .input-group-icon i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            transition: color 0.3s ease;
        }

        .input-group-icon .input-material:focus ~ i {
            color: #4CAF50;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .register-page .form-inner:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        /* Responsive Design */
        /* Untuk layar laptop/desktop (min-width: 1024px) */
        @media (min-width: 1024px) {
            .register-page .form-inner {
                min-width: 60%;
                max-width: 60%;
            }
        }

        /* Untuk layar tablet (768px - 1023px) */
        @media (min-width: 768px) and (max-width: 1023px) {
            .register-page .form-inner {
                min-width: 70%;
                max-width: 70%;
                padding: 35px;
            }
            
            .register-page .logo {
                font-size: 26px;
                margin-bottom: 25px;
            }
        }

        /* Untuk layar mobile (max-width: 767px) */
        @media (max-width: 767px) {
            .register-page .form-inner {
                min-width: 90%;
                max-width: 90%;
                padding: 30px 25px;
                margin: 0 auto;
            }
            
            .register-page .logo {
                font-size: 24px;
                margin-bottom: 25px;
            }

            .register-page .container {
                padding: 0 15px;
            }
        }

        /* Untuk layar mobile kecil (max-width: 480px) */
        @media (max-width: 480px) {
            .register-page .form-inner {
                min-width: 95%;
                max-width: 95%;
                padding: 25px 20px;
            }
            
            .register-page .logo {
                font-size: 20px;
            }

            .register-page .container {
                padding: 0 10px;
            }

            .register-page .input-material {
                font-size: 14px;
            }

            .register-page .btn-primary {
                font-size: 14px;
            }
        }

        /* Untuk layar yang sangat lebar (min-width: 1440px) */
        @media (min-width: 1440px) {
            .register-page .form-inner {
                min-width: 50%;
                max-width: 50%;
            }
        }

        /* Untuk layar ultra-wide (min-width: 1920px) */
        @media (min-width: 1920px) {
            .register-page .form-inner {
                min-width: 40%;
                max-width: 40%;
            }
        }
    </style>
</head>
<body>
    <div class="page register-page">
        <div class="container">
            <div class="form-outer text-center d-flex align-items-center">
                <div class="form-inner">
                    <div class="logo text-uppercase">
                        <span></span><strong class="text-primary">KMKS Medan</strong>
                    </div>
                    <p class="subtitle">
                        <i class="fa fa-user-plus"></i> Buat Akun Administrator Baru
                    </p>



                    <form action="register.php" method="POST" id="registerForm">
                        <div class="form-group-material">
                            <div class="input-group-icon">
                                <input id="register-username" type="text" name="username" required class="input-material" minlength="4">
                                <label for="register-username" class="label-material">Username</label>
                                <i class="fa fa-at"></i>
                            </div>
                        </div>

                        <div class="form-group-material">
                            <div class="input-group-icon">
                                <input id="register-password" type="password" name="password" required class="input-material" minlength="6">
                                <label for="register-password" class="label-material">Password</label>
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>

                        <button type="submit" name="register" class="btn btn-primary">
                            <i class="fa fa-user-plus"></i> DAFTAR SEKARANG
                        </button>

                        <p class="mt-3 text-center">
                            Sudah punya akun? <a href="index.php"><i class="fa fa-sign-in"></i> Login di sini</a>
                        </p>
                        <h5>
                            <a href="../index.php"><i class="fa fa-arrow-left"></i> Kembali ke Beranda</a>
                        </h5>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <script>
        // Form validation
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const password = document.getElementById('register-password').value;
            
            if (password.length < 6) {
                e.preventDefault();
                alert('Password minimal 6 karakter!');
                return false;
            }
        });
    </script>
</body>
</html>