<?php 
	
	include "config/connect.php";
	$cek = mysqli_query($conn, "SELECT * FROM pricing");
	$fetch = mysqli_fetch_array($cek);

	function rupiah($angka) {
		 $hasil_rupiah = number_format($angka,0,"",".");
         return $hasil_rupiah;
    }

	$bayi = rupiah($fetch['bayi']);
	$bayi_publish = rupiah($fetch['bayi_publish']);
	$b = (explode(".", $bayi_publish));
	$b1 = $b[0];
	$b2 = $b[1];

	$pelajar = rupiah($fetch['pelajar']);
	$pelajar_publish = rupiah($fetch['pelajar_publish']);
	$pj = (explode(".", $pelajar_publish));
	$pj1 = $pj[0];
	$pj2 = $pj[1];

	$personal = rupiah($fetch['personal']);
	$personal_publish = rupiah($fetch['personal_publish']);
	$ps = (explode(".", $personal_publish));
	$ps1 = $ps[0];
	$ps2 = $ps[1];

	$bisnis = rupiah($fetch['bisnis']);
	$bisnis_publish = rupiah($fetch['bisnis_publish']);
	$bs = (explode(".", $bisnis_publish));
	$bs1 = $bs[0];
	$bs2 = $bs[1];


 ?>
<!DOCTYPE html>
  <html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset=”UTF-8”>
		<title>Front-End Test</title>
		<!-- Link Bootstrap 4 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/social-buttons.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<!-- Link Bootstrap 4 -->
		<!-- Link JScript BS 4 -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
		<script src="assets/js/social-buttons.js"></script>	
		</script>
		<script src="https://kit.fontawesome.com/5533fe9b17.js" crossorigin="anonymous"></script>
		<!-- Link JScript BS 4 -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
		<body>
			
			<!-- Promo ebook Section -->
	  	<div class="col col-md-12">
	        <div class="member border-bottom">
	      		<div class="container">
	      		<i class="fas fa-bookmark bk" style="color: #3498db; float: left;"></i>
	      		<span class="bkm">&nbsp;&nbsp;Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ x ]</span>
		      	<ul>
		      		<li><i class="fas fa-phone-alt"></i> &nbsp;0274-5305505</li>
		      		<li><i class="fas fa-comments"></i> &nbsp;Live Chat</li>
		      		<li><i class="fas fa-user-circle"></i> &nbsp;Member Area</li>
		      	</ul>
	      		</div>
	      	</div>
	    </div>
	      <!-- / Promo ebook section -->
			<nav class="navbar navbar-expand-lg navbar-light border-bottom" style="padding-bottom: 19px;">
				<div class="container">
			  <a class="navbar-brand" href="#">
			    <img src="assets/images/logo2.png" class="d-inline-block align-top" width="270" height="60" alt="">
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Hosting <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Domain</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Server</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Website</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Afiliasi</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Promo</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Pembayaran</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Review</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Kontak</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Blog</a>
			      </li>
			    </ul>
			   </div>
			  </div> <!-- / Container --> 
			</nav> <!-- / Navbar -->
	
<!------------------------- PHP Hosting section ---------------------------------------------->
		<div class="container">
			<div class="col-md-12">
				<div class="row" id="sec1">
					<div class="col-sm-6" id="sec1">
						<span class="judul1">PHP Hosting</span><br>
						<span class="subjudul1">Cepat, handal, penuh dengan <br> modul PHP yang Anda butuhkan</span><br><br>
						<div class="sube1"><i class="fas fa-check-circle" id="subsub1"></i> Solusi PHP untuk performa query yang lebih cepat.</div>
						<div class="sube1"><i class="fas fa-check-circle" id="subsub1"></i> Konsumsi memori yang lebih rendah</div>
						<div class="sube1"><i class="fas fa-check-circle" id="subsub1"></i> Support PHP 5.3 PHP 5.4 PHP 5.5 PHP5.6 PHP 7</div>
						<div class="sube1"><i class="fas fa-check-circle" id="subsub1"></i> Fitur enkripsi IonCube dan Zend Guard Loaders</div><br>
					</div>
					<div class="col-sm-6">
						<div class="phpimgsection">
							<embed src="assets/svg/illustration banner PHP hosting-01.svg"/>
						</div>
					</div>
				  </div>  <br><br><br>
				</div> <!-- Batas col-md-12 -->
			</div> 
