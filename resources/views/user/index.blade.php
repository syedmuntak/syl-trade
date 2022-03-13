@extends('layouts.user')
@section('content')
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-text header-text">
                        <h2>Fast Electrical Service Provider</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="get" role="search" action="{{ route('user.category.employee.search') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 align-self-center">
                                <fieldset>
                                    <select name="district_id" class="form-select">
                                        <option selected value="">All Areas</option>
                                        @foreach ($districts as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-4 align-self-center">
                                <fieldset>
                                    <select name="category_id" class="form-select">
                                        <option selected value="">Select category</option>
                                        @foreach ($categories_all as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <ul class="categories">
                        @foreach ($categories as $item)
                            @php
                                $icon = $item->icon === 'icon.png' ? asset('default/icon.png') : asset('uploads/category/icon/' . $item->icon);
                            @endphp
                            <li>
                                <a href="{{ url('user/category/category-wise-profile', ['id' => $item->id, 'slug' => $item->slug]) }}">
                                    <span class="icon"><img
                                            src="{{ $icon }}"
                                            alt="{{ $item->name }}"></span>
                                    {{ $item->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Expert Profiles</h2>
                        <h6>Check Them Out</h6>
                    </div>
                </div>
                @foreach ($profiles as $item)

                @php
                    $path = $item->user->user_image === null ? asset('default/default.png') : asset('uploads/profile/'.$item->user->user_image);
                @endphp
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a
                            href="{{ url('user/employee/profile', ['id' => $item->id, 'slug' => Str::slug($item->user->name)]) }}">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="{{ $path }}"
                                            alt="{{ $item->user->name }}" />
                                    </div>
                                    <div class="text-container">
                                        <h6>{{ $item->user->name }}</h6>
                                        <small>{{ $item->category->name }}</small><br><br>
                                        <a href="{{ url('user/employee/profile', ['id' => $item->id, 'slug' => Str::slug($item->user->name)]) }}"
                                            class="btn btn-primary btn-sm border-0" title="details">Details</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



<div id="cards_landscape_wrap-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Popular Profiles</h2>
                    <h6>Take a look</h6>
                </div>
            </div>
            @foreach ($popular_profiles as $item)

            @php
                $path = $item->user->user_image === null ? asset('default/default.png') : asset('uploads/profile/'.$item->user->user_image);
            @endphp
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a
                        href="{{ url('user/employee/profile', ['id' => $item->id, 'slug' => Str::slug($item->user->name)]) }}">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="{{ $path }}"
                                        alt="{{ $item->user->name }}" />
                                </div>
                                <div class="text-container">
                                    <h6>{{ $item->user->name }}</h6>
                                    <small>{{ $item->category->name }}</small><br>
                                    <i>Total hired: <span class="badge badge-success bg-dark">{{ $item->bookings_count }}</span> times</i><br><br>
                                    <a href="{{ url('user/employee/profile', ['id' => $item->id, 'slug' => Str::slug($item->user->name)]) }}"
                                        class="btn btn-primary btn-sm border-0" title="details">Details</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
