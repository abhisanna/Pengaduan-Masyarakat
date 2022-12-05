@extends('template.master')
@section('content')
@include('sweetalert::alert')
<h4 class="header my-auto"><strong>Penduduk</strong></h4>
<p style="color: grey;">Data Penduduk berdasarkan NIK serta Alamat dari Penduduk.</p>
<div class="row">
    <div class="col-md-12 h-100 d-table">
        <!-- create -->
        <div class="card card-user d-table-cell align-middle">
            <div class="card-body">
                <form action="{{ route('penduduk.store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-3 mt-4">
                            <div class="form-group pl-1">
                                <label>NIK</label>
                                <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK Penduduk" required>
                            </div>
                        </div>
                        <div class="col-md-9 pl-3 mt-4">
                            <div class="form-group pr-1">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Penduduk" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-warning btn-round">Tambah Penduduk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- read -->
    <div class="col-md-12 mt-3">
        <div class="card card-plain">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-warning">
                            <th class="text-center">NIK</th>
                            <th width="60%" class="text-center">Alamat</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody class="font-weight-normal">
                            @if(count($penduduk)>0)
                            @foreach($penduduk as $penduduks)
                            <tr>
                                <td class="text-center">{{ $penduduks->nik }}</td>
                                <td class="text-justify">{{ $penduduks->alamat }}</td>
                                <td class="text-center">
                                    <form action="{{ route('penduduk.destroy', [$penduduks->nik]) }}" method="post" autocomplete="off">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <a href="{{ route('penduduk.edit', [$penduduks->nik]) }}" class="btn btn-outline-success"><i class="nc-icon nc-refresh-69"></i></a>
                                        <button type="submit" class="btn btn-outline-danger"><i class="nc-icon nc-scissors"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <td class="card-category text-center" style="color: red;" colspan="3"><em>Tidak ada data <strong>Penduduk</strong> yang dapat di tampilkan.</em></td>
                            @endif
                        </tbody>
                    </table>
                    {{ $penduduk->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection