<?php include'header.php'; ?>
<head>
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<title>KMKS - kontak</title>
</head>
	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/slide/_jemaat.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>Contact</span> / Lokasi</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Beranda</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-6">
					<div class="section_title"><h2>KMKS Medan</h2></div>
					<div class="contact_text">
						<p></p>
					</div>
					<ul class="contact_about_list">
						<li><div class="contact_about_icon"><img src="images/phone-call.svg" alt=""></div><span>+62852-7794-8885</span></li>
						<li><div class="contact_about_icon"><img src="images/envelope.svg" alt=""></div><span>kmksmedan1998@gmail.com</span></li>
						<li><div class="contact_about_icon"><img src="images/placeholder.svg" alt=""></div><span>No.12, Gang Susuk 5, Medan</span></li>
					</ul>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-6 form_col">
					  <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="form">
          <div id="sendmessage">KONSULTASI / PESAN</div>
          <div id="errormessage"></div>
              <form method="POST" action="">
    

            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="txtnama" class="form-control" id="name" placeholder="Nama Lengkap" data-rule="minlen:4" required oninvalid="this.setCustomValidity('Nama Lengkap Masih Kosong')" oninput="setCustomValidity('')"> </input>
                <!-- <div class="validation"></div> -->
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="txtemail" id="email" placeholder="Email" data-rule="email" required oninvalid="this.setCustomValidity('Email Masih Kosong')" oninput="setCustomValidity('')"> </input>
                <!-- <div class="validation"></div> -->
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="txthandphone" id="subject" placeholder="HandPhone" required oninvalid="this.setCustomValidity('Hanphone Masih Kosong')" oninput="setCustomValidity('')"> </input>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="txtpesan" rows="5" data-rule="required" data-msg="Pesan Tidak Boleh Kosong" placeholder="Message"></textarea>
              <!-- <div class="validation"></div> -->
            </div>
            
         <input type="submit" name="btnsimpan" class="btn btn-primary" value="Kirim Pesan">
          </form>
          <?php
          if (isset($_POST["btnsimpan"])){
            $txtnama = mysqli_real_escape_string($konek, $_POST['txtnama']);
            $txtemail = mysqli_real_escape_string($konek, $_POST['txtemail']);
            $txthandphone = mysqli_real_escape_string($konek, $_POST['txthandphone']);
            $txtpesan = mysqli_real_escape_string($konek, $_POST['txtpesan']);
            $tglreg = date("Y-m-d H:i:s");
            $simpan1 = mysqli_query($konek,"INSERT INTO pesan (nama,hp,email,pesan,tanggal) VALUES ('$txtnama','$txthandphone','$txtemail','$txtpesan','$tglreg')");
            if ($simpan1){
              ?>
              <script type="text/javascript">
                alert('Terimakasih Pesan Anda Berhasil di Kirim, Kami Akan Segera Membalas Lewat Email dan HandPhone');
                document.location.href="contact.php";
              </script>
              <?php
            }else{
              echo "Gagal Untuk Menyimpan";
            }
          }
        ?>
        </div>
      </div>
    </section>
				</div>


			</div>
			<div class="row map_row">
				<div class="col">

					<!-- Contact Map -->

					<div class="contact_map">

						<!-- Google Map -->
						
						<div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="map">
										<!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.8356631020224!2d98.67492329415798!3d3.6249936281043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwMzcnMzAuMSJOIDk4wrA0MCcyOS44IkU!5e0!3m2!1sid!2sid!4v1537043333354" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->


										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1254959017256!2d98.64823207349005!3d3.558555850502643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fe7b13fb193%3A0xddbbf02cf8bdb274!2sKMKS%20MEDAN!5e0!3m2!1sid!2sid!4v1750653914339!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>

						<!-- Working Hours -->
						<div class="box working_hours">
							<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width:29px; height:29px;"><img src="images/alarm-clock.svg" alt=""></div></div>
							<div class="box_title">Jadwal Ibdah Hari Minggu</div>
							<div class="working_hours_list">
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start" style="margin: 1px;">
										<div>Minggu</div>
										<div class="ml-auto">09:00 s/d Selesai</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start" style="margin: 1px;">
										<div class="ml-auto">11:00 s/d Selesai</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start" style="margin: 1px;">
										<div class="ml-auto">14:00 s/d Selesai</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start" style="margin: 1px;">
										<div class="ml-auto">16:00 s/d Selesai</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start" style="margin: 1px;">
										<div class="ml-auto">18:00 s/d Selesai</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start" style="margin: 1px;">
										<div class="ml-auto">20:00 s/d Selesai</div>
									</li>
								</ul>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
	<?php include'footer.php'; ?>