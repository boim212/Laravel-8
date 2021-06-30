<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skuy-Replay | Contact-Us | Tempat Replay Kuliah Terbaik</title>
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ ('../../assetsLihat/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ ('../../assetsLihat/css/fontawsom-all.min.css') }}">
    <link rel="stylesheet" href="{{ ('../../assetsLihat/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('../../assetsLihat/css/style.css') }}"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <!--####################### Header Starts Here ###################-->
    <header class="continer-fluid ban">
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-md-3 logo">
                        <strong class="logo">Skuy-Replay</strong>
                    </div>
                    <div class="col-md-9 nav-col pt-2">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="/">Home
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/contact_us">Contact US</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>   
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row" data-aos="zoom-out"data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="100">
                <h2>Contact US | Skuy-Replay | Tempat Replay Kuliah Terbaik</h2>
                <ul>
                    <li> <a href="/"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact US</li>
                </ul>
            </div>
        </div>
    </div>
    <!--####################### Video Blog Starts Here ###################-->
    <div style="margin-top:0px;" class="row no-margin" data-aos="zoom-out-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="300">
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">
                <div style="padding:20px" class="col-sm-7">
                    <div data-aos="zoom-out" data-aos-duration="1500" data-aos-delay="100">
                        <h2 >Contact Form</h2> <br>
                    </div>
                    @if (session('success'))
                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        <strong>Success!</strong>{{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    @endif
                                
                    @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                    <strong>Error!</strong>{{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    @endforeach
                    </div>
                    @endif
                    <form action="/contact_us/send" method="post" >
                    @csrf
                        <div class="row cont-row">
                            <div  class="col-sm-3" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="100">
                                <label>Enter Name </label><span>:</span>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                                <input type="text" placeholder="Enter Your Full Name" name="nama" class="form-control input-sm" >
                                @if($errors->has('nama'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama')}}
                                    </div>
                                @endif
                                <input class="form-control" type="hidden" name="subjek" value="Ada Pesan Dari Website Skuy-Replay Min">
                            </div>
                        </div>
                        <div  class="row cont-row" >
                            <div  class="col-sm-3" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="1000">
                                <label>Email Address </label><span>:</span>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
                                <input type="text" name="tujuan" placeholder="Enter Your Email Address" class="form-control input-sm"  >
                                @if($errors->has('tujuan'))
                                    <div class="text-danger">
                                        {{ $errors->first('tujuan')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div  class="row cont-row">
                            <div  class="col-sm-3" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="2000">
                                <label>Mobile Number</label><span>:</span>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="2000">
                                <input type="text" name="telpon" placeholder="Enter Your Mobile Number" class="form-control input-sm"  >
                                @if($errors->has('telpon'))
                                    <div class="text-danger">
                                        {{ $errors->first('telpon')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="3000">
                                <label for="">Choose Admin</label><span>:</span>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="3000">
                                <select name="alamat" class="form-control" id="alamat" >
                                    <option value="">Pilih Developer</option>
                                    <option value="fx.bima.yudha.pratama@gmail.com">Yudha Developer</option>
                                    <option value="akmkevin100@gmail.com">Andreas Developer</option>
                                </select>
                                @if($errors->has('alamat'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div  class="row cont-row">
                            <div  class="col-sm-3" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="5000">
                                <label>Enter Message</label><span>:</span>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="4000">
                                <textarea rows="5" name="pesan" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                                @if($errors->has('pesan'))
                                    <div class="text-danger">
                                        {{ $errors->first('pesan')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3">
                                <label></label>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="5000">
                                <button type="submit" name="Kirim" class="btn btn-danger btn-sm">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-5">
                    <div style="margin:50px" class="serv" data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="1000">
                        <h2 style="margin-top:10px;">Address</h2>
                        Lampung Utara<br>
                        Balabus (141 District)<br>
                        Bandar Jaya<br>
                        Phone : 0831-60**-****<br>
                        Email: Yudha Smith<br>
                        Email: Kevin Smith<br>
                        Web:<a href="#" class="">Skuy-Replay.com</a><br>
                    </div>    
                </div>
            </div>
        </div>
    </div>  
    
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
                            About Us
                    </h2>
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
                            Useful Links
                    </h2>
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
                <div class="col-md-3 col-sm-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="2000">
                    <h2>
                        <i class="fas fa-life-ring"></i>
                            Get Support
                    </h2>
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
                            Contact Us
                    </h2>
                    <address class="md-margin-bottom-40">
                        <p>Lampung Utara</p>
                        <p>Balabus (141 District)</p>
                        <p>Bandar Jaya</p>
                        Phone : 0831-60**-****<br>
                        Email: Yudha Smith<br>
                        Email: Kevin Smith<br>
                        Web:<a href="#" class="">Skuy-Replay.com</a>
                    </address>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy">
            <div class="container" >
                <a href="">2021 &copy; All Rights Reserved | Designed and Developed by Frans Xaverius, Andreas Kevin & Yudha Smith</a>

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
        <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script>
        gsap.from('.ban',{duration :1.6, y:'-100%',opacity:0 , ease:'bounce'});
    </script>
    
    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        
        AOS.init();
    </script>
</body>

<script src=" {{ ('assetsLihat/js/jquery-3.2.1.min.js ') }}"></script>
<script src=" {{ ('assetsLihat/js/popper.min.js ') }}"></script>
<script src=" {{ ('assetsLihat/js/bootstrap.min.js ') }}"></script>
<script src=" {{ ('assetsLihat/plugins/scroll-fixed/jquery-scrolltofixed-min.js ') }}"></script>
<script src=" {{ ('assetsLihat/js/script.js ') }}"></script>
</html>