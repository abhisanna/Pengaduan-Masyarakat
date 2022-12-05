<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboard/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('dashboard/assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Laporin | Aplikasi Pengaduan Masyarakat
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <style>
        body {
            background-color: #f4f3ef;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        a {
            text-decoration: none;
            color: grey;
        }

        a:active {
            text-decoration: none;
            color: grey;
        }

        a:hover {
            text-decoration: none;
            color: grey;
        }

        .cek-middle {
            vertical-align: middle;
        }

        .cek-menu {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="warning">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                    <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
                    <!-- <p>CT</p> -->
                </a>
                <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                    <strong class="px-3">Laporin.</strong>
                    <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="/home">
                            <i class="nc-icon nc-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('penduduk.index') }}">
                            <i class="nc-icon nc-badge"></i>
                            <p>Penduduk</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kategori.index') }}">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Kategori</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.index') }}">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Admin</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('response.index') }}">
                            <i class="nc-icon nc-chart-bar-32"></i>
                            <p>Aspirasi</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('rating.index') }}">
                            <i class="nc-icon nc-favourite-28"></i>
                            <p>Rating</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" style="height: 100vh;">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" disabled><span class="py-2"><i class="nc-icon nc-align-left-2 mr-2"></i>{{ Auth::user()->name }}</span></a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <span class="py-2"><i class="nc-icon nc-button-power mr-2"></i>Log Out</span></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->