<!--------------- Batas row PHP Hosting section --------------------------------------------------->


<!--------------- Zend, Composer, IonCube section ----------------------------------------------->
			<div class="col-md-12">
				<div class="container">
					<div class="row justify-content-center">
						
						<div class="col-sm-3">
							<div class="sec2">
								<div class="card" style="border: none !important; margin-top: 148px;">
								  <embed src="assets/svg/illustration-banner-PHP-zenguard01.svg" class="card-img-top" alt="...">
									  <div class="card-body">
									    <p class="card-text"><center class="text1">PHP Zend Guard Loader</center></p>
									  </div>
								</div>
							</div> 
						</div> <!-- Zenguard item -->

						<div class="col-sm-3">
							<div class="sec2">
								<div class="card" style="border: none !important;">
								  <embed src="assets/svg/icon-composer.svg" class="card-img-top" alt="..." width="100" height="200">
									  <div class="card-body">
									    <p class="card-text"><center class="text1">PHP Composer</center></p>
									  </div>
								</div>
							</div> 
						</div> <!-- Composer item -->

						<div class="col-sm-3">
							<div class="sec2">
								<div class="card" style="border: none !important; margin-top: 148px;">
								  <embed src="assets/svg/icon-php-hosting-ioncube.svg" class="card-img-top" alt="..." style="height: auto;">
									  <div class="card-body">
									    <p class="card-text"><center class="text1">PHP IonCube</center></p>
									  </div>
								</div>
							</div> 
						</div> <!-- IonCube item -->
				</div> <!-- Batas row  -->
			</div>
		</div> <!-- Batas container --><br><br>

<!--------------- Batas row Zen, Composer section ---------------------------------------------->
		<div class="container">
		    <div class="parent-div d-flex justify-content-center">
		    	<div style="width: auto;">
					<span class="judul2">Paket Hosting Singapura yang Tepat</span><br>
					<span class="subjudul2">Diskon 40% + Domain dan SSL Gratis untuk Anda</span>
				</div>
			</div>
		</div>
<!--------------- Pricing section ---------------------------------------------->
	



