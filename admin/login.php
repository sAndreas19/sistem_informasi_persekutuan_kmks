<?php 
include'../koneksi.php';

if(isset($_POST["btnlogin"])){
    $txtusername = $_POST['txtusername'];
    $txtpassword = md5($_POST['txtpassword']);
    
    $cek = mysqli_query($konek, "SELECT * FROM tbl_user WHERE user_name='".$txtusername."' AND password='".$txtpassword."'");
    $hasil = mysqli_fetch_array($cek);
    $count = mysqli_num_rows($cek);

    if($count > 0){
        $nama1 = $hasil['nama'];
        session_start();
        $_SESSION['nama'] = $nama1;
        header("location: master.php");
        exit();
    } else {
        // Redirect ke halaman yang sama dengan parameter error
        header("location: index.php?error=1");
        exit();
    }
}

// Tampilkan error hanya jika ada parameter error di URL
if(isset($_GET['error']) && $_GET['error'] == '1'): ?>
    <div class="pages_agile_info_w3l page_error">
        <div class="over_lay_agile_pages_w3ls error">
            <div class="registration error">
                <br><br><br>
                <h1 align="center">Oops! Login Salah</h1>
                <br><br><br><br><br><br><br><br><br>
                <h1 align="center"><a href="index.php">Coba Lagi</a></h1>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Form login Anda tetap di sini -->