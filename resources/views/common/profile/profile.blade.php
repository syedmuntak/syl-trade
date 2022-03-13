@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-5">
            <div class="user-profile compact">
                @php
                    $path = auth()->user()->user_image === null ? asset('default/default.png') : asset('uploads/profile/'.auth()->user()->user_image);
                @endphp
                <div class="up-head-w" style="background-image:url({{ $path }})">
                    <div class="up-social"><a href="#"><i class="os-icon os-icon-twitter"></i></a><a href="#"><i
                                class="os-icon os-icon-facebook"></i></a></div>
                    <div class="up-main-info">
                        <h2 class="up-header">{{ auth()->user()->name }}</h2>
                        <h6 class="up-sub-header">
                            {{ auth()->user()->user_role }}
                            @if (auth()->user()->user_role === 'Employee')
                                ({{ auth()->user()->employee->category->name }})
                            @endif
                        </h6>
                    </div><svg class="decor" width="842px" height="219px" viewBox="0 0 842 219"
                        preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF">
                            <path class="decor-path"
                                d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="element-wrapper">
                <div class="element-box">
                    <h6 class="element-header">General Info</h6>
                    <div class="timed-activities compact">
                        <div class="timed-activity">
                            <div class="ta-record-w">
                                <div class="ta-date"><span>Joining date:</span>
                                    {{ date('F j, Y', strtotime(auth()->user()->created_at)) }}</div>
                                <div class="ta-record">
                                    <div class="ta-timestamp"><strong>Name:</strong></div>
                                    <div class="ta-activity">{{ auth()->user()->name }}</div>
                                </div>
                                <div class="ta-record">
                                    <div class="ta-timestamp"><strong>Username:</strong></div>
                                    <div class="ta-activity">{{ auth()->user()->username }}</div>
                                </div>
                                <div class="ta-record">
                                    <div class="ta-timestamp"><strong>Role:</strong></div>
                                    <div class="ta-activity">{{ auth()->user()->user_role }}
                                        @if (auth()->user()->user_role === 'Employee')
                                            ({{ auth()->user()->employee->category->name }})
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (auth()->user()->user_role === 'Employee')
                    <div class="element-box">
                        <h6 class="element-header">Professional Information</h6>
                        <div class="timed-activities compact">
                            <div class="timed-activity">
                                <div class="ta-record-w">
                                    <div class="ta-date"><span>Addresses:</span></div>
                                    <div class="ta-record">
                                        <div class="ta-timestamp"><strong>Location:</strong></div>
                                        <div class="ta-activity">{{ auth()->user()->employee->location ?? 'N/A' }}
                                        </div>
                                    </div>
                                    <div class="ta-record">
                                        <div class="ta-timestamp"><strong>Division:</strong></div>
                                        <div class="ta-activity">
                                            {{ auth()->user()->employee->division->name ?? 'N/A' }}</div>
                                    </div>
                                    <div class="ta-record">
                                        <div class="ta-timestamp"><strong>District:</strong></div>
                                        <div class="ta-activity">
                                            {{ auth()->user()->employee->district->name ?? 'N/A' }}</div>
                                    </div>
                                    <div class="ta-record">
                                        <div class="ta-timestamp"><strong>Upazila:</strong></div>
                                        <div class="ta-activity">
                                            {{ auth()->user()->employee->upazila->name ?? 'N/A' }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="timed-activity">
                                <div class="ta-record-w">
                                    <div class="ta-date"><span>Job Details:</span></div>
                                    <div class="ta-record">
                                        <div class="ta-timestamp"><strong>Gender:</strong></div>
                                        <div class="ta-activity">
                                            {{ auth()->user()->employee->gender->name ?? 'N/A' }}</div>
                                    </div>
                                    <div class="ta-record">
                                        <div class="ta-timestamp"><strong>Religion:</strong></div>
                                        <div class="ta-activity">
                                            {{ auth()->user()->employee->religion->name ?? 'N/A' }}</div>
                                    </div>
                                    <div class="ta-record">
                                        <div class="ta-timestamp"><strong>Contact No:</strong></div>
                                        <div class="ta-activity">{{ auth()->user()->employee->contact_no ?? 'N/A' }}
                                        </div>
                                    </div>
                                    <div class="ta-record">
                                        <div class="ta-timestamp"><strong>Job Type:</strong></div>
                                        <div class="ta-activity">{{ auth()->user()->employee->job_type ?? 'N/A' }}
                                        </div>
                                    </div>
                                    <div class="ta-record">
                                        <div class="ta-timestamp"><strong>Skill Level:</strong></div>
                                        <div class="ta-activity">{{ auth()->user()->employee->skill_level ?? 'N/A' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-box">
                        <h6 class="element-header">Professional Experiences</h6>
                        <div class="timed-activities compact">
                            <div class="timed-activity">
                                @forelse (auth()->user()->employee->work_experiences as $item)
                                    <div class="ta-record-w">
                                        <div class="ta-date"><span>{{ $item->job_title }}</span></div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp"><strong>From:</strong></div>
                                            <div class="ta-activity">{{ date('d/m/Y', strtotime($item->from)) }}</div>
                                        </div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp"><strong>To:</strong></div>
                                            <div class="ta-activity">{{ date('d/m/Y', strtotime($item->to)) }}</div>
                                        </div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp"><strong>Responsibility:</strong></div>
                                            <div class="ta-activity">{{ $item->responsibility }}</div>
                                        </div>
                                    </div>
                                @empty
                                    No Record
                                @endforelse
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-sm-7">
            <div class="element-wrapper">
                <div class="element-box">
                    <form id="formValidate" method="POST" enctype="multipart/form-data"
                        action="{{ route('common.profile.update') }}">
                        @csrf
                        <div class="element-info">
                            <div class="element-info-with-icon">
                                <div class="element-info-icon">
                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                </div>
                                <div class="element-info-text">
                                    <h5 class="element-inner-header">Profile Settings</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group"><label for="">Name</label><input class="form-control"
                                        data-error="Your name address is invalid" placeholder="Enter email"
                                        required="required" type="text" name="name" value="{{ auth()->user()->name }}">
                                    <div class="help-block form-text with-errors form-control-feedback">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for=""> Email address</label><input
                                        class="form-control" data-error="Your email address is invalid"
                                        placeholder="Enter email" required="required" type="email" name="email"
                                        value="{{ auth()->user()->email }}">
                                    <div class="help-block form-text with-errors form-control-feedback">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label for=""> Username</label>
                            <input class="form-control" data-error="Your username is invalid" placeholder="Enter username"
                                required="required" type="text" name="username" value="{{ auth()->user()->username }}">
                            <div class="help-block form-text with-errors form-control-feedback">
                                @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group"><label for=""> Profile Image</label>
                            <input class="form-control" type="file" name="user_image">
                            <div class="help-block form-text with-errors form-control-feedback">
                                @error('user_image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-buttons-w"><button class="btn btn-primary" type="submit">
                                Submit</button></div>
                    </form>
                </div>
                @if (auth()->user()->user_role === 'Employee')
                    <div class="element-box">
                        <form id="formValidate" method="POST" enctype="multipart/form-data"
                            action="{{ route('common.profile.employee.info.update') }}">
                            @csrf
                            <div class="element-info">
                                <div class="element-info-with-icon">
                                    <div class="element-info-icon">
                                        <div class="os-icon os-icon-wallet-loaded"></div>
                                    </div>
                                    <div class="element-info-text">
                                        <h5 class="element-inner-header">Employee Information</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <select name="category_id" id="category_id" class="form-control" required>
                                        <option selected value="">Choose Category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}" {{ auth()->user()->employee->category_id === $item->id ? 'selected' : '' }}> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="gender_id" id="gender_id" class="form-control">
                                        <option selected value="">Choose Gender</option>
                                        @foreach ($genders as $item)
                                            <option value="{{ $item->id }}" {{ auth()->user()->employee->gender_id === $item->id ? 'selected' : '' }}> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="religion_id" id="religion_id" class="form-control">
                                        <option selected value="">Choose Religion</option>
                                        @foreach ($religions as $item)
                                            <option value="{{ $item->id }}" {{ auth()->user()->employee->religion_id === $item->id ? 'selected' : '' }}> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Select Division</label>
                                    <select name="division_id" id="division_id" class="form-control">
                                        <option selected value="">Choose Division</option>
                                        @foreach ($divisions as $item)
                                            <option value="{{ $item->id }}" {{ auth()->user()->employee->division_id === $item->id ? 'selected' : '' }}> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Select District</label>
                                    <select name="district_id" id="district_id" class="form-control">
                                        <option selected value="">Choose District</option>
                                        @foreach ($districts as $item)
                                            <option value="{{ $item->id }}" {{ auth()->user()->employee->district_id === $item->id ? 'selected' : '' }}> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Select Upazila</label>
                                    <select name="upazila_id" id="upazila_id" class="form-control">
                                        <option selected value="">Choose Upazila</option>
                                        @foreach ($upazilas as $item)
                                            <option value="{{ $item->id }}" {{ auth()->user()->employee->upazila_id === $item->id ? 'selected' : '' }}> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Location</label>
                                    <input id="location" name="location" placeholder="Location" class="form-control"
                                        type="text" value="{{ auth()->user()->employee->location }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Contact No</label>
                                    <input id="contact_no" name="contact_no" placeholder="Mobile No" class="form-control"
                                        type="text" value="{{ auth()->user()->employee->contact_no }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Job Type</label>
                                    <select name="job_type" id="job_type" class="form-control">
                                        <option selected value="">Choose Type</option>
                                        <option value="PartTime" {{ auth()->user()->employee->job_type === 'PartTime' ? 'selected' : '' }}> PartTime</option>
                                        <option value="FullTime" {{ auth()->user()->employee->job_type === 'FullTime' ? 'selected' : '' }}> FullTime</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Skill Level</label>
                                    <select name="skill_level" id="skill_level" class="form-control">
                                        <option selected value="">Choose Type</option>
                                        <option value="Mid Level" {{ auth()->user()->employee->skill_level === 'Mid Level' ? 'selected' : '' }}> Mid Level</option>
                                        <option value="Beginner Level" {{ auth()->user()->employee->skill_level === 'Beginner Level' ? 'selected' : '' }}> Beginner Level</option>
                                        <option value="Expert Level" {{ auth()->user()->employee->skill_level === 'Expert Level' ? 'selected' : '' }}> Expert Level</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Minimum Cost</label>
                                    <input type="number" min="0" name="minimum_cost" value="{{ auth()->user()->employee->minimum_cost }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-buttons-w"><button class="btn btn-primary" type="submit">
                                    Submit</button></div>
                        </form>
                    </div>
                @endif
                @if (auth()->user()->user_role === 'Employeer')
                    <div class="element-box">
                        <form id="formValidate" method="POST" enctype="multipart/form-data"
                            action="{{ route('common.profile.employeer.info.update') }}">
                            @csrf
                            <div class="element-info">
                                <div class="element-info-with-icon">
                                    <div class="element-info-icon">
                                        <div class="os-icon os-icon-wallet-loaded"></div>
                                    </div>
                                    <div class="element-info-text">
                                        <h5 class="element-inner-header">Employeer Information</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input id="contract_person" name="contract_person" placeholder="Contract Person Name"
                                        class="form-control" type="text" value="{{ auth()->user()->employeer->contract_person }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="contact_no" class="form-control" id="inputEmail4"
                                        placeholder="Contact No" value="{{ auth()->user()->employeer->contact_no }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <input name="address" placeholder="address" class="form-control" type="text" value="{{ auth()->user()->employeer->address }}">
                                </div>
                            </div>
                            <div class="form-buttons-w"><button class="btn btn-primary" type="submit">
                                    Submit</button></div>
                        </form>
                    </div>
                @endif
                <div class="element-box">
                    <form id="formValidate" action="{{ route('common.profile.change.password') }}" method="POST">
                        @csrf
                        <div class="element-info">
                            <div class="element-info-with-icon">
                                <div class="element-info-icon">
                                    <div class="os-icon os-icon-lock"></div>
                                </div>
                                <div class="element-info-text">
                                    <h5 class="element-inner-header">Password Settings</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group"><label for=""> Password</label><input class="form-control"
                                        data-minlength="6" placeholder="Current Password" required="required" type="password" name="current_password">
                                        @error('current_password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for="">New Password</label><input
                                        class="form-control" data-match-error="Passwords don&#39;t match"
                                        placeholder="New Password" required="required" type="password"
                                        name="new_password">
                                    <div class="help-block form-text text-muted form-control-feedback">
                                        Minimum of 6 characters</div>
                                    @error('new_password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for="">Confirm Password</label><input
                                        class="form-control" data-match-error="Passwords don&#39;t match"
                                        placeholder="Confirm Password" required="required" type="password"
                                        name="confirm_password">
                                    <div class="help-block form-text with-errors form-control-feedback">
                                        @error('confirm_password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-buttons-w"><button class="btn btn-primary" type="submit">
                                Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