<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Bayi Tier -->
      <div class="col-lg-3 mind">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <div class="judbayi border-bottom">
            	<h5 class="card-title text-muted text-center juditem">Bayi</h5>
            </div>
            	<div class="up3 border-bottom">
            		<h6 class="card-price text-center coret">Rp. <?= $bayi ?></h6>
		            <p class="text-center yow">
		            	<sup class="tez">Rp </sup>
		            	<span class="craz"><?= $b1 ?></span><sup class="ez">.<?= $b2 ?></sup><sup class="tez">/bln</sup>
		            </p>
            	</div>
            	<div class="up4 text-center border-bottom">
            		<b>938</b> Pengguna Terdaftar
            	</div><br>
            <div class="thelist">
              <li><span class="boldkeun">0.5X</span> Resource Power</li>
              <li><span class="boldkeun">500 MB</span> Disk Space</li>
              <li><span class="boldkeun">Unlimited</span> Bandwith</li>
              <li><span class="boldkeun">Unlimited</span> Databases</li>
              <li><span class="boldkeun">1</span> Domain</li>
              <li><span class="boldkeun">Unlimited</span> Backup</li>
              <li><span class="boldkeun">Unlimited SSL</span> Gratis Selamanya</li>
            </div>
            <a href="#" class="btn btn-block btn-primary rounded-pill pilih">Pilih Sekarang</a>
          </div>
        </div>
      </div>
      <!-- Pelajar Tier -->
      <div class="col-lg-3 mind">
        <div class="card mb-5 mb-lg-0">
         	<div class="card-body">
            <div class="judbayi border-bottom">
            	<h5 class="card-title text-muted text-center juditem">Pelajar</h5>
            </div>
            	<div class="up3 border-bottom">
            		<h6 class="card-price text-center coret">Rp. <?= $pelajar ?></h6>
		            <p class="text-center yow">
		            	<sup class="tez">Rp </sup>
		            	<span class="craz"><?= $pj1 ?></span><sup class="ez">.<?= $pj2 ?></sup><sup class="tez">/bln</sup>
		            </p>
            	</div>
            	<div class="up4 text-center border-bottom">
            		<b>4.168</b> Pengguna Terdaftar
            	</div><br>
            <div class="thelist">
              <li><span class="boldkeun">1X</span> Resource Power</li>
              <li><span class="boldkeun">Unlimited</span> Disk Space</li>
              <li><span class="boldkeun">Unlimited</span> Bandwith</li>
              <li><span class="boldkeun">Unlimited</span> POP3 Email</li>
              <li><span class="boldkeun">Unlimited</span> Databases</li>
              <li><span class="boldkeun">10</span> Addon Domains</li>
              <li><span class="boldkeun">Instant</span> Backup</li>
              <li><span class="boldkeun">Domain Gratis</span> Selamanya</li>
              <li><span class="boldkeun">Unlimited SSL</span> Gratis Selamanya</li>
            </div>
               <a href="#" class="btn btn-block btn-primary rounded-pill pilih">Pilih Sekarang</a>
          </div>
        </div>
      </div>
      <!-- Personal Tier -->
      <div class="col-lg-3 mind">
        <div class="card euy" style="">
        	<div class="ribbon-wrapper">
			    <div class="ribbon">BEST SELLER!</div>
			</div>
          <div class="card-body" style="padding: 0px;">
          	<div class="person">
	            <div class="judbayi">
	            	<h5 class="card-title text-muted text-center juditem" style="color: white !important;">Personal</h5>
	            </div>
	            	<div class="up3">
	            		<h6 class="card-price text-center" style="text-decoration: line-through; font-family: 'Roboto-Light';">Rp. <?= $personal ?></h6>
			            <p class="text-center yow">
			            	<sup class="tez">Rp </sup>
			            	<span class="craz" style="color: white !important"><?= $ps1 ?></span><sup class="ez" style="color: white !important">.<?= $ps2 ?></sup><sup class="tez" style="color: white !important">/bln</sup>
			            </p>
	            	</div>
             </div>
		          <div class="upp text-center">
						<b>10.017</b> Pengguna Terdaftar
		           </div><br>  	
            <div class="thelist">
              <li><span class="boldkeun">2X</span> Resource Power</li>
              <li><span class="boldkeun">Unlimited</span> Disk Space</li>
              <li><span class="boldkeun">Unlimited</span> Bandwith</li>
              <li><span class="boldkeun">Unlimited</span> POP3 Email</li>
              <li><span class="boldkeun">Unlimited</span> Databases</li>
              <li><span class="boldkeun">Instant</span> Backup</li>
              <li><span class="boldkeun">Domain Gratis</span> Selamanya</li>
              <li><span class="boldkeun">Unlimited SSL</span> Gratis Selamanya</li>
              <li><span class="boldkeun">Private</span> Name Server</li>
              <li><span class="boldkeun">SpamAssasin</span> Mail Protection</li>
            </div>
            <div class="buton">
            	<a href="#" class="btn btn-block btn-primary rounded-pill pilihs">Pilih Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Bisnis Tier -->
      <div class="col-lg-3" style="padding-left: 0px !important;">
        <div class="card">
          <div class="card-body">
            <div class="judbayi border-bottom">
            	<h5 class="card-title text-muted text-center juditem">Bisnis</h5>
            </div>
            	<div class="up3 border-bottom">
            		<h6 class="card-price text-center coret">Rp. <?= $bisnis ?></h6>
		            <p class="text-center yow">
		            	<sup class="tez">Rp </sup>
		            	<span class="craz"><?= $bs1 ?></span><sup class="ez">.<?= $bs2 ?></sup><sup class="tez">/bln</sup>
		            </p>
            	</div>
            	<div class="up4 text-center border-bottom">
            		<b>3.552</b> Pengguna Terdaftar
            	</div><br>
            <div class="thelist">
              <li><span class="boldkeun">3X</span> Resource Power</li>
              <li><span class="boldkeun">Unlimited</span> Disk Space</li>
              <li><span class="boldkeun">Unlimited</span> Bandwith</li>
              <li><span class="boldkeun">Unlimited</span> POP3 Email</li>
              <li><span class="boldkeun">Unlimited</span> Databases</li>
              <li><span class="boldkeun">Unlimited</span> Addon Domains</li>
              <li><span class="boldkeun">Magic Auto</span> Backup & Restore</li>
              <li><span class="boldkeun">Instant</span> Backup</li>
              <li><span class="boldkeun">Domain Gratis</span> Selamanya</li>
              <li><span class="boldkeun">Unlimited SSL</span> Gratis Selamanya</li>
              <li><span class="boldkeun">Private</span> Name Server</li>
              <li><span class="boldkeun">Prioritas</span> Layanan Support</li>
              <li>
              	<i class="fas fa-star"></i>
              	<i class="fas fa-star"></i>
              	<i class="fas fa-star"></i>
              	<i class="fas fa-star"></i>
              	<i class="fas fa-star"></i>
              </li>
              <li><span class="boldkeun">SpamExpert</span> Pro Mail Protection</li>

            </div>
            <a href="#" class="btn btn-block btn-primary rounded-pill pilih">Pilih Sekarang</a>
          </div>
        </div>
      </div>
      <!-- Batas Pro Tier -->
    </div>
  </div>
