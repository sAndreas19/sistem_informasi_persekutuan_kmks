<?php include'header.php'; ?>
<head>
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
	<title>KMKS - Renungan</title>
</head>

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/slide/kebersamaan2.png" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>Renungan</span> KMKS</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Beranda</a></li>
									<li>Renungan</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>Daftar Renungan</h2></div>
				</div>
			</div>


			<div class="row services_row">

								 <?php
				            $qry = mysqli_query($konek,"SELECT * FROM renungan where id order by id desc limit 100");
				            while ($data=mysqli_fetch_assoc($qry)) {
				          ?>
				<div class="col-lg-12 col-md-12 service_col">
					<div class="service_title trans_200"><u><?php echo $data['nama']; ?></u></div>
							<p> <?php echo $data['alamat']; ?> </p>
							<!-- <iframe width="100%" height="290" src="https://www.youtube.com/embed/<?php echo $data['alamat']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->



				</div>


				
			<?php } ?>
			</div>



		</div>
	</div>

	

<?php include'footer.php'; ?>