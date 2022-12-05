@extends('template.master')

@section('content')
<h3 class="header my-auto">Selamat Datang <strong><span style="text-transform: capitalize;">{{ Auth::user()->name }}</span></strong>!!</h3>
<p style="color: grey;" class="mb-5">Berikut jumlah data yang berkaitan dengan pelaporan.</p>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-badge text-warning"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Penduduk</p>
                            <p class="card-title">{{DB::table('penduduk')->count()}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <a href="{{ route('penduduk.index') }}">Cek Sekarang <i class="nc-icon nc-minimal-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-primary">
                            <i class="nc-icon nc-bullet-list-67 text-primary"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Kategori</p>
                            <p class="card-title">{{DB::table('kategori')->count()}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <a href="{{ route('kategori.index') }}">Cek Sekarang <i class="nc-icon nc-minimal-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-success">
                            <i class="nc-icon nc-chart-bar-32 text-success"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Response</p>
                            <p class="card-title">{{DB::table('aspirasi')->count()}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <a href="{{ route('response.index') }}">Cek Sekarang <i class="nc-icon nc-minimal-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-danger">
                            <i class="nc-icon nc-favourite-28 text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Rating</p>
                            <p class="card-title">{{DB::table('rating')->count()}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats cek-menu">
                    <a href="{{ route('rating.index') }}"><span class="cek-middle">Cek Sekarang</span> <i class="nc-icon nc-minimal-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection