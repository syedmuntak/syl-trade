@extends('layouts.user')
@section('content')

<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="top-text header-text">
                    <h6>Categories with Simple Tabs</h6>
                    <h2>We have a wide range of service categories for you</h2>
                </div>
            </div>
            @php
                $categories_all = App\Models\Category::all();
                $districts = App\Models\District::all();
            @endphp
            <div class="col-lg-12 m-3">
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
        </div>
    </div>
</div>

<div class="category-post mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="cards_landscape_wrap-2">
                    <div class="container" style="padding-top: 0">
                        <div class="row">
                            @forelse ($employees as $item)
                                @php
                                $path = $item->user->user_image === null ? asset('default/default.png') : asset('uploads/profile/'.$item->user->user_image);
                            @endphp
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <a href="{{ url('user/employee/profile', ['id' => $item->id, 'slug' => Str::slug($item->user->name)] ) }}">
                                    <div class="card-flyer">
                                        <div class="text-box">
                                            <div class="image-box">
                                                <img src="{{ $path }}" alt="{{ $item->user->name }}" />
                                            </div>
                                            <div class="text-container">
                                                <h6>{{ $item->user->name }}</h6>
                                                <small>{{ $item->category->name }}</small><br><br>
                                                <a href="{{ url('user/employee/profile', ['id' => $item->id, 'slug' => Str::slug($item->user->name)] ) }}" class="btn btn-primary btn-sm border-0" title="details">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @empty
                            <div class="col-md-12 mt-5">
                                <h3 class="text-center">No Person found</h3>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  @endsection
