<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
    <link rel="shortcut icon" href="{{ ('../../img/logo.jpg') }}">

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

    <title>Skuy-Replay | Tempat Replay Kuliah Terbaik</title>
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm" >
            <a class="navbar-brand logo ml-5" href="#">
                <img src="../img/logo.jpg" alt="" width="40" height="40" class="rounded-circle d-inline-block align-text-top" />
                Skuy-Replay
            </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mr-auto navigasi">
					<li class="nav-item active">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="/lihat/matkul" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Mata Kuliah
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
				<!-- <form action="/lihat/cari" method="GET" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Cari Data Rekaman .." aria-label="Search" value="{{ old('cari') }}">
					<button class="btn btn-outline-danger my-2 my-sm-0" value="CARI" type="submit">
						<i class="bi bi-search">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
								<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
							</svg>
						</i>
					</button>
				</form> -->
			</div>
		</nav>
		

		<div class="container" >
			<div class="judul card-title">
				<h3>
					<ul style="list-style-type:disc;">
                    <i class="fa fa-angle-double-right"></i>Semua Rekaman
                    <li class="fa fa-angle-double-right"></li><span>Semester 2</span>
					</ul>
				</h3>
			</div>
			<div class="row row-cols-2 row-cols-md-4 text-center" >
				<!-- for -->
                @foreach($rekaman as $data)
                <div class="col-sm-12 col-md-3 mb-5 video" data-aos="fade-down" data-aos-duration="1500">
					<div class="card  h-100">
                        <img src="https://img.youtube.com/vi/{{$data->rekaman_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a href="/lihat/wacth/{{$data->id}}">
                            <h6 class="card-title">
                                {{$data->judul}}
                            </h6>
                        </a>
                        </div>
					</div>
				</div>
                @endforeach
                <!-- end for -->
            </div>
            <div class="judul card-title" data-aos="zoom-in-right" data-aos-delay="1000" data-aos-duration="1500" >
				<h3>
					<ul style="list-style-type:disc;">
                    <i class="fa fa-angle-double-right"></i>Semua Rekaman
                    <li class="fa fa-angle-double-right"></li><span>Semester 3</span>
					</ul>
				</h3>
			</div>
			<div class="row row-cols-2 row-cols-md-4 text-center">
				<!-- for -->
                <div class="col mb-5">
					<div class="card h-100">
                        <div class="card-body">
                        Comming Soon
                        </div>
					</div>
				</div>
                <!-- end for -->
            </div>
		</div>

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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script>
        gsap.from('.judul',{duration :2.6, x:'-100%',opacity:0 , ease:'back'});
    </script>
    
    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        
        AOS.init();
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    
  </body>
</html>