</section>
<!--------------------------  Batas Pricing section ---------------------------------------------->


<!----------------------------- Powerful Section-------------------------------------------------->

	<div class="container">
		    <div class="parent-div d-flex justify-content-center">
		    	<div style="width: auto;">
					<span class="judul4">Powerful dengan Limit PHP yang Lebih Besar</span><br>
				</div>
			</div><br><br>
			<div class="col-md-12">
				<div class="row">
					
					<div class="col-md-6">
						<div class="card" style="width: 100%;">
						  <ul class="list-group list-group-flush" style="text-align: center;">
						    <li class="list-group-item"><i class="fas fa-check-circle" id="subsub4"></i><span>max execution time 300s</span></li>
						    <li class="list-group-item"><i class="fas fa-check-circle" id="subsub4"></i><span>max execution time 300s</span></li>
						    <li class="list-group-item"><i class="fas fa-check-circle" id="subsub4"></i> <span>php memory limit 1024 MB</span></li>
						  </ul>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card" style="width: 100%; text-align: center;">
						  <ul class="list-group list-group-flush">
						    <li class="list-group-item"><i class="fas fa-check-circle" id="subsub4"></i><span>post max size 128 MB</span></li>
						    <li class="list-group-item"><i class="fas fa-check-circle" id="subsub4"></i><span>upload max filesize 128 MB</span></li>
						    <li class="list-group-item"><i class="fas fa-check-circle" id="subsub4"></i><span>max input vars 2500</span></li>
						  </ul>
						</div>
					</div>

				</div>
			</div>	
		</div><br><br>

<!----------------------------- Batas Powerful Section-------------------------------------------->


		<div class="container">
		    <div class="parent-div d-flex justify-content-center">
		    	<div style="width: auto;">
					<span class="judul2" style="font-family: 'Roboto-Light'">Semua Paket Hosting Sudah Termasuk</span><br>
				</div>
			</div>
		</div><br><br>


