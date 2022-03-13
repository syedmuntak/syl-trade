
@extends('layouts.user')
@push('css')
<link href="{{ asset('user/profile.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="top-text header-text">
                    <h6>{{ $employee->category->name }}</h6>
                    <h2>{{ $employee->user->name }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-page">
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                              @php
                                $path = $employee->user->user_image === null ? asset('default/default.png') : asset('uploads/profile/'.$employee->user->user_image);
                              @endphp
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ $path }}" alt="{{ $employee->user->name }}" class="" style="height: 200px; width: 200px"/>
                                <div class="mt-3">
                                    <h4>{{ $employee->user->name }}</h4>
                                    <p class="text-secondary mb-1">{{ $employee->category->name }}</p>


                                    <button class="btn btn-success" style="padding: 10px 47px;"><a class="text-white" href="{{ route('user.hire.index', ['id' => $employee->id, 'slug' => Str::slug($employee->user->name)]) }}">Hire </a></button>

                                    {{-- <button class="btn btn-outline-primary">Message</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $employee->user->name }}
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $employee->user->email }}
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $employee->gender->name ?? 'N/A' }}
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Religion</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $employee->religion->name ?? 'N/A' }}
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $employee->contact_no }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Address</i></h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Division</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            {{ $employee->division->name ?? 'N/A' }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">District</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            {{ $employee->district->name ?? 'N/A' }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Upazila</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            {{ $employee->upazila->name ?? 'N/A' }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            {{ $employee->location }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Job Details</i></h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Job Type</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            {{ $employee->job_type ?? 'N/A' }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Skill Level</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            {{ $employee->skill_level ?? 'N/A' }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Minimum Cost</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            {{ money($employee->minimum_cost) ?? 'N/A' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Experiences</i></h6>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Title</h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">From</h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">To</h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Responsiblity</h6>
                                        </div>
                                    </div>
                                    @forelse ($employee->work_experiences as $item)
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 text-secondary">
                                            {{ $item->work_title ?? 'N/A' }}
                                        </div>
                                        <div class="col-sm-3 text-secondary">
                                            {{ $item->to ?? 'N/A' }}
                                        </div>
                                        <div class="col-sm-3 text-secondary">
                                            {{ $item->from ?? 'N/A' }}
                                        </div>
                                        <div class="col-sm-3 text-secondary">
                                            {{ $item->responsibility ?? 'N/A' }}
                                        </div>
                                    </div>
                                    @empty
                                    <div class="row">
                                        <div class="col-md-12 text-center mt-2">
                                            There is no records
                                        </div>
                                    </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm" title="back">Back</a>
                            <a href="{{ route('user.hire.index', ['id' => $employee->id, 'slug' => Str::slug($employee->user->name)]) }}" class="btn btn-success btn-sm"  title="hire">Hire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  @endsection
