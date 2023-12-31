<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Masjid nurul imam pangkep</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/mico-html/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('template/mico-html/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- nice select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <!-- datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('template/mico-html/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('template/mico-html/css/responsive.css') }}" rel="stylesheet" />

</head>

<style>
    html {
        scroll-behavior: smooth;
    }

    .full-height {
        height: 100vh !important;
    }
</style>


<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="header_top">
                <div class="container">
                    <div class="contact_nav">
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call : +01 123455678990
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                Email : info@gmail.com
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Location
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        {{-- <a class="navbar-brand text-black" href="index.html" style="color:black">
                            <img src="" alt="">
                            Masjid Nurul Imam
                        </a> --}}


                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                                <ul class="navbar-nav  ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Beranda <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tentang"> Tentang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#jadwal">Jadwal</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="quote_btn-container">
                                <a href="{{ URL::to('/login') }}">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>
                                        Login
                                    </span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section shadow-none"
            style="background: url('img/masjid.jpg'); background-repeat:no-repeat; background-size:cover">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="play_btn">
                                <button>
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </button>
                            </div>
                            <h1>
                                Masjid <br>
                                <span>
                                    Nurul Imam Pangkep
                                </span>
                            </h1>
                            <p style="color:black">
                                Website Sistem informasi dan reminder pada kegiatan masjid raya nurul imam pangkep
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box">
                            {{-- <img src="{{ asset('template/mico-html/images/3733.jpg ') }}" alt=""> --}}
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>


    <!-- book section -->

    <section class="book_section layout_padding " id="jadwal">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form>
                        <h4>
                            JADWAL <span>CERAMAH</span>
                        </h4>
                        <table class="table table-striped table-hover table-user table-action-hover" id="table-data">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <td>Tanggal</td>
                                    <td>nama</td>
                                    <td>No hp</td>
                                    <td>tema</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwal_ceramah as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->tanggal }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->no_hp }}</td>
                                        <td>{{ $row->tema }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="book_section layout_padding " id="jadwal_kegiatan">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form>
                        <h4>
                            JADWAL <span>KEGIATAN</span>
                        </h4>
                        <table class="table table-striped table-hover table-user table-action-hover" id="table-data">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <td>Tgl kegiatan</td>
                                    <td>Jenis Kegiatan</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kegiatan_masjid as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->tgl_kegiatan }}</td>
                                        <td>{{ $row->jenis_kegiatan }}</td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="book_section layout_padding" id="rekap_kas">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form>
                        <h4>
                            REKAP <span>KAS</span>
                        </h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card shadow-sm">
                                    <div class="card-body">

                                        <table class="table table-striped table-hover table-user table-action-hover"
                                            id="table-data">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <td>Tanggal</td>
                                                    <td>Kas keluar</td>
                                                    <td>Jenis kas</td>
                                                    <td>Saldo</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kas_keluar as $row)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $row->tanggal }}</td>
                                                        <td>Rp. {{ number_format($row->kas_keluar) }}</td>
                                                        <td>{{ $row->jenis_kas }}</td>
                                                        <td>Rp. {{ number_format($row->kas_keluar) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card shadow-sm">
                                    <div class="card-body">

                                        <table class="table table-striped table-hover table-user table-action-hover"
                                            id="table-data">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <td>Tanggal</td>
                                                    <td>Kas masuk</td>
                                                    <td>Jenis kas</td>
                                                    <td>Saldo</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kas_masuk as $row)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $row->tanggal }}</td>
                                                        <td>Rp. {{ number_format($row->kas_masuk) }}</td>
                                                        <td>{{ $row->jenis_kas }}</td>
                                                        <td>Rp. {{ number_format($row->kas_masuk) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- end book section -->



    <!-- footer section -->
    <footer class="footer_section" id="tentang">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> 2023
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="{{ asset('template/mico-html/js/jquery-3.4.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('template/mico-html/js/bootstrap.js') }}"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- custom js -->
    <script src="{{ asset('template/mico-html/js/custom.js') }}"></script>


</body>

</html>
