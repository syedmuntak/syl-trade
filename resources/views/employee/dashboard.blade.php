@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Employee Dashboard</h6>
            <div class="element-content">
                <div class="row">
                    <div class="col-sm-4 col-xxxl-4">
                        <a class="element-box el-tablo" href="#">
                            <div class="label">Total Hired</div>
                            <div class="value">{{ count($bookings) }}</div>
                        </a>
                    </div>
                @php
                $path = auth()->user()->user_image === null ? asset('default/default.png') : asset('uploads/profile/'.auth()->user()->user_image);
                @endphp
                            <div class="col-sm-8 col-xxxl-8">
                                <a class="element-box el-tablo" href="#">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ $path }}" alt="" srcset="" width="100" height="100">
                                        </div>
                                        <div class="col-md-8">
                                            <h2>{{ auth()->user()->name }}</h2>
                                            <p>
                                                <span class="badge badge-primary">{{ auth()->user()->user_role }}</span>
                                            </p>
                                            <p class="m-0">
                                                <span class="badge badge-primary">email:</span> {{ auth()->user()->email }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
