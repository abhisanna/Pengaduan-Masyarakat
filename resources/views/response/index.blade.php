@extends('template.master')
@section('content')
@include('sweetalert::alert')
<h4 class="header my-auto"><strong>Aspirasi</strong></h4>
<p style="color: grey;">Data Aspirasi yang berhasil dilaporkan oleh Penduduk.</p>
<div class="row">
    <!-- read -->
    <div class="col-md-12 mt-3">
        <div class="card card-plain">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-warning">
                            <th class="text-center">ID Pelaporan</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">Kategori</th>
                            <th class="text-center">Lokasi</th>
                            <th class="text-center">Feedback</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody class="font-weight-normal">
                            @if(count($response)>0)
                            @foreach($response as $responses)
                            <tr>
                                <td class="text-center">{{ $responses->id_pelaporan }}</td>
                                <td class="text-center">{{ $responses->created_at->format('d/m/Y') }}</td>
                                <td class="text-center">{{ $responses->inputaspirasi['nik'] }}</td>
                                <td class="text-center">{{ $responses->inputaspirasi->kategori['ket_kategori'] }}</td>
                                <td class="text-center">{{ $responses->inputaspirasi['lokasi'] }}</td>
                                <td class="text-center">{{ $responses->feedback }}</td>
                                <td class="text-center">
                                @if($responses->status == "menunggu")
                                <span class="btn btn-info" style="border-radius: 40px;" disabled>{{ $responses->status }}</span>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('response.update', [$responses->id_aspirasi]) }}" method="post">
                                    {{ method_field('PUT') }}
                                    @csrf
                                    <button class="btn btn-outline-success" type="submit">Kerjakan</button>
                                    </form>
                                </td>
                                @elseif($responses->status == "proses")
                                <span class="btn btn-warning" style="border-radius: 40px;" disabled>{{ $responses->status }}</span>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('response.update', [$responses->id_aspirasi]) }}" method="post">
                                    {{ method_field('PUT') }}
                                    @csrf
                                    <button class="btn btn-outline-success" type="submit">Selesaikan</button>
                                    </form>
                                </td>
                                @else
                                <span class="btn btn-success" style="border-radius: 40px;" disabled>{{ $responses->status }}</span>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('response.update', [$responses->id_aspirasi]) }}" method="post">
                                    {{ method_field('PUT') }}
                                    @csrf
                                    <button class="btn btn-outline-success" type="submit" disabled>Selesai</button>
                                    </form> 
                                </td>
                                @endif
                            </tr>
                            @endforeach
                            @else
                            <td class="card-category text-center" style="color: red;" colspan="7"><em>Tidak ada data <strong>Response</strong> yang dapat di tampilkan.</em></td>
                            @endif
                        </tbody>
                    </table>
                    {{ $response->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection