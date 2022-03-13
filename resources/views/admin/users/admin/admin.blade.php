@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Admins</h6>
            <div class="element-box-tp">
                <div class="controls-above-table">
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-sm btn-secondary" href="{{ route('admin.users.admins.create') }}">Add New Admin</a>
                        </div>
                        <div class="col-sm-6">
                            <form class="form-inline justify-content-sm-end">
                                <input
                                    class="form-control form-control-sm rounded bright"
                                    placeholder="Search">
                                <select
                                    class="form-control form-control-sm rounded bright">
                                    <option selected="selected" value="">Select Status</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Active">Active</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-lg table-v2 table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td class="row-actions">
                                        <a href="{{ route('admin.users.admins.edit', $item->id) }}">
                                            <i class="os-icon os-icon-ui-49"></i>
                                        </a>
                                        <a class="danger" onclick="return confirm('Are you sure to delete?')" href="{{ route('admin.users.admins.destroy', $item->id) }}">
                                            <i class="os-icon os-icon-ui-15"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
