<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Skuy-Replay | Tempat Replay Kuliah Terbaik</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ ('../../img/logo.jpg') }}">

    <!-- Template -->
    <link rel="stylesheet" href="{{ ('../../template/css/skuy.css') }}">
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
<!-- Header -->
<header class="header bg-body">
    <nav class="navbar flex-nowrap p-0">
        <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
            <!-- Logo For Mobile View -->
            <a class="navbar-brand navbar-brand-mobile" href="/">
                <img class="img-fluid w-100" src="{{ ('../../img/logo.jpg') }}" alt="Graindashboard">
            </a>
            <!-- End Logo For Mobile View -->

            <!-- Logo For Desktop View -->
            <a class="navbar-brand navbar-brand-desktop" href="/">
                <img class="side-nav-show-on-closed" src="{{ ('../../img/logo.jpg') }}" alt="Graindashboard" style="width: auto; height: 33px;">
                <img class="side-nav-hide-on-closed" src="{{ ('../../img/logo.jpg') }}" alt="Graindashboard" style="width: auto; height: 33px;">
            </a>
            <!-- End Logo For Desktop View -->
        </div>

        <div class="header-content col px-md-3">
            <div class="d-flex align-items-center">
                <!-- Side Nav Toggle -->
                <a  class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                    data-close-invoker="#sidebarClose"
                    data-target="#sidebar"
                    data-target-wrapper="body">
                    <i class="gd-align-left"></i>
                </a>
                <!-- End Side Nav Toggle -->

                <!-- User Notifications -->
                <div class="dropdown ml-auto">
                    <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#notifications" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                        
                    </a>

                    <div id="notifications" class="dropdown-menu dropdown-menu-center py-0 mt-4 w-18_75rem w-md-22_5rem unfold-css-animation unfold-hidden" aria-labelledby="notificationsInvoker" style="animation-duration: 300ms;">
                        <div class="card">
                            <div class="card-header d-flex align-items-center border-bottom py-3">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End User Notifications -->
                <!-- User Avatar -->
                <div class="dropdown mx-3 dropdown ml-2">
                    <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#profileMenu" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                        <!--img class="avatar rounded-circle mr-md-2" src="#" alt="John Doe"-->
                        <span class="d-none d-md-block">{{ Auth::user()->name}}</span>
                        <i class="gd-angle-down d-none d-md-block ml-2"></i>
                    </a>

                    <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                        
                        <li class="unfold-item unfold-item-has-divider">
                            <a class="unfold-link d-flex align-items-center text-nowrap" href="{{ route('logout') }}">
                    <span class="unfold-item-icon mr-3">
                      <i class="gd-power-off"></i>
                    </span>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End User Avatar -->
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->

<!-- main -->
<main class="main">
    <!-- Sidebar Nav -->
    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
            <!-- Title -->
            <li class="sidebar-heading h6">Dashboard</li>
            <!-- End Title -->

            <!-- rekaman -->
            <li class="side-nav-menu-item side-nav-has-menu active side-nav-opened">
                <a class="side-nav-menu-link media align-items-center" href="/rekaman"
                   data-target="#subUsers">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-dashboard"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">Rekaman</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->
                <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0" style="display: block;">
                    <li class="side-nav-menu-item ">
                        <a class="side-nav-menu-link" href="/rekaman">Semua Rekaman</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="/rekaman/tambah">Tambah Link</a>
                    </li>
                </ul>
                <!-- End Users: subUsers -->
            </li>
            <!-- rekaman Users -->

        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    <!-- Breadcrumb -->
                    <nav class="d-none d-md-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/rekaman">Skuy-Replay</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Rekaman Kuliah | Edit Data</div>
                    </div>


                    <!-- Users -->
                    <div class="table-responsive-xl">
                        <form method="post" action="/rekaman/update/{{ $rekaman->id }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label>Nama Anda :</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Anda ..." value=" {{ $rekaman->nama }}">
                                @if($errors->has('nama'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label >Judul Rekaman :</label>
                                <input type="text" name="judul" class="form-control" placeholder="Judul Nya Apa ..." value=" {{ $rekaman->judul }}">
                                @if($errors->has('judul'))
                                    <div class="text-danger">
                                        {{ $errors->first('judul')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label >Mata Kuliah Anda :</label>
                                <input type="text" name="matkul" class="form-control" placeholder="Mata Kuliah Nya Apa ..." value=" {{ $rekaman->matkul }}">
                                @if($errors->has('matkul'))
                                    <div class="text-danger">
                                        {{ $errors->first('matkul')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label >Kelas Anda :</label>
                                <input type="text" name="kelas" class="form-control" placeholder="Anda Kelas Apa ..." value=" {{ $rekaman->kelas}}">
                                @if($errors->has('kelas'))
                                    <div class="text-danger">
                                        {{ $errors->first('kelas')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Nama Dosen :</label>
                                <input type="text"name="dosen" class="form-control" placeholder="Nama Dosennya Siapa ..." value=" {{ $rekaman->dosen }}">
                                @if($errors->has('dosen'))
                                    <div class="text-danger">
                                        {{ $errors->first('dosen')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Link :</label>
                                <input type="text" name="link" class="form-control" placeholder="LINK nya bre ..." value=" {{ $rekaman->link }}">
                                @if($errors->has('link'))
                                    <div class="text-danger">
                                        {{ $errors->first('link')}}
                                    </div>
                                @endif
                            </div>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </form>
                    </div>
                    <!-- End Users -->
                </div>
            </div>


        </div>

        <!-- Footer -->
        <footer class="small p-3 px-md-4 mt-auto">
            <div class="row justify-content-between">
                <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">
                    <ul class="list-dot list-inline mb-0">
                        <li class="list-dot-item list-dot-item-not list-inline-item mr-lg-2"><a class="link-dark" href="#">FAQ</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Support</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Contact us</a></li>
                    </ul>
                </div>

                <div class="col-lg text-center mb-3 mb-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="gd-twitter-alt"></i></a></li>
                        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="gd-facebook"></i></a></li>
                        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="gd-github"></i></a></li>
                    </ul>
                </div>

                <div class="col-lg text-center text-lg-right">
                    &copy; 2021 Yudha Developer. All Rights Reserved.
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</main>

<!-- akhir main -->
<script src="{{ ('../../template/js/skuy.js') }}"></script>
<script src="{{ ('../../template/js/skuy.vendor.js') }}"></script>

</body>
</html>