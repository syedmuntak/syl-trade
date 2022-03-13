@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Dashboard</h6>
            <div class="element-content">
                <div class="row">
                    <div class="col-sm-4 col-xxxl-4">
                        <a class="element-box el-tablo" href="#">
                            <div class="label">Total Job Categories</div>
                            <div class="value">{{ count($categories) }}</div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xxxl-4"><a class="element-box el-tablo" href="#">
                            <div class="label">Total Employee</div>
                            <div class="value">{{ count($employees) }}</div>
                        </a></div>
                    <div class="col-sm-4 col-xxxl-4">
                        <a class="element-box el-tablo" href="#">
                            <div class="label">Total Bookings</div>
                            <div class="value">{{ count($bookings) }}</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
