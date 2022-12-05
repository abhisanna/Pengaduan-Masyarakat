@extends('template.master')
@section('content')
@include('sweetalert::alert')
<h4 class="header my-auto"><strong>Response</strong></h4>
<p style="color: grey;">Data Response untuk disalurkan kepada Penduduk.</p>
<div class="row h-50">
    <div class="col-md-12 h-100 d-table">
        <!-- create -->
        <div class="card card-user d-table-cell align-middle">
            <div class="card-body">
                <form action="{{ route('response.update', [$response->id_aspirasi]) }}" method="post" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <div class="form-group pr-1">
                                <label>ID Laporan</label>
                                <select class="form-control" name="pelaporan" disabled>
                                    <option selected>{{ $response->id_pelaporan }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-group pr-1">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>-- Pilih Status --</option>
                                    <option value="menunggu">Menunggu</option>
                                    <option value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <div class="form-group pl-1">
                                <label>Feedback</label>
                                <textarea class="form-control" name="feedback" placeholder="Masukkan Feedback Laporan" id="floatingTextarea2" style="height: 100px">{{ $response->feedback}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-warning btn-round">Update Response</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection