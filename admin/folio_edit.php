<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM kegiatan WHERE id='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit  Galeri</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Nama *</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtnama" value="<?php echo $data['nama'] ?>" class="form-control is-valid" placeholder="Nama Kegiatan">
                      </div>
                </div>
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Deskripsi *</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="txtdeskripsi" class="form-control is-valid" placeholder="Deskripsi Kegiatan" rows="5"><?php echo $data['deskripsi'] ?></textarea>
                      </div>
                </div>
                 <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Alamat *</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtalamat" value="<?php echo $data['alamat'] ?>" class="form-control is-valid" placeholder="Alamat Kegiatan">
                      </div>
                </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Gambar *</label>
                      <div class="col-sm-10">
                        <input type="file" name="txtgambar" class="form-control is-valid" value="<?php echo $data['gambar'] ?>" placeholder="Upload Gambar">
                      </div>
                  </div>

                <input type="submit" name="btnedit" class="btn btn-primary" value="UPDATE">
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                                  $txtnama=$_POST['txtnama'];
                                  $txtdeskripsi=$_POST['txtdeskripsi'];
                                  $txtalamat=$_POST['txtalamat'];
                                  $nama_file   = $_FILES['txtgambar']['name'];
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                  $edit = mysqli_query($konek,"UPDATE  kegiatan SET nama='$txtnama',deskripsi='$txtdeskripsi',alamat='$txtalamat',gambar='$nama_file' WHERE id='$id'");
                  if ($edit){
                    if(!empty($lokasi_file)){
                    move_uploaded_file($lokasi_file, "../img/folio/$nama_file");
                    ?>
                    <script type="text/javascript">
                      document.location.href="folio_tampil.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>