<!----------------------------- Include Section-------------------------------------------->
		
		<div class="container">
			<div class="col-md-12">
				<div class="row justify-content-center">
					<div class="col-md-4">
						<div class="card" style="width: 100%; border: none; text-align: center;">
							<center>
								<embed src="assets/svg/icon PHP Hosting_PHP Semua Versi.svg" width="90" height="90" />
							</center>
						  <div class="card-body">
						  	<span class="subjudul5" style="font-family: 'Montserrat-Bold'">PHP Semua Versi</span>
						    <p class="card-text subjudul6">Pilih Mulai dari versi PHP 5.3 s/d PHP 7.  Ubah sesuka Anda.</p>
						  </div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card" style="width: 100%; border: none; text-align: center;">
							<center>
								<embed src="assets/svg/icon PHP Hosting_My SQL.svg" width="90" height="90" />
							</center>
						  <div class="card-body">
						  	<span class="subjudul5" style="font-family: 'Montserrat-Bold'">MySQL Versi 5.6</span>
						    <p class="card-text subjudul6">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
						  </div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card" style="width: 100%; border: none; text-align: center;">
							<center>
								<embed src="assets/svg/icon_PHP_Hosting_CPanel.svg" width="90" height="90" />
							</center>
						  <div class="card-body">
						  	<span class="subjudul5" style="font-family: 'Montserrat-Bold'">Panel Hosting cPanel</span>
						    <p class="card-text subjudul6">Kelola website dengan cpanel canggih yang familiar di hati Anda.</p>
						  </div>
						</div>
					</div>

				</div> <!-- / row --><br><br>
				<div class="row justify-content-center">

					<div class="col-md-4">
						<div class="card" style="width: 100%; border: none; text-align: center;">
							<center>
								<embed src="assets/svg/icon_PHP_Hosting_garansi_uptime.svg" width="90" height="90" />
							</center>
						  <div class="card-body">
						  	<span class="subjudul5" style="font-family: 'Montserrat-Bold'">Garansi Uptime 99.9%</span>
						    <p class="card-text subjudul6">Data center yang mendukung kelangsungan website Anda 24 / 7.</p>
						  </div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card" style="width: 100%; border: none; text-align: center;">
							<center>
								<embed src="assets/svg/icon PHP_Hosting_InnoDB.svg" width="90" height="90" />
							</center>
						  <div class="card-body">
						  	<span class="subjudul5" style="font-family: 'Montserrat-Bold'">Database InnoDB Unlimited</span>
						    <p class="card-text subjudul6">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
						  </div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card" style="width: 100%; border: none; text-align: center;">
							<center>
								<embed src="assets/svg/icon PHP Hosting_My SQL remote.svg" width="90" height="90" />
							</center>
						  <div class="card-body">
						  	<span class="subjudul5" style="font-family: 'Montserrat-Bold'">Wildcard Remote MySQL</span>
						    <p class="card-text subjudul6">Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
						  </div>
						</div>
					</div>
				</div> <!-- /Row -->
			</div>
		</div><br><br>

<!----------------------------- Batas include Section-------------------------------------------->

		<div class="container">
		    <div class="parent-div d-flex justify-content-center">
		    	<div style="width: auto;">
					<span class="judul2" style="font-family: 'Roboto-Light'">Mendukung Penuh Framework Laravel</span><br>
				</div>
			</div>
		</div><br><br>

<!----------------------------- Framework Laravel Section-------------------------------------------->

		<div class="container">
			<div class="col-md-12">
				<div class="row" id="sec1">
					<div class="col-sm-7" id="sec6">
						<span class="subjudullara">Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP Hosting murah kami mendukung penuh framework favorit Anda</span><br><br>
						<div class="sube1"><i class="fas fa-check-circle" id="subsub1"></i> install laravel <b>1 klik</b> dengan Softaculous Installer.</div>
						<div class="sube1"><i class="fas fa-check-circle" id="subsub1"></i> Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json, dan fileinfo.</b></div>
						<div class="sube1"><i class="fas fa-check-circle" id="subsub1"></i> Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstal packages pilihan Anda.</div>
						<br>
						<small class="smol">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small><br>
						<div class="buton2">
			            	<a href="#" class="btn btn-block btn-primary rounded-pill pilihs">Pilih Hosting Anda</a>
			            </div>
					</div>
					<div class="col-sm-5">
						<div class="phpimgsection">
							<embed src="assets/svg/illustration banner support laravel hosting.svg"/>
						</div>
					</div>
				  </div>  <br><br><br>
				</div> <!-- Batas col-md-12 -->
			</div> 

<!----------------------- Batas Framework Laravel Section-------------------------------------------->


	<div class="container">
		    <div class="parent-div d-flex justify-content-center">
		    	<div style="width: auto;">
					<span class="judul2" style="font-family: 'Roboto-Light'">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</span><br>
				</div>
			</div>
		</div><br><br>
	

