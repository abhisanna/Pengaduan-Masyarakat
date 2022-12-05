@extends('template.master')
@section('content')
@include('sweetalert::alert')
<h4 class="header my-auto"><strong>Kategori</strong></h4>
<p style="color: grey;">Data Kategori yang mengatur jenis Laporan dari Penduduk.</p>
<div class="row h-50">
    <div class="col-md-12 h-100 d-table">
        <!-- create -->
        <div class="card card-user d-table-cell align-middle">
            <div class="card-body">
                <form action="{{ route('kategori.update', [$kategori->id_kategori]) }}" method="post" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="form-group pl-1">
                                <label>Keterangan Kategori</label>
                                <input type="text" class="form-control" name="ket_kategori" value="{{ $kategori->ket_kategori }}" placeholder="Masukkan Keterangan Kategori Laporan">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-warning btn-round">Update Kategori</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection