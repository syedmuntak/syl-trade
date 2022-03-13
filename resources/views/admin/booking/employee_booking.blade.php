@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Booking</h6>
            <div class="element-box-tp">
                <div class="controls-above-table">
                    <div class="row">
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
                                <th>Employeer Name</th> 
                                <th> Name</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th>Booking Time</th>
                                <th>Booking Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                         <tbody>
                            @foreach ($booking as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td> 
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->contact_no}}</td>
                                    <td>{{ $item->address}}</td>
                                    <td>{{ $item->booking_time}}</td>
                                    <td>{{ $item->booking_date}}</td>
                                    <td>
                                        <span class="badge badge-{{ $item->status == 'Pendding' ? 'warning' : 'success' }}">{{ $item->status}}</span>
                                    </td>
                                    <td class="row-actions">
                                        <a title="status change" onclick="return confirm('Are you sure?')" href="{{ route('admin.hire.changeBookingStatus',['id' => $item->id]) }}">
                                            <i class="os-icon os-icon-ui-49"></i>
                                        </a>
                                    </td>
                                   {{-- <td> <form class="form-inline justify-content-sm-end" method="POST" action="{{ route('admin.hire.changeBookingStatus') }}">
                                    @csrf
                                       
                                 
                                        <select
                                        name="status" class="form-control form-control-sm rounded bright">
                                            <option value="Pending" selected>Pending</option>
                                            <option value="Confirm">Confirm</option>
                                        </select>
                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit">Change</button>
                                        </div>
                                    </form></td> --}}
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