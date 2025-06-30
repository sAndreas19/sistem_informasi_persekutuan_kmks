	<footer class="footer">
		<div class="footer_container">
			<div class="container">
				<div class="row">
					
					<!-- Footer - About -->
					<div class="col-lg-4 footer_col">
						<div class="footer_about">
							<div class="footer_logo_container">
								<a href="index.php" class="d-flex flex-column align-items-center justify-content-center">
									<div class="logo_content">
										<div class="logo d-flex flex-row align-items-center justify-content-center">
											<div class="logo_text">KMKS<span>MEDAN</span></div>
											<div class="logo_box">+</div>
										</div>
										<div class="logo_sub">Kebaktian Muda-Mudi Kp. Susuk</div>
									</div>
								</a>
							</div>
							<div class="footer_about_text">
								<p>Mari datang beribadah di Persekutuan KMKS</p>
							</div>
							<ul class="footer_about_list">
								<li><div class="footer_about_icon"><img src="images/phone-call.svg" alt=""></div><span>+64 852-7794-8885</span></li>
								<li><div class="footer_about_icon"><img src="images/envelope.svg" alt=""></div><span>kmksmedan1998@gmail.com</span></li>
								<li><div class="footer_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Gang Susuk 5, No.12, Medan</span></li>
							</ul>
						</div>
					</div>

					<!-- Footer - Links -->
					<div class="col-lg-4 footer_col">
						<div class="footer_links footer_column">
							<div class="footer_title">Daftar Kegiatan</div>
							<ul>
								<li><a href="#">Jam Doa</a></li>
								<li><a href="#">Ibadah Kebaktian</a></li>
								<li><a href="#">Penginjilan</a></li>
								<li><a href="#">Kelompok Kecil</a></li>
								<li><a href="#">Ibadah Perayaan Paskah</a></li>
								<li><a href="#">Keakraban</a></li>
								<li><a href="#">Retreat</a></li>
								<li><a href="#">Perayaan HUT KMKS</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer - News -->
					<div class="col-lg-4 footer_col">
						<div class="footer_news footer_column">
							<div class="footer_title">Jadwal Terbaru</div>
							<ul>
									  <?php
								            $qry = mysqli_query($konek,"SELECT * FROM tbl_blog where id order by tgl_posting desc limit 5");
								            while ($data=mysqli_fetch_assoc($qry)) {
								          ?>

								<li>
									<div class="footer_news_title"><a href="news_detail.php?id=<?php echo base64_encode($data['id']); ?>"><?php echo $data['judul']; ?></a></div>
									<a href="news_detail.php?id=<?php echo base64_encode($data['id']); ?>">Baca Selengkapnya </a>
								</li>

							<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
							<div class="cr"> KMKS MEDAN <i aria-hidden="true"></i> Dev <a href="https://layanancoding.com" target="_blank">by Hans </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<div class="footer_social ml-lg-auto">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>





<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
<!-- <script src="styles/bootstrap4/popper.js"></script> -->
<!-- <script src="styles/bootstrap4/bootstrap.min.js"></script> -->
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<!-- <script src="plugins/easing/easing.js"></script> -->
<!-- <script src="plugins/parallax-js-master/parallax.min.js"></script> -->
<script src="js/elements.js"></script>
<script src="js/services.js"></script>
</body>
</html>