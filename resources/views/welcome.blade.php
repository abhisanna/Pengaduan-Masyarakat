<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Laporin | Aplikasi Pengaduan Masyarakat</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/menu_sideslide.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/responsive.css') }}">

    <!-- icon -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <style>
        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 6px 10px -4px rgba(0, 0, 0, 0.15);
            background-color: #FFFFFF;
            color: #252422;
            margin-bottom: 20px;
            position: relative;
            border: 0 none;
            transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 200ms ease;
        }

        .card .card-body {
            padding: 15px 15px 10px 15px;
        }

        .card .card-body.table-full-width {
            padding-left: 0;
            padding-right: 0;
        }

        .card .card-header {
            padding: 15px 15px 0;
            border: 0;
        }

        .card .card-header:not([data-background-color]) {
            background-color: transparent;
        }

        .card .card-header .card-title {
            margin-top: 10px;
        }

        .card .map {
            border-radius: 3px;
        }

        .card .map.map-big {
            height: 500px;
        }

        .card[data-background-color="orange"] {
            background-color: #51cbce;
        }

        .card[data-background-color="orange"] .card-header {
            background-color: #51cbce;
        }

        .card[data-background-color="orange"] .card-footer .stats {
            color: #FFFFFF;
        }

        .card[data-background-color="red"] {
            background-color: #ef8157;
        }

        .card[data-background-color="yellow"] {
            background-color: #fbc658;
        }

        .card[data-background-color="blue"] {
            background-color: #51bcda;
        }

        .card[data-background-color="green"] {
            background-color: #6bd098;
        }

        .card .image {
            overflow: hidden;
            height: 200px;
            position: relative;
        }

        .card .avatar {
            width: 30px;
            height: 30px;
            overflow: hidden;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .card .numbers {
            font-size: 2em;
        }

        .card .big-title {
            font-size: 12px;
            text-align: center;
            font-weight: 500;
            padding-bottom: 15px;
        }

        .card label {
            font-size: 0.8571em;
            margin-bottom: 5px;
            color: #9A9A9A;
        }

        .card .card-footer {
            background-color: transparent;
            border: 0;
        }

        .card .card-footer .stats i {
            margin-right: 5px;
            position: relative;
            top: 0px;
            color: #66615B;
        }

        .card .card-footer .btn {
            margin: 0;
        }

        .card.card-plain {
            background-color: transparent;
            box-shadow: none;
            border-radius: 0;
        }

        .card.card-plain .card-body {
            padding-left: 5px;
            padding-right: 5px;
        }

        .card.card-plain img {
            border-radius: 12px;
        }

        .card-plain {
            background: transparent;
            box-shadow: none;
        }

        .card-plain .card-header,
        .card-plain .card-footer {
            margin-left: 0;
            margin-right: 0;
            background-color: transparent;
        }

        .card-plain:not(.card-subcategories).card-body {
            padding-left: 0;
            padding-right: 0;
        }

        .card-chart .card-header .card-title {
            margin-top: 10px;
            margin-bottom: 0;
        }

        .card-chart .card-header .card-category {
            margin-bottom: 5px;
        }

        .card-chart .table {
            margin-bottom: 0;
        }

        .card-chart .table td {
            border-top: none;
            border-bottom: 1px solid #e9ecef;
        }

        ul {
            list-style-type: none;
        }

        ul li {
            display: inline-block;
            margin: 5px;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')
    <div class="menu-wrap">
        <nav class="menu navbar">
            <div class="icon-list navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#video-area">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lapor">Lapor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                    <li class="0nav-item">
                        <a class="nav-link" href="#history">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                    </li>
                </ul>
            </div>
        </nav>
        <button class="close-button" id="close-button"><i class="lnr lnr-cross"></i></button>
    </div>
    <!-- Header Section Start -->

    <header id="video-area" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div id="block" data-vide-bg="{{ asset('landing/video/video.mp4') }}"></div>
        <div class="fixed-top">
            <div class="container">
                <div class="logo-menu">
                    <a href="{{ route('login') }}" class="logo" style="letter-spacing: 5px; font-weight: bold;"><strong>Laporin.</strong></a>
                    <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>
                </div>
            </div>
        </div>
        <div class="overlay overlay-2"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="contents text-center">
                        <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Aplikasi Pengaduan Masyarakat</h1>
                        <p class="lead  wow fadeIn" style="font-weight: bold;" data-wow-duration="1000ms" data-wow-delay="400ms">Ajukan laporanmu demi lingkungan yang lebih maju</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Services Section Start -->
    <section id="lapor" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s" style="font-weight: bold;">Lapor <span>Yuk</span></h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Ada masalah yang sedang terjadi di lingkungan masyarakat Anda? Kenapa tidak dilaporkan saja.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 h-100">
                    <!-- create -->
                    <div class="card card-user" style="box-shadow: 2px 3px 10px rgb(0,0,0,0.2); border-radius: 10px;">
                        <div class="card-body">
                            <form action="{{ route('inputaspirasi.store') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-md-5 mt-4">
                                        <div class="form-group pl-1">
                                            <label>NIK</label>
                                            <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK Penduduk" value="{{ old('nik') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-5 mt-4 justify-content-center">
                                        <div class="form-group pr-1">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori" value="{{ old('kategori') }}">
                                                <option selected style="color: grey;">-- Pilih Kategori Laporan --</option>
                                                @foreach(App\Models\Kategori::all() as $kategori)
                                                <option value="{{ $kategori->id_kategori }}">{{ $kategori->ket_kategori }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 mt-4">
                                        <div class="form-group pl-1">
                                            <label>Lokasi</label>
                                            <textarea class="form-control" name="lokasi" placeholder="Masukkan Lokasi yang Berkaitan dengan Laporan" id="floatingTextarea2" style="height: 100px">{{ old('lokasi') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 mt-4">
                                        <div class="form-group pl-1">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" style="height: 100px;" name="ket" placeholder="Masukkan Keterangan yang Berkaitan dengan Laporan" id="floatingTextarea2" style="height: 100px">{{ old('ket') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2 mb-4 justify-content-center">
                                    <div class="update ml-auto mr-auto">
                                        <button type="submit" class="btn btn-warning" style="border-radius: 40px; font-weight: bold;">Submit Laporan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Start Pricing Table Section -->
    <div id="layanan" class="section pricing-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Layanan <span>Kami</span></h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Bingung apa saja yang kami pertanggung jawabkan?</p>
            </div>

            <div class="row pricing-tables">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table table-left wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0.3s">
                        <div class="icon">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <div class="pricing-details">
                            <h2>Kebersihan</h2>
                            <ul class="text-center">
                                <li>Halaman Yang Kurang Rapi</li>
                                <li>Pepohonan Rimbun</li>
                                <li>Banyak Coretan Pada Tembok</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
                        <div class="icon">
                            <i class="lnr lnr-heart"></i>
                        </div>
                        <div class="pricing-details">
                            <h2>Keamanan</h2>
                            <ul class="text-center">
                                <li>Jalanan Berlubang</li><br>
                                <li>Rawan Kriminalitas</li><br>
                                <li>Cukup Banyak Keributan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table table-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="0.3s">
                        <div class="icon">
                            <i class="lnr lnr-magic-wand"></i>
                        </div>
                        <div class="pricing-details">
                            <h2>Bencana</h2>
                            <ul class="text-center">
                                <li>Gempa Bumi</li><br>
                                <li>Banjir</li><br>
                                <li>Tanah Longsor</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Pricing Table Section -->

    <!-- Start Video promo Section -->
    <section class="video-promo section" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="video-promo-content text-center">
                        <h2 class="wow zoomIn mt-2" data-wow-duration="1000ms" data-wow-delay="100ms" style="font-weight: bold;">Jumlah Laporan Sekarang</h2>
                        <div class="fact-count">
                            <p><span data-wow-duration="1000ms" data-wow-delay="100ms" class="counter wow zoomIn">{{DB::table('aspirasi')->count()}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Features Section Start -->
    <section id="history" class="section" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><span>History</span></h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Ayo cek laporan kamu apakah sudah diproses atau belum.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 h-100">
                    <!-- read -->

                    <div class="card card-plain">
                        <div class="card-header">
                            <span class="float-right">
                                <label for="header" style="font-weight: bold;">Rating</label>
                                <form action="{{ route('rating.store') }}" method="post" autocomplete="off">
                                    @csrf
                                    <ul>
                                        <li>
                                            <input type="radio" name="rating" id="tidakpuas" value="tidak puas" onclick="javascript: submit()">
                                            <label for="tidakpuas" style="font-size: 20px;">🙁</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="rating" id="kurangpuas" value="kurang puas" onclick="javascript: submit()">
                                            <label for="kurangpuas" style="font-size: 20px;">😐</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="rating" id="cukuppuas" value="cukup puas" onclick="javascript: submit()">
                                            <label for="cukuppuas" style="font-size: 20px;">😌</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="rating" id="puas" value="puas" onclick="javascript: submit()">
                                            <label for="puas" style="font-size: 20px;">😃</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="rating" id="sangatpuas" value="sangat puas" onclick="javascript: submit()">
                                            <label for="sangatpuas" style="font-size: 20px;">😎</label>
                                        </li>
                                    </ul>
                                </form>
                            </span>
                            <form class="form" method="get" action="{{ route('search') }}" autocomplete="off">
                                <div class="input-group row w-50">
                                    <input type="text" name="search" id="search" placeholder="Cari berdasarkan NIK" class="form-control" style="width: 230px;">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                    <a href="{{ route('inputaspirasi.index') }}" class="btn btn-danger">Reset</a>
                                </div>
                            </form>
                            <!-- <form class="form" method="get" action="{{ route('search') }}" autocomplete="off">
                                <div class="row w-50">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control h-30 d-inline" id="search" placeholder="Cari berdasarkan ID Laporan...">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary h-30">Cari</button>
                                        </div>
                                    </div>
                                </div>
                            </form> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th width="10%" class="text-center">No. Laporan</th>
                                        <th width="20%" class="text-center">Tanggal</th>
                                        <th width="20%" class="text-center">Kategori</th>
                                        <th width="20%" class="text-center">Keterangan Laporan</th>
                                        <th width="35%" class="text-center">Feedback</th>
                                        <th class="text-center">Status</th>
                                    </thead>
                                    <tbody class="font-weight-normal">
                                        @if(count($history)>0)
                                        @foreach($history as $histories)
                                        <tr class="h-50">
                                            <td class="text-center" style="vertical-align: middle;">{{ $histories->id_pelaporan }}</td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $histories->created_at->format('d M Y') }}</td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $histories->inputaspirasi->kategori['ket_kategori'] }}</td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $histories->inputaspirasi['ket'] }}</td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $histories->feedback }}</td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                @if($histories->status == "menunggu")
                                                <span class="btn btn-info p-3" style="border-radius: 40px;" disabled>{{ $histories->status }}</span>
                                            </td>
                                            @elseif($histories->status == "proses")
                                            <span class="btn btn-warning" style="border-radius: 40px;" disabled>{{ $histories->status }}</span>
                                            </td>
                                            @else
                                            <span class="btn btn-success" style="border-radius: 40px;" disabled>{{ $histories->status }}</span>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                        @else
                                        <td class="card-category text-center" style="color: red;" colspan="5"><em>Belum ada <strong>Laporan</strong> yang dapat di tampilkan.</em></td>
                                        @endif
                                    </tbody>
                                </table>
                                {{ $history->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Counter Section Start -->
    <div class="counters section" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="wow fadeInUp" data-wow-delay=".2s">
                        <div class="facts-item">
                            <div class="fact-count">
                                <h3><span class="counter">34</span></h3>
                                <h4>Kementrian</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="wow fadeInUp" data-wow-delay=".4s">
                        <div class="facts-item">
                            <div class="fact-count">
                                <h3><span class="counter">100</span></h3>
                                <h4>Lembaga</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="wow fadeInUp" data-wow-delay=".6s">
                        <div class="facts-item">
                            <div class="fact-count">
                                <h3><span class="counter">396</span></h3>
                                <h4>Pemkab</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="wow fadeInUp" data-wow-delay=".8s">
                        <div class="facts-item">
                            <div class="fact-count">
                                <h3><span class="counter">94</span></h3>
                                <h4>Pemkot</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Footer Section Start -->
    <footer style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="social-icons wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <div class="site-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
                        <p>All copyrights reserved &copy; 2022 - Designed & Developed by Abhisanna</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="lnr lnr-arrow-up"></i>
    </a>

    <div id="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('landing/js/jquery-min.js') }}"></script>
    <script src="{{ asset('landing/js/tether.min.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/classie.js') }}"></script>
    <script src="{{ asset('landing/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('landing/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('landing/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('landing/js/smooth-scroll.js') }}"></script>
    <script src="{{ asset('landing/js/smooth-on-scroll.js') }}"></script>
    <script src="{{ asset('landing/js/wow.js') }}"></script>
    <script src="{{ asset('landing/js/menu.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.vide.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('landing/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('landing/js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/7d0d675d6d.js" crossorigin="anonymous"></script>
</body>

</html>