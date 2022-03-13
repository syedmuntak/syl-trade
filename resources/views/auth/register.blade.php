<!DOCTYPE html>
<html>
<head>
    <title>Register || Hiring Service</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('/') }}custom/auth.css">
</head>
<body style="background: linear-gradient(to right, #36dbff, #d8d0dd, #b9999b);">
    @php
        $genders = \App\Models\Gender::all();
        $religions = \App\Models\Religion::all();
        $categories = \App\Models\Category::all();
        $divisions = \App\Models\Division::all();
        $districts = \App\Models\District::all();
        $upazilas = \App\Models\Upazila::all();
    @endphp
    <div id="overlay" class="overlay"></div>
    <section class="testimonial py-5" id="testimonial">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 py-5 bg-primary text-white text-center ">
                    <div class=" ">
                        <div class="card-body">
                            <img alt="" src="{{ asset('/') }}img/logo-big.png" style="width:30%">
                            <h2 class="py-3">Registration</h2>
                            <p>Join us and get the opportunity</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 py-5 border">
                    <form method="POST" action="{{ route('auth.register') }}">
                        @csrf
                        <h4 class="pb-4">Credential</h4>

                        @if(Session::has('message'))
                            <p class="alert alert-danger">{{Session::get('message')}}</p>
                        @endif

                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <input id="Full Name" name="name" placeholder="Full Name" class="form-control" type="text" required autocomplete="off">
                              @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <input type="email" name="email" class="form-control" placeholder="Email" required autocomplete="off">
                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input name="username" placeholder="Username" class="form-control" required="required" type="text" autocomplete="off">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input name="password" placeholder="password" class="form-control" required="required" type="password" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <select name="user_role" id="user_role" class="form-control-sm">
                                    <option selected value="">Choose Role</option>
                                    <option value="Employeer"> Employeer</option>
                                    <option value="Employee"> Employee</option>
                                </select>
                            </div>
                        </div>
                        <div id="employeer_info">
                            <h4 class="pb-4">Employeer Information</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                  <input id="contract_person" name="contract_person" placeholder="Contract Person Name" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-4">
                                  <input type="text" name="contact_no" class="form-control" id="inputEmail4" placeholder="Contact No">
                                </div>
                                <div class="form-group col-md-4">
                                    <input name="address" placeholder="address" class="form-control" type="text">
                                </div>
                              </div>
                        </div>
                        <div id="employee_info">
                            <h4 class="pb-4">Employee Information</h4>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option selected value="">Choose category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="gender_id" id="gender_id" class="form-control">
                                        <option selected value="">Choose Gender</option>
                                        @foreach ($genders as $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="religion_id" id="religion_id" class="form-control">
                                        <option selected value="">Choose Religion</option>
                                        @foreach ($religions as $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
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
                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Select District</label>
                                    <select name="district_id" id="district_id" class="form-control">

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Select Upazila</label>
                                    <select name="upazila_id" id="upazila_id" class="form-control">

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Location</label>
                                    <input id="location" name="location" placeholder="Location" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Contact No</label>
                                    <input id="contact_no" name="contact_no" placeholder="Mobile No" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Job Type</label>
                                    <select name="job_type" id="job_type" class="form-control">
                                        <option selected value="">Choose Type</option>
                                        <option value="PartTime"> PartTime</option>
                                        <option value="FullTime"> FullTime</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Skill Level</label>
                                    <select name="skill_level" id="skill_level" class="form-control">
                                        <option selected value="">Choose Type</option>
                                        <option value="Mid Level"> Mid Level</option>
                                        <option value="Beginner Level"> Beginner Level</option>
                                        <option value="Expert Level"> Expert Level</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Minimum Cost</label>
                                    <input type="number" min="0" name="minimum_cost" value="0" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                      <label class="form-check-label" for="invalidCheck2">
                                        <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                      </label>
                                    </div>
                                    <small>Already have an account? <a href="{{ route('login') }}">Please login</a></small>
                                  </div>

                              </div>
                        </div>

                        <div class="form-row">
                            <button type="submit" class="btn btn-success mr-3">Register your account</button>
                            <a href="{{ url('/') }}" class="btn btn-danger" title="back">Back to Home</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $('#employee_info').hide();
        $('#employeer_info').hide();
        $("#category_id").prop('required',false);
        $(function(){
            $('#user_role').change(function(){
                var role = $(this).val();

                if (role === 'Employee') {
                    $('#employee_info').show();
                    $('#employeer_info').hide();

                    $("#category_id").prop('required',true);

                    $('#employeer_info [name = contract_person]').val('')
                    $('#employeer_info [name = contact_no]').val('')
                    $('#employeer_info [name = address]').val('')
                }
                if (role === 'Employeer') {
                    $('#employee_info').hide();
                    $('#employeer_info').show();

                    $("#category_id").prop('required',false);
                }
                if (role === '') {
                    $('#employee_info').hide();
                    $('#employeer_info').hide();

                    $("#category_id").prop('required',false);
                }
            });

            $('#division_id').change(function () {
                var division_id = $(this).val();
                $.get("{{route('auth.districts')}}",{
                    division_id: division_id},function (result) {
                    var show_data = '';
                    $.each(result,function (i, value) {
                        show_data += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#district_id').html(show_data);
                });
            });
            $('#district_id').change(function () {
                var district_id = $(this).val();
                $.get("{{route('auth.upazilas')}}",{
                    district_id: district_id},function (result) {
                    var show_data = '';
                    $.each(result,function (i, value) {
                        show_data += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#upazila_id').html(show_data);
                });
            });
        });
    </script>
</body>
</html>