<!----------------------------------------- Modul Section-------------------------------------------->

	

	<div class="container">
		<div class="col-md-12">
			<div class="row justify-content-center">
				<div class="col-sm-3">
					<div class="thelistes">
		              <center><div class="tes" style="width: 80%; height: auto; text-align: left !important;">
		              	<li>Ice PHP</li>
		              <li>apc</li>
		              <li>apcu</li>
		              <li>apm</li>
		              <li>ares</li>
		              <li>bcmath</li>
		              <li>bcompiler</li>
		              <li>big_int</li>
		              <li>bitset</li>
		              <li>bloomy</li>
		              <li>bz2_filter</li>
		              <li>clamav</li>
		              <li>coin_acceptor</li>
		              <li>crack</li>
		              <li>dba</li>
		              </div></center>
		            </div>
				</div>

				<div class="col-sm-3">
					<div class="thelistes">
						<center>
							<div class="tes" style="width: 80%; height: auto; text-align: left !important;">
								<li>http</li>
					              <li>huffman</li>
					              <li>idn</li>
					              <li>igbinary</li>
					              <li>imagick</li>
					              <li>imap</li>
					              <li>inclued</li>
					              <li>inotify</li>
					              <li>interbase</li>
					              <li>intl</li>
					              <li>ioncube_loader</li>
					              <li>ioncube_loader_4</li>
					              <li>jsmin</li>
					              <li>json</li>
					              <li>ldap</li>
							</div>
						</center>
		            </div>
				</div>

				<div class="col-sm-3">
					<div class="thelistes">
						<center>
							<div class="tes" style="width: 80%; height: auto; text-align: left !important;">
								<li>ndp_pdo_mysql</li>
					              <li>oauth</li>
					              <li>oci8</li>
					              <li>odbc</li>
					              <li>opcache</li>
					              <li>pdf</li>
					              <li>pdo</li>
					              <li>pdo_dblib</li>
					              <li>pdo_firebird</li>
					              <li>pdo_mysql</li>
					              <li>pdo_odbc</li>
					              <li>pdo_pgsql</li>
					              <li>pdo_sqlite</li>
					              <li>pgsql</li>
					              <li>phalcon</li>
							</div>
						</center>
		            </div>
				</div>

				<div class="col-sm-3">
					<div class="thelistes">
						<center>
							<div class="tes" style="width: 80%; height: auto; text-align: left !important;">	
				              <li>stats</li>
				              <li>stem</li>
				              <li>stomp</li>
				              <li>suhouin</li>
				              <li>sybase_ct</li>
				              <li>sysvmsg</li>
				              <li>sysvsem</li>
				              <li>sysvshm</li>
				              <li>tidy</li>
				              <li>timezonedb</li>
				              <li>trader</li>
				              <li>translit</li>
				              <li>uploadprogress</li>
				              <li>uri_template</li>
				              <li>uuid</li>
							</div>
						</center>
		            </div>
				</div>
			</div>
		</div>
		<center>
			<div class="buton">
				<a href="#" class="btn pilih rounded-pill">Selengkapnya</a>
			</div>
		</center>
	</div>

<!----------------------------------- Batas Modul Section-------------------------------------------->

<!----------------------------------- Hosting Stabil Section-------------------------------------------->

	<div class="container">
			<div class="col-md-12">
				<div class="row" id="sec1">
					<div class="col-sm-7" id="sec6">
						<span class="judul1">Linux Hosting yang Stabil dengan Teknologi LVE</span><br><br>
						<span class="subjudul8">Supermicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching. Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP Anda.</span>
						<br>
						<div class="buton2">
			            	<a href="#" class="btn btn-block btn-primary rounded-pill pilihs">Pilih Hosting Anda</a>
			            </div>
					</div>
					<div class="col-sm-5">
						<div class="phpimgsection">
							<embed src="assets/images/Image_support.png"/>
						</div>
					</div>
				  </div>
				</div> <!-- Batas col-md-12 -->
			</div> 		


