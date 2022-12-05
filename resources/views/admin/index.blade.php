@extends('template.master')
@section('content')
@include('sweetalert::alert')
<h4 class="header my-auto"><strong>Admin</strong></h4>
<p style="color: grey;">Data Admin yang Digunakan sebagai Kebutuhan Log In.
<p>
<div class="row h-50">
    <div class="col-md-12 h-100 d-table">
        <!-- create -->
        <div class="card card-user d-table-cell align-middle">
            <div class="card-body">
                <form action="{{ route('admin.store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <div class="form-group pl-1">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-group pl-1">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <div class="form-group pl-1">
                                <label>E-Mail</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan E-Mail" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mb-3">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-warning btn-round">Tambah Admin</button>
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
                            <th class="text-center">Username</th>
                            <th class="text-center">E-Mail</th>
                            <th class="text-center">Password</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody class="font-weight-normal">
                            @if(count($admin)>0)
                            @foreach($admin as $key=>$admins)
                            <tr>
                                <td class="text-center">{{ $key+1 }}</td>
                                <td class="text-center">{{ $admins->username }}</td>
                                <td class="text-center">{{ $admins->email }}</td>
                                <td class="text-center">{{ Hash::make('$admins->password') }}</td>
                                <td class="text-center">
                                    <form action="{{ route('admin.destroy', [$admins->id]) }}" method="post" autocomplete="off">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <a href="{{ route('admin.edit', [$admins->id]) }}" class="btn btn-outline-success"><i class="nc-icon nc-refresh-69"></i></a>
                                        <button type="submit" class="btn btn-outline-danger"><i class="nc-icon nc-scissors"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <td class="card-category text-center" style="color: red;" colspan="5"><em>Tidak ada data <strong>Admin</strong> yang dapat di tampilkan.</em></td>
                            @endif
                        </tbody>
                    </table>
                    {{ $admin->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection