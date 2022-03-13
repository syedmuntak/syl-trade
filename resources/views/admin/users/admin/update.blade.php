@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Admin Update</h6>
            <div class="element-box-tp">
                <form method="POST" action="{{ route('admin.users.admins.update') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input
                                class="form-control"
                                placeholder="Name"
                                name="name"
                                value="{{ $user->name }}"
                                type="text">
                            </div>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input
                                class="form-control"
                                placeholder="Username"
                                name="username"
                                value="{{ $user->username }}"
                                type="text">
                            </div>
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input
                                    class="form-control"
                                    placeholder="email"
                                    type="email"
                                    value="{{ $user->email }}"
                                    name="email">
                            </div>
                            @error('email')
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
