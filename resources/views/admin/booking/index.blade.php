@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Bookings</h6>
            <div class="element-box-tp">
                <div class="controls-above-table">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-lg table-v2 table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Employeer Name</th>
                                <th>Employee Name</th>
                                <th>Name</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th>Booking Time</th>
                                <th>Booking Date</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                         <tbody>
                            @foreach ($bookings as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->employee->user->name }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->contact_no}}</td>
                                    <td>{{ $item->address}}</td>
                                    <td>{{ $item->booking_time}}</td>
                                    <td>{{ $item->booking_date}}</td>
                                    <td>{{ $item->status}}</td>
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
