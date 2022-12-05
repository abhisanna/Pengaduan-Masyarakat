@extends('template.master')
@section('content')
@include('sweetalert::alert')
<h4 class="header my-auto"><strong>Admin</strong></h4>
<p style="color: grey;">Data Admin yang Digunakan sebagai Kebutuhan Log In.</p>
<div class="row h-50">
    <div class="col-md-12 h-100 d-table">
        <!-- create -->
        <div class="card card-user d-table-cell align-middle">
            <div class="card-body">
                <form action="{{ route('admin.update', [$admin->id]) }}" method="post" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group pl-1">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="{{ $admin->username }}" placeholder="Masukkan Username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pl-1">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" value="{{ $admin->password }}" placeholder="Masukkan Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group pl-1">
                                <label>E-Mail</label>
                                <input type="email" class="form-control" name="email" value="{{ $admin->email }}" placeholder="Masukkan E-Mail">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mb-2">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-warning btn-round">Update Admin</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection