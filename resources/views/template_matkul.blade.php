<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
    <link rel="shortcut icon" href="{{ ('img/logo.jpg') }}">
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{('../../css/lihat.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="{{('../../assetsLihat/css/style.css')}}" type="text/css" media="screen"> -->

    <title>Skuy-Replay | Tempat Replay Kuliah Terbaik</title>
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
            <a class="navbar-brand logo ml-5" href="#">
                <img src="../../img/logo.jpg" alt="" width="40" height="40" class="rounded-circle d-inline-block align-text-top" />
                Skuy-Replay
            </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mr-auto navigasi">
					<li class="nav-item">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link active dropdown-toggle" href="/lihat/matkul" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Mata Kuliah
						</a>
						<div class="dropdown-menu " aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="/lihat/matkul/daskomjar">Dasar Komunikasi Dan Jaringan</a>
							<a class="dropdown-item" href="/lihat/matkul/daskom">Dasar - Dasar Komputer</a>
                            <a class="dropdown-item" href="/lihat/matkul/kalkulus">Kalkulus</a>
                            <a class="dropdown-item" href="/lihat/matkul/pad">Pemrograman Analisa Data</a>
                            <a class="dropdown-item" href="/lihat/matkul/pbo">Pemrograman Berorientasi Obyek I</a>
                            <a class="dropdown-item" href="/lihat/matkul/agama">Pendidikan agama</a>
                            <a class="dropdown-item" href="/lihat/matkul/pancasila">Pendidikan Pancasila</a>
                            <a class="dropdown-item" href="/lihat/matkul/statistika">Statistika</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="/lihat/matkul">Lihat Semua</a>
						</div>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="/contac_us">Contact Us</a>
					</li>
				</ul>
			</div>
		</nav>
		
        <div class="container">
            @yield('content')
        </div>
        <!--####################### Quote Starts Here ###################-->
        <div class="footer-ablove">
            <div class="container">
                <div class="row" data-aos-duration="500" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <p>
                        Skuy-Replay | Tempat Replay Kuliah Terbaik
                        <!-- <button class="btn btn-default">Get Quote</button> -->
                    </p>
                </div>
            </div>
        </div>
        <!--####################### Footer Starts Here ###################-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 about col-sm-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="100">
                        <h2>
                            <i class="fas fa-info-circle"></i>
                            About Us</h2>
                        <p>
                        <p class="lead des">
                            Tempat Untuk Melihat Semua Rekaman Kuliah Dengan Mudah
                        </p>
                        <p class="des">
                            <b>"Catatan"<br>
                            Jika Tidak Ada video nya Maka Admin Masih Belum Memiliki Link Dari video Tersebut,
                            Dan Jika Teman Teman Mau Video Nya Ada di sini Silahkan Hubungi 
                            <a href="/contac_us">
                                Admin
                            </a></b>
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="1000">
                        <h2>
                            <i class="fas fa-link"></i>
                            Useful Links</h2>
                        <ul class="list-unstyled link-list">
                            <li>
                                <a ui-sref="about" href="#">About us</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="portfolio" href="#">Portfolio</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="products" href="#">Latest jobs</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="gallery" href="#">Gallery</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="contact" href="/contac_us">Contact us</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="2000">
                        <h2>
                            <i class="fas fa-life-ring"></i>
                            Get Support</h2>
                        <ul class="list-unstyled link-list">
                            <li>
                                <a ui-sref="about" href="#/about">About us</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="portfolio" href="#/portfolio">Portfolio</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="products" href="#/products">Latest jobs</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="gallery" href="#/gallery">Gallery</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="contact" href="/contac_us">Contact us</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 map-img" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="3000">
                        <h2>
                            <i class="fas fa-map-marker-alt"></i>
                            Contact Us</h2>
                        <address class="md-margin-bottom-40">
                            <p>Lampung Utara</p>
                            <p>Balabus (141 District)</p>
                            <p>Bandar Jaya</p>
                            Phone : 0831-60**-****
                            <br>
                            Email: Yudha Smith<br>
                            Email: Kevin Smith<br>
                            Web:<a href="/" class="">Skuy-Replay.com</a>
                        </address>

                    </div>
                </div>
            </div>

        </footer>
        <div class="copy">
            <div class="container">
                <a href="/">2021 &copy; All Rights Reserved | Designed and Developed by Andreas Kevin Developer & Yudha Developer</a>

                <span>
                    <a href="">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </span>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two!

    Option 1: jQuery and Bootstrap Bundle (includes Popper)
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->

    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script>
        gsap.from('.judul',{duration :1.6, x:'-100%',opacity:0 , ease:'back'});
    </script>
    
    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        
        AOS.init();
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  </body>
</html>
