@extends('template.master')
@section('content')
@include('sweetalert::alert')
<h4 class="header my-auto"><strong>Penduduk</strong></h4>
<p style="color: grey;">Data Penduduk berdasarkan NIK serta Alamat dari Penduduk.</p>
<div class="row h-50">
    <div class="col-md-12 h-100 d-table">
        <!-- create -->
        <div class="card card-user d-table-cell align-middle">
            <div class="card-body">
                <form action="{{ route('penduduk.update', [$penduduk->nik]) }}" method="post" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-3 mt-4">
                            <div class="form-group pl-1">
                                <label>NIK</label>
                                <input type="number" class="form-control" name="nik" value="{{ $penduduk->nik }}" placeholder="Masukkan NIK Penduduk">
                            </div>
                        </div>
                        <div class="col-md-9 pl-3 mt-4">
                            <div class="form-group pr-1">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $penduduk->alamat }}" placeholder="Masukkan Alamat Penduduk">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-warning btn-round">Update Penduduk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection