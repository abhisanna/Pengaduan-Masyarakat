@extends('template.master')
@section('content')
@include('sweetalert::alert')
<h4 class="header my-auto"><strong>Kategori</strong></h4>
<p style="color: grey;">Data Kategori yang mengatur jenis Laporan dari Penduduk.</p>
<div class="row">
    <div class="col-md-12 h-100 d-table">
        <!-- create -->
        <div class="card card-user d-table-cell align-middle">
            <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <div class="form-group pl-1">
                                <label>Kategori</label>
                                <input type="text" class="form-control" name="ket_kategori" placeholder="Masukkan Keterangan Kategori Laporan" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-warning btn-round">Tambah Kategori</button>
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
                            <th class="text-center">#</th>
                            <th class="text-center">Keterangan Kategori</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody class="font-weight-normal">
                            @if(count($kategori)>0)
                            @foreach($kategori as $key=>$kategoris)
                            <tr>
                                <td class="text-center">{{ $key+1 }}</td>
                                <td class="text-center">{{ $kategoris->ket_kategori }}</td>
                                <td class="text-center">
                                    <form action="{{ route('kategori.destroy', [$kategoris->id_kategori]) }}" method="post" autocomplete="off">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <a href="{{ route('kategori.edit', [$kategoris->id_kategori]) }}" class="btn btn-outline-success"><i class="nc-icon nc-refresh-69"></i></a>
                                        <button type="submit" class="btn btn-outline-danger"><i class="nc-icon nc-scissors"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <td class="card-category text-center" style="color: red;" colspan="3"><em>Tidak ada data <strong>Kategori</strong> yang dapat di tampilkan.</em></td>
                            @endif
                        </tbody>
                    </table>
                    {{ $kategori->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection