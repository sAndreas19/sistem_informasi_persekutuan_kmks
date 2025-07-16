<?php include'header.php'; ?>
<head>
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
	<title>KMKS - kegiatan</title>
<style type="text/css">
	img { transition: all .2s ease-in-out; }
img:hover { transform: scale(1.5); }
</style>
</head>

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/slide/kebersamaan4.png" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>KMKS</span> Kegiatan</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Beranda</a></li>
									<li>Kegiatan</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="features_container d-flex flex-row flex-wrap align-items-start justify-content-between">
											 <?php
				            $qry = mysqli_query($konek,"SELECT * FROM kegiatan where id order by id limit 200");
				            while ($data=mysqli_fetch_assoc($qry)) {
				          ?>

						<div class="feature">
							<div class="feature_image"><img src="img/folio/<?php echo $data['gambar']; ?>" alt="" ></div>
							<div class="feature_content">
								<div class="section_title"><h5><?php echo $data['nama']; ?></h5></div>
								<div class="feature_text">
									<p><?php echo $data['deskripsi']; ?></p>
								</div>
							</div>
						</div>
							<?php } ?>
					</div>
				</div>
			</div>
		</div>		
	</div>

<?php include'footer.php'; ?>