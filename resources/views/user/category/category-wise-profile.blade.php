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
        </div>
    </div>
</div>

<div class="category-post mt-5">
    <div class="container">
        <div class="row">
            <aside class="col-sm-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title fs-3">Categories</div>
                    </div>
                    <ul class="list-group">
                        @foreach ($categories as $item)
                        <li class="list-group-item {{ $item->id == Request::route('id') ? 'list-group-item-success' : '' }} d-flex justify-content-between align-items-center">
                            <a href="{{ url('user/category/category-wise-profile', ['id' => $item->id, 'slug' => $item->slug]) }}" style="font-weight: 600">{{ $item->name }}</a>
                            <span class="badge bg-primary rounded-pill">{{ count($item->profiles) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
            <div class="col-md-9">
                <div id="cards_landscape_wrap-2">
                    <div class="container" style="padding-top: 0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading" style="padding-top: 10px">
                                  <h2 style="margin-bottom: 0">{{ $category->name }}</h2>
                                  <h6>Check Them Out</h6>
                                </div>
                              </div>
                              @foreach ($profiles as $item)
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
                              @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  @endsection
