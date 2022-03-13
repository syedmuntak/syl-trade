@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Religions</h6>
            <div class="element-box-tp">
                <div class="controls-above-table">
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-sm btn-secondary" href="{{ route('admin.religion.create') }}">Add New </a>
                            {{-- <a class="btn btn-sm btn-secondary" href="#">Archive </a>
                            <a class="btn btn-sm btn-danger" href="#">Delete</a> --}}
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
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($religions as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td class="text-center">
                                        <div class="status-pill {{ $item->status === 1 ? 'green' : 'yellow' }}" data-title="{{ $item->status === 1 ? 'Active' : 'Inactive' }}"
                                            data-toggle="tooltip">
                                        </div>
                                    </td>
                                    <td class="row-actions">
                                        <a href="{{ route('admin.religion.edit',['id' => $item->id, 'slug' => $item->slug]) }}">
                                            <i class="os-icon os-icon-ui-49"></i>
                                        </a>
                                        <a href="#">
                                            <i class="os-icon os-icon-grid-10"></i>
                                        </a>
                                        <a class="danger" onclick="return confirm('Are you sure to delete?')" href="{{ route('admin.religion.destroy', $item->id) }}">
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