<!------------------------------Batas Hosting Stabil Section-------------------------------------------->

	<div class="col-md-12">
		<div class="sharesec">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6">
						<span style="font-family: 'Montserrat-Light'">Bagikan jika Anda menyukai halaman ini.</span>
					</div>

					<div class="col-sm-6">
						<div class="row">
							<div class="col-md-3">
								<div class="fb">
									<span><i class="fab fa-facebook-square" style="font-size: 20px; color: #008FEE"></i></span>
									<span class="share-count is-loaded" style="color: #4C4C4C">80k</span>
								</div>	
							</div>

							<div class="col-md-3">
								<div class="fb">
									<span><i class="fab fa-twitter-square" style="font-size: 20px; color: #00AEF1"></i></span>
									<span class="share-count is-loaded" style="color: #4C4C4C">450</span>
								</div>	
							</div>

							<div class="col-md-3">
								<div class="fb">
									<span><i class="fab fa-google-plus-square" style="font-size: 20px; color: #FC4A35"></i></span>
									<span class="share-count is-loaded" style="color: #4C4C4C">1900</span>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!------------------------------------- Bantuan Section ------------------------------------------------>
	

	<div class="bantu">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 border-right">
					<span class="judul9" style="font-family: 'Roboto-Light'">Perlu <span class="ode">Bantuan?</span> Hubungi Kami : <span class="ode">0274-5305505</span></span>
				</div>
				<div class="col-md-3" style="padding-left:  75px;">
					<a href="#" class="btn btn-block btn-primary rounded-pill pilihl"><i class="fas fa-comments"></i> &nbsp;Live Chat</a>
				</div>
			</div>
		</div>
	</div>



<!------------------------------- Batas Bantuan Section ------------------------------------------------>

