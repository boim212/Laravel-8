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
    <link rel="stylesheet" href="{{ ('../../dataTables/datatables.min.css') }}">
    <!-- <link rel="stylesheet" href="{{('../../assetsLihat/css/style.css')}}" type="text/css" media="screen"> -->
    <style>
        @media (max-width: 576px){
            .video{
                padding-bottom: 15rem;
                padding-left: 15rem;
                height :25rem;
            }
            .play{
                height: 300px;
                width: 100%;
            }
        }
        @media(min-width:1200px){
            .video{
                padding-bottom: 9rem;
            }
        }
    </style>
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
			</div>
		</nav>
		

		<div class="container">
            <div class="judul card-title pb-3">
                <h3>
                    <ul style="list-style-type:disc;">
                        <i class="fas fa-book"></i>Semua Rekaman
                        <i class="fa fa-angle-double-right"></i>{{$judul}}
                        <i class="fa fa-angle-double-right"></i>{{$rekaman->matkul}}
                    </ul>
                </h3>
            </div>
            <div class="container">
                <div class="card row">
                    <h5 class="card-header">{{$rekaman->judul}}</h5>
                    <div class="card-body col-sm-12">
                        <div class="embed-responsive video embed-responsive-16by9">
                            <iframe class="embed-responsive-item play" src="https://www.youtube.com/embed/{{$rekaman->rekaman_id}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5 pb-5">
            <div class="judul2 card-title pb-3" data-aos="zoom-in-right" data-aos-delay="1000" data-aos-duration="1500">
                <h3>
                    <ul style="list-style-type:disc;">
                        <i class="fas fa-book"></i>Video rekaman lainnya
                    </ul>
                </h3>
            </div>
            <!-- daskomjar -->
            <div class="row">
                <div class="col-12" data-aos="fade-up-right" data-aos-duration="1500" data-aos-delay="100">
                    <li class="fa fa-angle-double-right"></li><span>Dasar Komunikasi Dan Jaringan</span>
                    <hr>
                </div>
            </div>
			<div class="row row-cols-2 row-cols-md-4 text-center">
				<!-- for -->
                @foreach($daskomjar as $rep)
                <div class="col-sm-12 col-md-3 mb-5" data-aos="fade-down" data-aos-duration="1500">
					<div class="card  h-100">
                        <img src="https://img.youtube.com/vi/{{$rep->rekaman_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a href="/lihat/wacth/{{$rep->id}}">
                            <h6 class="card-title">
                                {{$rep->judul}}
                            </h6>
                        </a>
                        </div>
					</div>
				</div>
                @endforeach
                <!-- end for -->
            </div>

            <!-- daskom -->
            <div class="row">
                <div class="col-12" data-aos="fade-up-right" data-aos-duration="1500" data-aos-delay="100">
                    <li class="fa fa-angle-double-right"></li><span>Dasar - Dasar Komputer</span>
                    <hr>
                </div>
            </div>
			<div class="row row-cols-2 row-cols-md-4 text-center">
				<!-- for -->
                @foreach($daskom as $rep)
                <div class="col-sm-12 col-md-3 mb-5" data-aos="fade-down" data-aos-duration="1500">
					<div class="card  h-100">
                        <img src="https://img.youtube.com/vi/{{$rep->rekaman_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a href="/lihat/wacth/{{$rep->id}}">
                            <h6 class="card-title">
                                {{$rep->judul}}
                            </h6>
                        </a>
                        </div>
					</div>
				</div>
                @endforeach
                <!-- end for -->
            </div>
            <!-- 'kalkulus' -->
            <div class="row">
                <div class="col-12" data-aos="fade-up-right" data-aos-duration="1500" data-aos-delay="100">
                    <li class="fa fa-angle-double-right"></li><span>Kalkulus</span>
                    <hr>
                </div>
            </div>
			<div class="row row-cols-2 row-cols-md-4 text-center">
				<!-- for -->
                @foreach($kalkulus as $rep)
                <div class="col-sm-12 col-md-3 mb-5" data-aos="fade-down" data-aos-duration="1500">
					<div class="card  h-100">
                        <img src="https://img.youtube.com/vi/{{$rep->rekaman_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a href="/lihat/wacth/{{$rep->id}}">
                            <h6 class="card-title">
                                {{$rep->judul}}
                            </h6>
                        </a>
                        </div>
					</div>
				</div>
                @endforeach
                <!-- end for -->
            </div>
            <!-- 'pad' -->
            <div class="row">
                <div class="col-12" data-aos="fade-up-right" data-aos-duration="1500" data-aos-delay="100">
                    <li class="fa fa-angle-double-right"></li><span>Pemrograman Analisa Data</span>
                    <hr>
                </div>
            </div>
			<div class="row row-cols-2 row-cols-md-4 text-center">
				<!-- for -->
                @foreach($pad as $rep)
                <div class="col-sm-12 col-md-3 mb-5" data-aos="fade-down" data-aos-duration="1500">
					<div class="card  h-100">
                        <img src="https://img.youtube.com/vi/{{$rep->rekaman_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a href="/lihat/wacth/{{$rep->id}}">
                            <h6 class="card-title">
                                {{$rep->judul}}
                            </h6>
                        </a>
                        </div>
					</div>
				</div>
                @endforeach
                <!-- end for -->
            </div>
            <!-- 'pbo' -->
            <div class="row">
                <div class="col-12" data-aos="fade-up-right" data-aos-duration="1500" data-aos-delay="100">
                    <li class="fa fa-angle-double-right"></li><span>Pemrograman Berorientasi Obyek I</span>
                    <hr>
                </div>
            </div>
			<div class="row row-cols-2 row-cols-md-4 text-center">
				<!-- for -->
                @foreach($pbo as $rep)
                <div class="col-sm-12 col-md-3 mb-5" data-aos="fade-down" data-aos-duration="1500">
					<div class="card  h-100">
                        <img src="https://img.youtube.com/vi/{{$rep->rekaman_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a href="/lihat/wacth/{{$rep->id}}">
                            <h6 class="card-title">
                                {{$rep->judul}}
                            </h6>
                        </a>
                        </div>
					</div>
				</div>
                @endforeach
                <!-- end for -->
            </div>
            <!-- 'agama' -->
            <div class="row">
                <div class="col-12" data-aos="fade-up-right" data-aos-duration="1500" data-aos-delay="100">
                    <li class="fa fa-angle-double-right"></li><span>Pendidikan agama</span>
                    <hr>
                </div>
            </div>
			<div class="row row-cols-2 row-cols-md-4 text-center">
				<!-- for -->
                @foreach($agama as $rep)
                <div class="col-sm-12 col-md-3 mb-5" data-aos="fade-down" data-aos-duration="1500">
					<div class="card  h-100">
                        <img src="https://img.youtube.com/vi/{{$rep->rekaman_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a href="/lihat/wacth/{{$rep->id}}">
                            <h6 class="card-title">
                                {{$rep->judul}}
                            </h6>
                        </a>
                        </div>
					</div>
				</div>
                @endforeach
                <!-- end for -->
            </div>
            <!-- 'pancasila' -->
            <div class="row">
                <div class="col-12" data-aos="fade-up-right" data-aos-duration="1500" data-aos-delay="100">
                    <li class="fa fa-angle-double-right"></li><span>Pendidikan Pancasila</span>
                    <hr>
                </div>
            </div>
			<div class="row row-cols-2 row-cols-md-4 text-center">
				<!-- for -->
                @foreach($pancasila as $rep)
                <div class="col-sm-12 col-md-3 mb-5" data-aos="fade-down" data-aos-duration="1500">
					<div class="card  h-100">
                        <img src="https://img.youtube.com/vi/{{$rep->rekaman_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a href="/lihat/wacth/{{$rep->id}}">
                            <h6 class="card-title">
                                {{$rep->judul}}
                            </h6>
                        </a>
                        </div>
					</div>
				</div>
                @endforeach
                <!-- end for -->
            </div>
            <!-- 'statistika' -->
            <div class="row">
                <div class="col-12" data-aos="fade-up-right" data-aos-duration="1500" data-aos-delay="100">
                    <li class="fa fa-angle-double-right"></li><span>Statistika</span>
                    <hr>
                </div>
            </div>
			<div class="row row-cols-2 row-cols-md-4 text-center">
				<!-- for -->
                @foreach($statistika as $rep)
                <div class="col-sm-12 col-md-3 mb-5" data-aos="fade-down" data-aos-duration="1500">
					<div class="card  h-100">
                        <img src="https://img.youtube.com/vi/{{$rep->rekaman_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a href="/lihat/wacth/{{$rep->id}}">
                            <h6 class="card-title">
                                {{$rep->judul}}
                            </h6>
                        </a>
                        </div>
					</div>
				</div>
                @endforeach
                <!-- end for -->
            </div>
        </div>
        <!-- <div class="container pt-5 pb-5">
            <div class="judul card-title pb-3">
                <h3>
                    <ul style="list-style-type:disc;">
                        <i class="fas fa-book"></i>Atau Cari Video
                    </ul>
                </h3>
            </div>
			<div class="row">
                <div class="col-md-12 col-lg">
                    <div class="container-fluid">
                        <div class="card">
                            <h5 class="card-header">List Rekaman Video Lainnya</h5>
                            <div class="card-body table-responsive-xl">
                                <table class="table text-nowrap" id="datatables">
                                    <thead>
                                        <tr>
                                        <th class="font-weight-semi-bold border-top-0 py2" scope="col"><i class="fas fa-play-circle"></i></th>
                                        <th class="font-weight-semi-bold border-top-0 py2" scope="col">Judul</th>
                                        <th class="font-weight-semi-bold border-top-0 py2" scope="col">Matkul</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rep)
                                        <tr>
                                            <td class="py-3" >
                                                <div class="position-relative">
                                                    <a class="link-dark d-inline-block" href="/lihat/wacth/{{$rep->id}}">
                                                        <i class="fas fa-play"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="py-3" >{{$rep->judul}}</td>
                                            <td class="py-3" >{{$rep->matkul}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="card-footer d-block d-md-flex align-items-center d-print-none">
                                    <div class="d-flex mb-2 mb-md-0">
                                        Halaman : {{$data->currentPage()}}
                                    </div>
                                    <div class="card-footer d-block d-md-flex align-items-center d-print-none">
                                        <nav class="d-flex ml-md-auto d-print-none" aria-label="Pagination">
                                            <ul class="pagination justify-content-end font-weight-semi-bold mb-0">
                                                <li class="page-item">
                                                    {{ $data->links() }}
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--####################### Quote Starts Here ###################-->
        <div class="footer-ablove">
            <div class="container">
                <div class="row"data-aos-duration="500" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
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
                            <a href="#contact">
                                Admin
                            </a></b>
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-12"data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="1000">
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
                                <a ui-sref="contact" href="#">Contact us</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12"data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="2000">
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
                                <a ui-sref="contact" href="#/contact">Contact us</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 map-img"data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="3000">
                        <h2>
                            <i class="fas fa-map-marker-alt"></i>
                            Contact Us</h2>
                        <address class="md-margin-bottom-40">
                            <p>Lampung Utara</p>
                            <p>Balabus (141 District)</p>
                            <p>Bandar Jaya</p>
                            Phone : 0831-60**-****
                            <br>
                            Email:
                            <a href="mailto:bimaboim10@gmail.com" class="">Yudha Smith</a><br>
                            Web:
                            <a href="#" class="">YudhaSmith.com</a>
                        </address>

                    </div>
                </div>
            </div>

        </footer>
        <div class="copy">
            <div class="container">
                <a href="/">2021 &copy; All Rights Reserved | Designed and Developed by Frans Xaverius & Yudha Smith</a>

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
    <script src="{{ ('../../dataTables/datatables.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#datatables').DataTable();
        } );
    </script>
  </body>
</html>
