<?php 
include'header.php'; ?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php"></a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Renungan</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Nama Renungan</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtnama" class="form-control is-valid" placeholder="Uraian Renungan">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Link Renungan</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="txtrenungan" class="form-control is-valid" value="-" placeholder="Isi Renungan" rows="5"></textarea>
                      </div>
                </div>

                <input type="submit" name="btnsimpan" class="btn btn-primary" value="SIMPAN">
                </div>
              </div>
          </div>
      </section> 
      </form>            

        <?php

                  if (isset($_POST["btnsimpan"])){
                                  $txtnama=$_POST['txtnama'];
                                  $txtrenungan=$_POST['txtrenungan'];
                                $simpan = mysqli_query($konek,"INSERT INTO renungan (nama,renungan) VALUES ('$txtnama','$txtrenungan')");
                                   if(!empty($simpan)){
                            ?>
                            <script type="text/javascript">
                            alert('Data Anda Berhasil di Simpan');
                            document.location.href="renungan_tampil.php";
                            </script>
                          <?php
                          }
                        }
                      ?>
<?php include'footer.php'; ?>