<!------------------------------- Footer Section ------------------------------------------------>
		

		<div class="footer">
			<div class="container">
				<br><br><br>
				<div class="row justify-content-center">
					<div class="col-md-3" style="padding-left: 0px !important">
						<div class="thelistes">
						  <center>
							<div class="tes" style="text-align: left !important;">
								<span class="jodol">HUBUNGI KAMI</span><br><br>
								  <!-- <ul class="columnx"> -->
								  <li>0274-5305505</li>
					              <li>Senin - Minggu</li>
					              <li>24 Jam Nonstop</li><br>
					              <li>Jl. Selokan Mataram Monjali</li>
					              <li>Karangjati MT I/304</li>
					              <li>Sinduadi, Mati, Sleman</li>
					              <li>Yogyakarta 55284</li>
					              <!-- </ul> -->
							</div>
						  </center>
		              </div>
					</div>

					<div class="col-md-3" style="padding-left: 0px !important">
						<div class="thelistes">
						  <center>
							<div class="tes" style=" text-align: left !important;">
								<span class="jodol">LAYANAN</span><br><br>
								  <li>Domain</li>
					              <li>Shared Hosting</li>
					              <li>Cloud VPS Hosting</li><br>
					              <li>Managed VPS Hosting</li>
					              <li>Web Builder</li>
					              <li>Keamanan SSL / HTTPS</li>
					              <li>Jasa Pembuatan Website</li>
					              <li>Program Afiliasi</li>
							</div>
						  </center>
		              </div>
					</div>

					<div class="col-md-3" style="padding-left: 0px !important">
						<div class="thelistes">
						  <center>
							<div class="tes" style=" text-align: left !important;">
								<span class="jodol">SERVICE HOSTING</span><br><br>
								  <li>Hosting Murah</li>
					              <li>Hosting Indonesia</li>
					              <li>Hosting Singapura SG</li><br>
					              <li>Hosting PHP</li>
					              <li>Hosting Wordpress</li>
					              <li>Hosting Laravel</li>
							</div>
						  </center>
		              </div>
					</div>

					<div class="col-md-3" style="padding-left: 0px !important">
						<div class="thelistes">
						  <center>
							<div class="tes" style=" text-align: left !important;">
								<span class="jodol">TUTORIAL</span><br><br>
								  <li>Knowledge Base</li>
					              <li>Blog</li>
					              <li>Cara Pembayaran</li><br>
							</div>
						  </center>
		              </div>
					</div>

				</div> <!-- / row -->
				<br><br>

				<div class="row">
					<div class="col-md-3" style="padding-left: 0px !important">
						<div class="thelistes">
						  <center>
							<div class="tes" style=" text-align: left !important;">
								<span class="jodol">TENTANG KAMI</span><br><br>
								  <!-- <ul class="columnx"> -->
								  <li>Tim Niagahoster</li>
					              <li>Karir</li>
					              <li>Events</li><br>
					              <li>Penawaran & Promo Spesial</li>
					              <li>Kontak Kami</li>
					              <!-- </ul> -->
							</div>
						  </center>
		              </div>
					</div>

					<div class="col-md-3" style="padding-left: 0px !important">
						<div class="thelistes">
						  <center>
							<div class="tes" style=" text-align: left !important;">
								<span class="jodol">KENAPA PILIH NIAGAHOSTER?</span><br><br>
								  <li>Support Terbaik</li>
					              <li>Garansi Termurah</li>
					              <li>Domain Gratis Selamanya</li><br>
					              <li>Datacenter Hosting Terbaik</li>
					              <li>Review Pelanggan</li>
							</div>
						  </center>
		              </div>
					</div>

					<div class="col-md-3" style="padding-left: 0px !important">
						<div class="thelistes">
						  <center>
							<div class="tes" style=" text-align: left !important;">
								<span class="jodol">NEWSLETTER</span><br><br>
								  
								  	<div class="custom-search">
									  <input type="text" class="custom-search-input" placeholder="Email">
									  <button class="custom-langganan-button" type="submit">Berlangganan</button>  
									</div><br>
									<li style="color: #767676;">Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</li>
							</div>
						  </center>
		              </div>
					</div>

					<div class="col-md-3" style="padding-left: 0px !important">
						<br>
						<ul class="nav justify-content-center">
						  <li class="nav-item">
						    <a class="nav-link" href="#"><img src="assets/images/facebook-logo.png" width="40" height="40"></a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#"><img src="assets/images/twitter.png" width="40" height="40"></a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link disabled" href="#"><img src="assets/images/google-plus.png" width="40" height="40"></a>
						  </li>
						</ul>
					</div>

				 <!-- / row --><br><br><br>
						<div class="thelistes">
						  <center>
							<div class="tesx" style="margin-top: 30px; text-align: left;">
								<span class="jodol">PEMBAYARAN</span><br>
								 <br>
									<ul class="nav">
									  <li class="nav-item">
									    <a class="nav-link" href="#">
									    	<div class="epay rounded">
									    		<img src="assets/images/pay/bca.png" class="payicon">
									    	</div>
									    </a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link" href="#">
									    	<div class="epay rounded">
									    		<img src="assets/images/pay/mandiri.png" class="payicon">
									    	</div>
									    </a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link" href="#">
									    	<div class="epay rounded">
									    		<img src="assets/images/pay/bni.png" class="payicon">
									    	</div>
									    </a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link" href="#">
									    	<div class="epay rounded">
									    		<img src="assets/images/pay/visa.png" class="payicon">
									    	</div>
									    </a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link" href="#">
									    	<div class="epay rounded">
									    		<img src="assets/images/pay/atm_bersama.png" class="payicon">
									    	</div>
									    </a>
									  </li>
									</ul><br>
								</div>
						  </center>
		              </div><br><br>
					
						<div class="col-md-12 border-bottom" style="border-color: #2C2C2C !important;">
							<div class="euyl">
								<span class="aktiv text-left">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</span>
							</div>
					</div>
				</div>
			</div>

			<br>
			<div class="container">
				<div class="col-sm-12 border-bottom" style="height: auto;">
					<div class="row">
						<div class="col-sm-7">
							<span class="subjudulv">Copyright &copy;2021 Niagahoster | Hosting powered by PHP 7, CloudLinux, CloudFlare, BitNinja, and DC Biznet Technovillage Jakarta</span>
							<span class="subjudulv"> Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology.</span>
						</div>
						<div class="col-sm-5">
							<span class="subjudulv">Copyright &copy;Syarat dan Ketentuan | Kebijakan Privasi</span><br><span class="subjudulv">Copyright &copy;Test Mockup by Fherdy Lianza</span>
						</div>
					  </div>  <br><br><br>
					</div> <!-- Batas col-md-12 -->
			</div> 



		</div> <!-- / footer -->

<!------------------------------- Batas Foter Section ------------------------------------------------>





			
		</body>	
	</head>
  </html>