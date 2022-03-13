@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Admin Create</h6>
            <div class="element-box-tp">
                <form method="POST" action="{{ route('admin.users.admins.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input
                                class="form-control"
                                placeholder="Name"
                                name="name"
                                type="text">
                            </div>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input
                                class="form-control"
                                placeholder="Username"
                                name="username"
                                type="text">
                            </div>
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input
                                    class="form-control"
                                    placeholder="email"
                                    type="email"
                                    name="email">
                            </div>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input
                                    class="form-control"
                                    placeholder="password"
                                    type="password"
                                    name="password">
                            </div>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-buttons-w">
                        <button class="btn btn-primary" type="submit">Add new Admin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
