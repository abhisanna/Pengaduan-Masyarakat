@extends('template.master')
@section('content')
@include('sweetalert::alert')
<h4 class="header my-auto"><strong>Rating</strong></h4>
<p style="color: grey;">Berikut rating yang diberikan oleh Penduduk.</p>
<div class="row h-50">

    <!-- read -->
    <div class="col-md-12 mt-3">
        <div class="card card-plain">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-warning">
                            <th class="text-center">#</th>
                            <th class="text-center">Keterangan Rating</th>
                        </thead>
                        <tbody class="font-weight-normal">
                            @if(count($rating)>0)
                            @foreach($rating as $key=>$ratings)
                            <tr>
                                <td class="text-center">{{ $key+1 }}</td>
                            @if($ratings->rating == "tidak puas")
                            <td class="text-center">🙁 (Tidak Puas)</td>
                            @elseif($ratings->rating == "kurang puas")
                            <td class="text-center">😐 (Kurang Puas)</td>
                            @elseif($ratings->rating == "cukup puas")
                            <td class="text-center">😌 (Cukup Puas)</td>
                            @elseif($ratings->rating == "puas")
                            <td class="text-center">😃 (Puas)</td>
                            @else
                            <td class="text-center">😎 (Sangat Puas)</td>
                            @endif
                            </tr>
                            @endforeach
                            @else
                            <td class="card-category text-center" style="color: red;" colspan="2"><em>Tidak ada data <strong>Rating</strong> yang dapat di tampilkan.</em></td>
                            @endif
                        </tbody>
                    </table>
                    {{ $rating->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection